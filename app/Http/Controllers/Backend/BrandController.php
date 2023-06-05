<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;

class BrandController extends Controller
{
    public function list(){
        $brands=Brand::with('category')->paginate(2);
        return view('backend.pages.brand.list',compact('brands'));
 
   }

   public function form(){
    $category=Category::all();
    return view('backend.pages.brand.form',compact('category'));
}


public function store(Request $request)
{

    $fileName='';
    if($request->hasFile('brand_image'))
    {
        $fileName=date('Ymdhis').'.'.$request->file('brand_image')->getClientOriginalExtension();
        $request->file('brand_image')->storeAs('/uploads',$fileName);
    }
    
         Brand::create([
        'name'=>$request->brand_name,
        'image'=> $fileName,
        'status'=>$request->status,
        'description'=>$request->description,
        'category_id'=>$request->category_id,

         ]);
    toastr()->success('Brand Added');
    
    return redirect()->route('brand.list');
}

        public function view($id){
            $find=Brand::find($id);
            return view('backend.pages.brand.view',compact('find'));
        }


        public function delete($id){
            Brand::find($id)->delete();
            return redirect()->back();
        }


}
