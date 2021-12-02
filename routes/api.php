<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'cliente'], function() {
    Route::post('', [\App\Http\Controllers\Api\ClienteController::class, 'store']);
    Route::put('{id}', [\App\Http\Controllers\Api\ClienteController::class, 'update']);
    Route::delete('{id}', [\App\Http\Controllers\Api\ClienteController::class, 'destroy']);
    Route::get('{id}', [\App\Http\Controllers\Api\ClienteController::class, 'show']);
});

Route::get('consulta/final-placa/{numero}', [\App\Http\Controllers\Api\ConsultaFinalPlacaController::class, '__invoke']);
