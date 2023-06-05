<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function list()
    {
        $categories=Category::paginate('2');

        return view('backend.pages.category.list', compact('categories'));
    }


    public function form()
    {
        $categories=Category::all();
        return view('backend.pages.category.form',compact('categories'));
    }


    public function store(Request $request)
    {

        $fileName='';
        if($request->hasFile('category_image'))
        {
            $fileName=date('Ymdhis').'.'.$request->file('category_image')->getClientOriginalExtension();
            $request->file('category_image')->storeAs('/uploads',$fileName);
        }

     
        Category::create([
            'name'=>$request->category_name,
            'status'=>$request->status,
            'image'=>$fileName,
            'description'=>$request->description,
            'parent_id'=>$request->parent_id

        ]);
        toastr()->success('Category Added');
        
        return redirect()->route('category.list');
    }

    public function view($id)
    {
        $data=Category::find($id);
        return view('backend.pages.category.view', compact('data'));

    }
    public function delete($id)
    {
        Category::find($id)->delete();
        return redirect()->back();
    }

    public function edit($id){
  
        $categories=Category::find($id);
        $parent=Category::all();
        return view('backend.pages.category.edit',compact('categories','parent'));
    }

    public function update(Request $request,$id){
        
        $fileName='';
        if($request->hasFile('category_image'))
        {
            $fileName=date('Ymdhis').'.'.$request->file('category_image')->getClientOriginalExtension();
            $request->file('category_image')->storeAs('/uploads',$fileName);
        
        $categories=Category::find($id); 
        $categories->update([

            'name'=>$request->category_name,
            'status'=>$request->status,
            'image'=>$fileName,
            'description'=>$request->description,
            'parent_id'=>$request->parent_id

        ]);
    }
    toastr()->success('Update successfully');
    return redirect()->route('category.list');

    }

    

}
