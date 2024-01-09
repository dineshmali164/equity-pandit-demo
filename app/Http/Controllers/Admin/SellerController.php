<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SellerController extends Controller
{

    public function __invoke()
    {
        $this->authorize('sellerList',auth()->user());
        return view('admin.seller.index');
    }


}
