<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function list(){
        $roles=Role::all();
        return view('backend.pages.role.list',compact('roles'));
    }

    public function form(){
        return view('backend.pages.role.form');
 
    }

    public function store(Request $request){
      
        {
    
        
           Role::create([
                'name'=>$request-> role_name,
                'status'=>$request-> status
           
    
            ]);
            return redirect()->route('role.list');
        }
        
    }

    public function view($id){
        $role=Role::find($id);
        return view('backend.pages.role.view',compact('role'));
    }

    public function edit($id){
        $role=Role::find($id);
        return view('backend.pages.role.edit',compact('role'));
    }

    public function update(Request $request,$id){
        $roles=Role::find($id);
        $roles->update([

            'name'=>$request->role_name,
            'status'=>$request->status
        ]);

        toastr()->success('update successfully');
        return redirect()->route('role.list');
    }

    public function delete($id){
        Role::find($id)->delete();
        return redirect()->back();
    }
}

