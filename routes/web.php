<?php

use App\Http\Controllers\AddToCart;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bandeaupromotions;


Route::get('/', function () {
    return view('welcome'); 
})->name('accueil');

//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');

Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('catalogue');

Route::get('/products/{id}', [App\Http\Controllers\ProductController::class, 'show'])->name('products.show');