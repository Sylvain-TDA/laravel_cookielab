<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\AuthController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/productsjson', [ProductController::class, 'index'])->name('products');

Route::get('/productjson{id}', [ProductController::class, 'show'])->name('product');

Route::post('/products/create', [ProductController::class, 'store'])->name('product-create');

Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('product-edit');

Route::delete('/product/{id}/delete', [ProductController::class, 'delete'])->name('product-delete');

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);
});

Route::middleware(['auth.jwt'])->group(function () {
    Route::get('/api/auth/me', [AuthController::class, 'me']);
});