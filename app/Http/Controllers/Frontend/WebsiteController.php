<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
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
         'customer_name'=>'required',
         'customer_email'=>'required',
         'password'=>'required',
         'contact'=>'required',
         'address'=>'required'
         
       
      ]);

      if($validate->fails())
      {
          toastr()->error($validate->getMessageBag());
          return redirect()->back();
      }

      User::create([
          'name'=>$request->customer_name,
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
           'password'=>'required',
        ]);

        if($validate->fails())
        {
            toastr()->error($validate->getMessageBag());
            return redirect()->back();
        }

        $credentials=$request->except('_token');
       if(auth()->attempt($credentials))
       {
           toastr()->success('Login success');
           return redirect()->back();
       }
        toastr()->error('Login failed');
        return redirect()->back();
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

}
