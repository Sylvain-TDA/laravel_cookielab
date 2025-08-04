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



Route::apiResource('products', ArticleController::class);

