<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order(Product $product)
    {


        return view('order.create',compact('product'));
    }

    public function orderConfirm(Order $order)
    {
        $product = $order->product;
        return view('order.confirm',compact(['order','product']));
    }

    public function orderList()
    {
        $orders  = Order::paginate(10);
        return view('order.index',compact(['orders']));
    }
}
