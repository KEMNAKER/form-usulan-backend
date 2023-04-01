<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Form API Routes
|--------------------------------------------------------------------------
|
| API Routes to handle form related action.
|
*/

/**
 * Authenticated Endpoints
 */
Route::group([
    'prefix' => 'forms',
    'middleware' => ['auth:sanctum'],
], function () {
    Route::get('/', [FormController::class, 'getProposalForms']);

    Route::post('/', [FormController::class, 'storeProposalForm']);
});
