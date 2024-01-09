<?php

use App\Http\Controllers\Admin\SellerController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware(['role:'.ROLE_ADMIN, 'auth:sanctum'])->prefix(ROLE_ADMIN)->name('admin.')->group(function () {
    Route::redirect('/', 'dashboard');
    Route::get('sellers', [SellerController::class, '__invoke'])->name('sellers.index');
    Route::get('users', [UserController::class, '__invoke'])->name('users.index');
});
