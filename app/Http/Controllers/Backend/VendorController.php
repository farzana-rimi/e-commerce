<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vendor;

class VendorController extends Controller
{
    public function list(){
        $vendors=Vendor::all();
        return view('backend.pages.vendor.list',compact('vendors'));
    }

    
    public function form(){
       
        return view('backend.pages.vendor.form');
    }


    public function store(Request $request){

        $fileName='';
        if($request->hasFile('vendor_image'))
        {
            $fileName=date('Ymdhis').'.'.$request->file('vendor_image')->getClientOriginalExtension();
            $request->file('vendor_image')->storeAs('/uploads',$fileName);
        }
       
        Vendor::create([
            'name'=>$request-> vendor_name,
            'contact'=>$request-> contact,
            'address'=>$request->address,
            'image'=>$fileName,
            'email'=>$request-> email,
            'bank_info'=>$request->bank_info,
            'status'=>$request->status,
            'city'=>$request->city,
            'password'=>bcrypt($request->password)

        ]);
        return redirect()->route('vendor.list');
    }

}
