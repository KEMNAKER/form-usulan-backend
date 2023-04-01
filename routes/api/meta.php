<?php

use App\Http\Controllers\MetaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Meta API Routes
|--------------------------------------------------------------------------
|
| API Routes to handle metadata related action.
|
*/

/**
 * Authenticated Endpoints
 */
Route::group([
    'prefix' => 'meta',
    'middleware' => ['auth:sanctum'],
], function () {
    Route::get('first-echelons', [MetaController::class, 'getFirstEchelons']);

    Route::get('second-echelons', [MetaController::class, 'getSecondEchelons']);

    Route::get('priority-levels', [MetaController::class, 'getPriorityLevels']);

    Route::get('proposal-types', [MetaController::class, 'getProposalTypes']);
});
