<?php

use App\Http\Controllers\BackOfficeController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\PageProduit;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



//Route::get('/page-produit/{id}',[App\Http\Controllers\PageProduit::class, 'show'])->name('page-produit');

Route::post('/products', [ProductController::class, 'store'])->name('product.store');





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

Route::get('/backoffice', [BackOfficeController::class, 'show'])->name('backoffice');
Route::get('/backoffice/{id}/edit', [BackOfficeController::class, 'ShowProduct'])->name('backoffice.edit');
Route::get('/backoffice/create',[BackOfficeController::class,'showCreate'])->name('backoffice.create');
Route::put('/backoffice/{id}/update-name',[BackOfficeController::class, 'updateNameProduct'])->name('backoffice.name');
Route::put('/backoffice/{id}/update-price',[BackOfficeController::class, 'updatePriceProduct'])->name('backoffice.price');
Route::delete('/backoffice/{id}/delete',[BackOfficeController::class,'delete'])->name('backoffice.delete');