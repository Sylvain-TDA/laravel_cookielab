<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\BackOfficeController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\PageProduit;
use App\Http\Controllers\PageProduitController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/backoffice', [BackOfficeController::class, 'index'])->name('backoffice');    
    Route::get('/backoffice/{id}', [BackOfficeController::class, 'show'])->name('backoffice.product-show');
    Route::get('/backoffice/{id}/edit', [BackOfficeController::class, 'edit'])->name('backoffice.product-edit');
    Route::put('/backoffice/{id}/update', [BackOfficeController::class, 'update'])->name('backoffice.product-update');
    Route::delete('/backoffice/{id}/delete', [BackOfficeController::class, 'delete'])->name('backoffice.product-delete');
    Route::get('/backoffice/products/create', [BackOfficeController::class, 'showCreate'])->name('backoffice.product-create');
    Route::post('/backoffice/products/create', [BackOfficeController::class, 'store'])->name('backoffice.product.store');
});

Route::post('/products', [PageProduitController::class, 'store'])->name('basketForm'); //name is not good

// Route::get('/', function () {
//     return view('welcome'); 
// })->name('accueil');

Route::get('/products', [PageProduitController::class, 'index'])->name('catalogue');

Route::get('/products/{id}', [PageProduitController::class, 'show'])->name('products.show');

Route::get('/products/{id}/refreshed', [BasketController::class, 'beforeBasket',])->name('refreshed');

Route::get('/basket', [BasketController::class, 'show',])->name('basket');

Route::post('/basket-create', [BasketController::class, 'createOrder'])->name('basket-create');

Route::put('/empty-basket', [BasketController::class, 'emptyBasket'])->name('empty-basket');

Route::get('/', [HomePageController::class, 'show'])->name('accueil');

Route::get('/search', [SearchController::class, 'search'])->name('search');

require __DIR__ . '/auth.php';
