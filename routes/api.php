<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaquinaController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('maquina', 'MaquinaController');

Route::get('/maquina', [App\Http\Controllers\MaquinaController::class, 'index']);

Route::get('/maquina/{iCodigo}', [MaquinaController::class, 'show']);

Route::put('/maquina', [MaquinaController::class, 'store']);