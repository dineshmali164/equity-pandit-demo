<?php

use App\Http\Controllers\Admin\SellerController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Seller\OrderController;
use Illuminate\Support\Facades\Route;

Route::middleware(['role:' . ROLE_SELLER, 'auth:sanctum'])->prefix(ROLE_SELLER)->name('seller.')->group(function () {
    Route::redirect('/', 'dashboard');
    Route::resource('products', controller: ProductController::class);
    Route::get('seller/order-list', [OrderController::class, 'index'])->name('order-list');

});
