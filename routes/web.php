<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Seller\OrderController as SellerOrderControllerAlias;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

include 'admin.php';
include 'seller.php';

Route::get('/', function () {
    return view('welcome');
});

Route::get('product', \App\Http\Controllers\User\ProductController::class)->name('product.index');


Route::get('register', action: [RegisterController::class, 'show'])
    ->middleware(['guest:' . config('fortify.guard')])
    ->name('register');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::middleware([
        'role:' . ROLE_USER,
    ])->group(function () {
        Route::get('buy-now/{product}', [SellerOrderControllerAlias::class, 'order'])->name('buy-now');
        Route::get('order-confirm/{order}', [SellerOrderControllerAlias::class, 'orderConfirm'])->name('order-confirm');
        Route::get('order-list', [SellerOrderControllerAlias::class, 'orderList'])->name('order-list');
    });
});
