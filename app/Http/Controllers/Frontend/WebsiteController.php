<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Mail\EmailVerification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;


use Illuminate\Http\Request;

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
          'type'=>'customer',
          'status'=>'active'
      ]);

      toastr()->success('Registration success.');
      return redirect()->back();
    }

   
    public function weblogin(Request $request)
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

       if(auth()->attempt($credentials))
       {
        
            if(auth()->user()->email_varified_at!=null)
                {
                    toastr()->success('Login success');
                    return redirect()->route('website')();
                }
                $user_id=auth()->user()->id;

                Auth::logout();

                toastr()->warning('Email not verified');
                return redirect()->back()->with('userId',$user_id);
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
   
    return redirect()->back()->with('msg','Product added to crat.');

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
}
