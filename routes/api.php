<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\ProductController;



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/productsjson', [ProductController::class, 'index'])->name('products');

Route::get('/productjson{id}', [ProductController::class, 'show'])->name('product');

Route::post('/products/create', [ProductController::class, 'store'])->name('product-create');
