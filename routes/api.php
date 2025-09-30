<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ItemController;
use App\Http\Controllers\Api\NotificationController;
use App\Http\Controllers\Api\AdminAuthController;
use App\Http\Controllers\Api\MenuController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

// =========================
// Public Routes (no auth)
// =========================
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{id}', [CategoryController::class, 'show']);

Route::get('/items', [ItemController::class, 'index']);
Route::get('/items/{id}', [ItemController::class, 'show']);

Route::get('/notifications', [NotificationController::class, 'index']);
Route::get('/notifications/{id}', [NotificationController::class, 'show']);
Route::get('/menu-constants', [MenuController::class, 'getAll']);
Route::get('/menu-constants', [MenuController::class, 'getAll']);
// =========================
// Admin Authentication
// =========================
Route::post('/admin/login', [AdminAuthController::class, 'login']);
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->middleware('auth:admin');

// =========================
// Admin-only Routes
// =========================
Route::middleware('auth:admin')->group(function () {
    // Categories
    Route::post('/categories', [CategoryController::class, 'store']);
    Route::put('/categories/{id}', [CategoryController::class, 'update']);
    Route::delete('/categories/{id}', [CategoryController::class, 'destroy']);

    // Items
    Route::post('/items', [ItemController::class, 'store']);
    Route::put('/items/{id}', [ItemController::class, 'update']);
    Route::delete('/items/{id}', [ItemController::class, 'destroy']);

    // Notifications
    Route::post('/notifications', [NotificationController::class, 'store']);
    Route::put('/notifications/{id}', [NotificationController::class, 'update']);
    Route::delete('/notifications/{id}', [NotificationController::class, 'destroy']);

    //constants
    Route::post('/menu-constants', [MenuController::class, 'store']);
    Route::post('/menu-constants-bulk', [MenuController::class, 'updateMultiple']);
    Route::put('/menu-constants/{key}', [MenuController::class, 'update']);
    Route::delete('/menu-constants/{key}', [MenuController::class, 'destroy']);
});
