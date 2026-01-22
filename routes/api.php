<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WordsController;
use Illuminate\Support\Facades\Route;

Route::get('/ping', fn() => 'pong');

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/profile', [UserController::class, 'info']);
    Route::get('/user/words', [UserController::class, 'favoriteWords']);

    Route::post('/logout', [AuthController::class, 'logout']);

    Route::get('/words', [WordsController::class, 'index']);
    Route::get('/words/{id}', [WordsController::class, 'info']);
    Route::post('/words', [WordsController::class, 'create']); // admin
    Route::post('/words/{id}/favorite', [WordsController::class, 'favorite']);
    Route::delete('/words/{id}', [WordsController::class, 'delete']); // admin

    Route::middleware('admin')->group(function () {
        Route::post('/words', [WordsController::class, 'create']);
    });
});
