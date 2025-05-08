<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserAuthController;
use App\Http\Controllers\API\PostController;


Route::post('/signup', [UserAuthController::class, 'signup']);
Route::post('/login', [UserAuthController::class, 'login']);


Route::apiResource('posts', PostController::class);

// Protected Routes (auth:sanctum)
// Route::middleware('auth:sanctum')->group(function () {
//     Route::apiResource('posts', PostController::class);
//     Route::post('/logout', [AuthController::class, 'logout']);
// });
