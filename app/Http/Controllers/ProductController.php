<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny',Product::class);
        return view('products.index');
    }

    public function create()
    {
        $this->authorize('create',Product::class);
        return view('products.create');
    }

    public function show(Product $product)
    {
        $this->authorize('view',$product);
        return view('products.show',compact('product'));
    }

    public function edit(Product $product)
    {
        $this->authorize('update',$product);

        return view('products.edit',[
            'product' => $product
        ]);
    }
}
