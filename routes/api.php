<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserAuthController;
use App\Http\Controllers\API\PostController;


Route::post('/signup', [UserAuthController::class, 'signup']);
Route::post('/login', [UserAuthController::class, 'login']);

// Protected Routes (auth:sanctum)
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/debug-user', function(Request $request) { //debugging purpose
        return [
            'user' => $request->user(),
            'roles' => $request->user()->roles->pluck('name'),
            'permissions' => $request->user()->getPermissionsViaRoles()
        ];
    });
    Route::apiResource('posts', PostController::class);
    Route::post('/logout', [UserAuthController::class, 'logout']);
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});



