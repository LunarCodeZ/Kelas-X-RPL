<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GoalController;
use App\Http\Controllers\ProjectController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/public-portfolio', function () {
    // Get the first user's data to display publicly
    $user = \App\Models\User::with(['profile', 'goals', 'projects'])->first();
    return response()->json($user);
});

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user', [AuthController::class, 'user']);
    
    // Additional features CRUD routes
    // For profile, typically index/store is used or we can define standard resource methods.
    Route::apiResource('/profile', ProfileController::class);
    Route::apiResource('/goals', GoalController::class);
    Route::apiResource('/projects', ProjectController::class);
});
