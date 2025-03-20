<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;

Route::post('register', [APIController::class, 'register']);
Route::post('login', [APIController::class, 'login']);
Route::post('logout', [APIController::class, 'logout'])->middleware('jwt.auth');

Route::prefix('pays')->group(function () {
    Route::get('/', [APIController::class, 'pays_index']); // List all pays
    Route::post('/', [APIController::class, 'pays_store']); // Create new pays
    Route::get('{id}', [APIController::class, 'pays_show']); // Show pays by ID
    Route::put('{id}', [APIController::class, 'pays_update']); // Update pays
    Route::delete('{id}', [APIController::class, 'pays_destroy']); // Delete pays
});

Route::prefix('villes')->group(function () {
    Route::get('/', [APIController::class, 'villes_index']); // List all villes
    Route::post('/', [APIController::class, 'villes_store']); // Create new ville
    Route::get('{id}', [APIController::class, 'villes_show']); // Show ville by ID
    Route::put('{id}', [APIController::class, 'villes_update']); // Update ville
    Route::delete('{id}', [APIController::class, 'villes_destroy']); // Delete ville
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
