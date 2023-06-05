<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Support\Facades\Validator;


class HomeController extends Controller
{
    public function home()
    {
        $product=Product::all()->count();
        $category=Category::all()->count();
        $brand=Brand::all()->count();
       


        return view ('backend.pages.home',compact('product','category','brand'));
    }

    public function login()
    {

        return view ('backend.pages.login');
    }

    public function dologin(Request $request)
    {
        $validate=Validator::make($request-> all(),[
            'email'=>'required',
            'password'=>'required | min:5'
        ]);

        if ($validate->fails())
        {
            toastr()->error($validate->getMessageBag());
            return redirect()->back();
        }

        $credentials=$request->only(['email','password']);
        if (auth()->attempt($credentials)){
            toastr()->success('Login Success');
            return redirect()->route('home');
             }
             toastr()->error('Invalid Credentials');
             return redirect()->back();
    }

    public function logout()
    {
        auth()->logout();
        toastr()->success('Logout Success');
        return redirect()->route('login');


    }
}
