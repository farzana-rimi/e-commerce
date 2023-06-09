<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Permission;
use Yajra\DataTables\Facades\DataTables;

class PermissionController extends Controller
{
    public function list(){
        $permissions=Permission::paginate(10);
        return view('backend.pages.permission.list',compact('permissions'));
    }

    public function getpermission(Request $request)
    {
        if ($request->ajax()) {
            $data = Permission::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function view($id){
        $find=Permission::find($id);

        return view('backend.pages.permission.view',compact('find'));
    }

    // public function edit($id){
    //     $edit=Permission::find($id);

    //     return view ('backend.pages.permission.edit',compact('edit'));
        
    // }

    // public function update(Request $request,$id){

    //     $update=Permission::find($id);
    //     $update->update([

    //         'name'=>$request->name,
    //         'status'=>$request->status


    //     ]);
    // }
}
