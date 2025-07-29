<?php

use App\Http\Controllers\BasketController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\BackOfficeController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;


// Page d'accueil
Route::get('/', [HomePageController::class, 'show'])->name('accueil');

// Routes des produits
Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('catalogue');
Route::get('/products/{id}', [App\Http\Controllers\ProductController::class, 'show'])->name('products.show');
Route::get('/products/in-stock', [ProductController::class, 'inStock'])->name('products.inStock');

// A modifier
Route::post('/products',[ProductController::class,'store'])->name('basketForm');//name is not good

// Routes administratives pour les produits
Route::get('/admin/products/', [ProductController::class, 'indexAll'])->name('products.indexAll');

// Page contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');  

// Panier
Route::get('/basket', [BasketController::class, 'show'])->name('basket');

// Recherche
Route::get('/search', [SearchController::class, 'search'])->name('search');

// Back Office
Route::get('/backoffice', [BackOfficeController::class, 'show'])->name('backoffice');