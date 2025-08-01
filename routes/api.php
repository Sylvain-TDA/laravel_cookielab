<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ArticleController;

// Route de test simple
Route::get('/test', function () {
    return response()->json([
        'message' => 'API fonctionne !',
        'status' => 'success'
    ]);
});

// Groupe pour la version 1 de l'API
Route::prefix('v1')->group(function () {
    // Routes automatiques pour les produits (REST)
    Route::apiResource('products', ArticleController::class);
});
