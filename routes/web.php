<?php

use App\Http\Controllers\BasketController;
use App\Http\Controllers\PageProduit;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



//Route::get('/page-produit/{id}',[App\Http\Controllers\PageProduit::class, 'show'])->name('page-produit');

Route::post('/products', [ProductController::class, 'store'])->name('product.store');

Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');

Route::delete('/products/{id}/delete',[ProductController::class,'delete'])->name('product.delete');

Route::get('/', function () {
    return view('welcome');
})->name('accueil');

Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('catalogue');

Route::get('/products/{id}', [App\Http\Controllers\ProductController::class, 'show'])->name('products.show');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/basket', [BasketController::class, 'show'])->name('basket');

Route::get('/', [App\Http\Controllers\HomePageController::class, 'show'])->name('accueil');

Route::get('/search', [App\Http\Controllers\SearchController::class, 'search'])->name('search');

Route::get('/backoffice', [App\Http\Controllers\BackOfficeController::class, 'show'])->name('backoffice');
