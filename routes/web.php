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
Route::post('/basket', [BasketController::class, 'show'])->name('basket');

// Recherche
Route::get('/search', [SearchController::class, 'search'])->name('search');

// BACK OFFICE
Route::get('/backoffice', [BackOfficeController::class, 'show'])->name('backoffice');

// Affichage dashboard et catalogue
Route::get('/backoffice', [BackOfficeController::class, 'home'])->name('backoffice');
Route::get('/backoffice/products', [BackOfficeController::class, 'index'])->name('storeBackOffice');

// Routes pour la création de nouveau produit
Route::get('/backoffice/products/create', [BackOfficeController::class, 'create'])->name('newProduct');
Route::post('/backoffice/products', [BackOfficeController::class, 'store'])->name('storeProduct');

// Affichage d'un produit spécifique
Route::get('/backoffice/products/{product}', [BackOfficeController::class, 'show'])->name('productDetailsBackOffice');

// Routes pour edit/update/delete un produit
Route::get('/backoffice/products/{product}/edit', [BackOfficeController::class, 'edit'])->name('editProduct');
Route::put('/backoffice/products/{product}', [BackOfficeController::class, 'update'])->name('updateProduct');
Route::delete('/backoffice/products/{product}', [BackOfficeController::class, 'delete'])->name('deleteProduct');