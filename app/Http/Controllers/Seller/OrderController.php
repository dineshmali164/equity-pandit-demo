<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Order::class);

        $orders = Order::paginate(10);

        return view('seller.order.index', compact(['orders']));
    }
}
