<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Orderdetail;

class OrderController extends Controller
{
    public function list(){
        $order=Order::with('user')->get();

        return view('backend.pages.order.list',compact('order'));
    }

    public function view($id){

        $order_items=Orderdetail::with('product')->where('order_id',$id)->get();

        return view('backend.pages.order.details');
    }

   

 

    }

    


