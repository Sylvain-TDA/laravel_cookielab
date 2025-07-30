<?php

use App\Http\Controllers\BasketController;
use App\Http\Controllers\PageProduit;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



//Route::get('/page-produit/{id}',[App\Http\Controllers\PageProduit::class, 'show'])->name('page-produit');

Route::post('/products',[ProductController::class,'store'])->name('basketForm');//name is not good

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


Route::get('/backoffice/products', [App\Http\Controllers\BackOfficeController::class, 'index'])->name('backoffice.product');

Route::get('/backoffice/product/new', action: [App\Http\Controllers\BackOfficeController::class, 'new'])->name('backoffice.new-product');

Route::get('/backoffice/product/{id}', [App\Http\Controllers\BackOfficeController::class, 'show'])->name('backoffice.show-product');

Route::get('/backoffice/product/{id}/edit', [App\Http\Controllers\BackOfficeController::class, 'edit'])->name('backoffice.edit-product');

Route::put('/backoffice/product/{id}/edit', [App\Http\Controllers\BackOfficeController::class, 'update'])->name('backoffice.update-product');

Route::delete('/backoffice/product/{id}/delete', [App\Http\Controllers\BackOfficeController::class, 'delete'])->name('backoffice.delete-product');

Route::post('/backoffice/product/new', action: [App\Http\Controllers\BackOfficeController::class, 'post'])->name('backoffice.post-product');

