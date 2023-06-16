<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Assign;
use App\Models\Permission;
use Illuminate\Support\Facades\DB;

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

    public function assign($roleid){

        $role=Role::with('assign')->find($roleid);
        $permissions=Permission::all();
        
        return view('backend.pages.role.assign',compact('role','permissions'));

    }

    public function assignstore(Request $request,$roleid)
    {

        
        try{

            DB::beginTransaction();
            $getPermission=Assign::where('role_id',$roleid)->get();

            if($getPermission->count()>0)
            {
                $getPermission->each()->delete();
            }

            if(!is_null($request->selected_permissions)) 
            {
                foreach($request->selected_permissions as $permission)
                {

                Assign::create([
                'role_id'=>$roleid,
                'permission_id'=>$permission

                    ]);
                }
            }
            DB::commit();
            return redirect()->route('role.list');


        }catch(\Throwable $exception)
        { 
            DB::rollBack();
            toastr()->error('Something went worng.');
            return redirect()->back();

        }
    }
}

