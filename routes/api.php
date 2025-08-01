<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\ProductController;



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/api/productsjson', [ProductController::class, 'index'])->name('products');

Route::get('/api/productjson{id}', [ProductController::class, 'show'])->name('product');
