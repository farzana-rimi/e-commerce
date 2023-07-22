<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;

class UserController extends Controller
{
    public function adminlist(){

        if (Cache::has('users')){
           $admins=Cache::get('users');
           $msg="data from cache";
        }else{
        $admins=User::where('type','=','admin')->get();
       Cache::put('users',$admins);
       $msg='data from database';
        }
        
        return view('backend.pages.admin.list',compact('admins','msg'));
    }
    public function adminform(){
        
        return view ('backend.pages.admin.form');
    }

    public function adminstore(Request $request){

        Log::debug('Starting user store');

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

            Log::debug('Validation failed.'.json_encode($validate->getMessageBag(),true));

            toastr()->error('Validation failed.');
            return redirect()->back();
        }


        Log::debug('Validation pass.');
        
       $user=User::create([
            'first_name'=>$request-> first_name,
            'last_name'=>$request-> last_name,
            'contact'=>$request-> contact,
            'address'=>$request->address,
            'email'=>$request->email,
            'status'=>$request->status,
            'type'=>'admin',
            'password'=>bcrypt($request->password)
        ]);
            
        Log::debug('User store success. Name is:'.$user->first_name);    
            


        toastr()->success('Admin created successfully.');

        return redirect()->route('admin.list');
        
    }

    public function customerlist(){

        $customers=User::where('type','=','customer')->get();

        return view('backend.pages.customer.list',compact('customers'));
    }

}
