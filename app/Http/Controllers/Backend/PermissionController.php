<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Permission;

class PermissionController extends Controller
{
    public function list(){
        $permissions=Permission::all();
        return view('backend.pages.permission.list',compact('permissions'));
    }

    public function view($id){
        $find=Permission::find($id);

        return view('backend.pages.permission.view',compact('find'));
    }

    public function edit($id){
        $edit=Permission::find($id);

        return view ('backend.pages.permission.edit',compact('edit'));
        
    }

    public function update(Request $request,$id){

        $update=Permission::find($id);
        $update->update([

            'name'=>$request->name,
            'status'=>$request->status


        ]);
    }
}
