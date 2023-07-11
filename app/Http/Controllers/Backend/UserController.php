<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function adminlist(){
        $admins=User::where('type','=','admin')->get();
        return view ('backend.pages.admin.list',compact('admins'));
    }
    public function adminform(){
        
        return view ('backend.pages.admin.form');
    }

    public function adminstore(Request $request){

        $validate=Validator::make($request->all(),[
            'first_name'=>'required',
            'last_name'=>'required',
            'contact'=>'required',
            'address'=>'required',
            'status'=>'required',
            
            
            'email'=>'required',
            'password'=>'required'
        ]);

        if($validate->fails()){

            toastr()->error('Validation failed.');
            return redirect()->back();
        }

        User::create([
            'first_name'=>$request-> first_name,
            'last_name'=>$request-> last_name,
            'contact'=>$request-> contact,
            'address'=>$request->address,
            
            'email'=>$request-> email,
            
            'status'=>$request->status,
            'type'=>'admin',
            
            'password'=>bcrypt($request->password)

        ]);

        toastr()->success('Admin created successfully.');

        return redirect()->route('admin.list');
        
    }

    public function customerlist(){

        $customers=User::where('type','=','customer')->get();

        return view('backend.pages.customer.list',compact('customers'));
    }

}
