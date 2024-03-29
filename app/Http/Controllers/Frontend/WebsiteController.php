<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Mail\EmailVerification;
use App\Models\Orderdetail;
use App\Models\Order;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;




use Illuminate\Http\Request;
use Throwable;

class WebsiteController extends Controller
{
    public function webhome(){
        $categories=Category::all();
        $products=Product::all();
       
        return view('frontend.pages.webhome',compact('categories','products'));
    }

   
    public function regstore(Request $request)
    {
      $validate=Validator::make($request->all(),[
         'first_name'=>'required',
         'last_name'=>'required',
         'customer_email'=>'required|unique:users,email',
         'password'=>'required',
         'contact'=>'required',
         'address'=>'required'
         
       
      ]);

      if($validate->fails())
      {
          toastr()->error('Something went wrong.');
          return redirect()->back();
      }

      User::create([
          'first_name'=>$request->first_name,
          'last_name'=>$request->last_name,
          'email'=>$request->customer_email,
          'password'=>bcrypt($request->password),
          'contact'=>$request->contact,
          'address'=>$request->address,
          'status'=>'active'
         
      ]);

      toastr()->success('Registration success.');
      return redirect()->back();
    }

    public function weblogin(){
        return view('frontend.pages.weblogin');
    }

    public function loginstore(Request $request)
    {
        $validate=Validator::make($request->all(),[
           'email'=>'required',
           'password'=>'required'
        ]);
        if($validate->fails())
        
           {
               toastr()->error($validate->getMessageBag());
               return redirect()->back();
           }
           $credentials=$request->except('_token');

           if(auth()->guard('user')->attempt($credentials))
           {
            //    if(auth()->user()->email_varified_at!=null)
                    {
                      toastr()->success('Login success');
                      return redirect()->route('website');
                     }
                    //  $user_id=auth()->user()->id;
  
                    //  Auth::logout();
  
                    // toastr()->warning('Email not verified');
                    // return redirect()->back()->with('userId',$user_id);
          }
          toastr()->error('Invalid Credentials');
          return redirect()->back();
      }

      public function emailVerify($id){
          $user=User::find($id);
          $link=route('email.verify.link',$user->id);
      
          Mail::to($user->email)->send(new EmailVerification($link));
      
           $user->update([
              'expired_at'=>Carbon::now()->addMinute(5)
           ]);
          toastr()->success('Verification link sent to your email.');
          return redirect()->back();
      }

     

      public function emailverifylink($id){
          $user=User::find($id);
          if($user->expired_at > Carbon::now())
          {
              $user->update([
                  'email_verified_at'=>now()
              ]);
              toastr()->success('Email verification success. Please login.');
              return redirect()->route('website');
      
          }
        
         toastr()->warning('Link expired');
        return redirect()->route('website');
      }

      public function weblogout(){
          auth()->logout();
          toastr()->warning('Loged out');
          return redirect()->back();
      
       }

       public function productsearch(Request $request){
      
          $products=Product::where('name','LIKE','%'.$request->search_key.'%')->get();
      
          return view('frontend.pages.productsearch',compact('products'));
      
          
       }
       
       
        public function addtocart($id){
       
           $cart=session()->get('cart');
           $product=Product::find($id);
           if(empty($cart)){
       
               $newcart[$id]=[
                   'name'=>$product->name,
                   'image'=>$product->image,
                   'price'=>$product->price,
                   'quantity'=>1,
                   'sub_total'=>$product->price*1
               ];
       
               session()->put('cart',$newcart);
       
           }else{
               if(array_key_exists($id,$cart)){
                   $cart[$id]['quantity']=$cart[$id]['quantity']+1;
                   $cart[$id]['sub_total']=$cart[$id]['quantity']=$cart[$id]['price'];
                   session()->put('cart',$cart);
               }else{
                   $cart[$id]=[
                       'name'=>$product->name,
                       'image'=>$product->image,
                       'price'=>$product->price,
                       'quantity'=>1,
                       'sub_total'=>$product->price*1,
       
                   ];
       
                   session()->put('cart',$cart);
               }
           }
          
          

           toastr()->success('Product Added to Cart');
           return redirect()->back();
       
        }
        
        
          public function cartview(){
            $mycart=session()->get('cart');
            return view('frontend.pages.cart',compact('mycart'));
          }
        
          public function cartitemremove($id){
                $cart=session()->get('cart');
                unset($cart[$id]);
                session()->put('cart',$cart);
                return redirect()->back();
          }
        
          public function cartclear(){
            session()->forget('cart');
            return redirect()->back();
        
            }
        
          public function checkout(){
            return view('frontend.pages.checkout');
          }


        public function order(Request $request){

            $mycart=session()->get('cart');

                try{

                    DB::beginTransaction();
                    //crate order first

                    $order=Order::create([
                        'user_id'=>auth('user')->user()->id,
                        'name'=>$request->first_name .' '. $request->last_name,
                        'email'=>$request->email,
                        'address'=>$request->address,
                        'payment_method'=>$request->paymentMethod,
                        'total'=>array_sum(array_column($mycart,'sub_total')),
                    ]);

                    //order details create
                    foreach($mycart as $key=>$cart)

                        {
                            Orderdetail::create([
                                'order_id'=>$order->id,
                                'product_id'=>$key,
                                'price'=>$cart['price'],
                                'qty'=>$cart['quantity'],
                                'subtotal'=>$cart['sub_total']

                            ]);
                        }

                    DB::commit();
                    toastr()->success('Order Placed');
                    return redirect()->back();
                }catch(Throwable $e)
                    {
                        DB::rollBack();
                        toastr()->error('Something went wrong');
                        return redirect()->back();

                    }

        }

        public function profile(){
            $user=User::where('id',auth('user')->user()->id)->get();
            return view('frontend.pages.userprofile',compact('user'));
        }


}

          
        
   
  


          
        



       


       
      
        



        
        

  
   





