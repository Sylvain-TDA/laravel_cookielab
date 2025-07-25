<?php

use App\Http\Controllers\BasketController;
use App\Http\Controllers\PageProduit;
use Illuminate\Support\Facades\Route;



//Route::get('/page-produit/{id}',[App\Http\Controllers\PageProduit::class, 'show'])->name('page-produit');

Route::get('/', function () {
    return view('welcome'); 
})->name('accueil');

Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('catalogue');

Route::get('/products/{id}', [App\Http\Controllers\ProductController::class, 'show'])->name('products.show');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');  

Route::get('/basket', [BasketController::class, 'show'])->name('basket');
