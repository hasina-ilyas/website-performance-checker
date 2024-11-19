<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PerformanceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::controller(AuthController::class)
    ->group(function () {
        Route::get('auth/{provider}/login', 'login');
        Route::get('auth/{provider}/redirect', 'redirect');
    });

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
//    Route::post('/check-performance', PerformanceController::class);
});

Route::post('/check-performance', PerformanceController::class);

