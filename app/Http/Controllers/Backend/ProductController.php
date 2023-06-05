<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Vendor;

class ProductController extends Controller
{
    public function list()
    {
        $products=Product::with('category','brand','vendor')->paginate('2');
        return view('backend.pages.product.list',compact('products'));
    }


    public function form()
    {
        $categories=Category::all();
        $brands=Brand::all();
        $vendors=Vendor::all();
        return view('backend.pages.product.form',compact('categories','brands','vendors'));
    }


    public function store(Request $request)
    {

        $fileName='';
        if($request->hasFile('product_image'))
        {
            $fileName=date('Ymdhis').'.'.$request->file('product_image')->getClientOriginalExtension();
            $request->file('product_image')->storeAs('/uploads',$fileName);
        }
        Product::create([
            'name'=>$request-> product_name,
            'price'=>$request-> product_price,
            'image'=>$fileName,
            'brand_id'=>$request-> brand_id,
            'category_id'=>$request-> category_id,
            'vendor_id'=>$request->vendor_id,
            'status'=>$request->status,
            'description'=>$request->description

        ]);
        return redirect()->route('product.list');
    }
    

    public function view($id)
    {
        $find=Product::find($id);
        return view('backend.pages.product.view',compact('find'));
    }

    public function delete($id)
    {
        Product::find($id)->delete();
        return redirect()->back();
    }
}
