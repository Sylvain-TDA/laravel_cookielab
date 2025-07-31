<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\BackOfficeController;
use App\Http\Controllers\HomePageController;
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

    Route::get('/backoffice/products', [BackOfficeController::class, 'index'])->name('backoffice.product');

Route::get('/backoffice/product/new', action: [BackOfficeController::class, 'new'])->name('backoffice.new-product');

Route::get('/backoffice/product/{id}', [BackOfficeController::class, 'show'])->name('backoffice.show-product');

Route::get('/backoffice/product/{id}/edit', [BackOfficeController::class, 'edit'])->name('backoffice.edit-product');

Route::put('/backoffice/product/{id}/edit', [BackOfficeController::class, 'update'])->name('backoffice.update-product');

Route::delete('/backoffice/product/{id}/delete', [BackOfficeController::class, 'delete'])->name('backoffice.delete-product');

Route::post('/backoffice/product/new', action: [BackOfficeController::class, 'post'])->name('backoffice.post-product');
});

Route::post('/products',[ProductController::class,'store'])->name('basketForm');//name is not good

Route::get('/products', [ProductController::class, 'index'])->name('catalogue');

Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

Route::get('/basket', [BasketController::class, 'show'])->name('basket');

Route::get('/', [HomePageController::class, 'show'])->name('accueil');

Route::get('/search', [SearchController::class, 'search'])->name('search');





require __DIR__.'/auth.php';
