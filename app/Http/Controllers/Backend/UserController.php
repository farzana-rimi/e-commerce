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

        User::create([
            'name'=>$request-> admin_name,
            'contact'=>$request-> contact,
            'address'=>$request->address,
            
            'email'=>$request-> email,
            
            'status'=>$request->status,
            'type'=>'admin',
            
            'password'=>bcrypt($request->password)

        ]);

        return redirect()->route('admin.list');
        
    }

    public function customerlist(){

        $customers=User::where('type','=','customer')->get();

        return view('backend.pages.customer.list',compact('customers'));
    }

}
