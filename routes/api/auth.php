<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Authentication API Routes
|--------------------------------------------------------------------------
|
| API Routes to handle authentication related action.
|
*/

/**
 * Authenticated Endpoints
 */
Route::group([
    'prefix' => 'auth',
    'middleware' => ['auth:sanctum'],
], function () {
    Route::delete('logout', [AuthController::class, 'logout']);
});

/**
 * Unathenticated Endpoints
 */
Route::group([
    'prefix' => 'auth',
], function () {
    Route::post('login', [AuthController::class, 'login']);

    Route::post('register', [AuthController::class, 'register']);
});
