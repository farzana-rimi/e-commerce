<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function sendproduct(){

        $sendproducts=Product::all();

        return response()->json(['data'=>$sendproducts]);
    }
}
