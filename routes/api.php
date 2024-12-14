<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;

Route::prefix('v1')->group(function () {
    Route::prefix('product')->group(function () {
        Route::get('/list', [ProductController::class, 'list']);
        Route::post('/create', [ProductController::class, 'create']);
        Route::post('/update/{id}', [ProductController::class, 'update']);
    });
});
