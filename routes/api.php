<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaquinaController;
use App\Http\Controllers\OperacaoController;
use App\Http\Controllers\PessoaController;

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


// Maquina
Route::get('/maquina', [MaquinaController::class, 'index']);

Route::get('/maquina/{iCodigo}', [MaquinaController::class, 'show']);

Route::put('/maquina', [MaquinaController::class, 'store']);

Route::delete('/maquina/{iCodigo}', [MaquinaController::class, 'destroy']);

Route::post('/maquina/{iCodigo}', [MaquinaController::class, 'update']);

// Operacao
Route::get('/operacao', [OperacaoController::class, 'index']);

Route::get('/operacao/{iCodigo}', [OperacaoController::class, 'show']);

Route::put('/operacao', [OperacaoController::class, 'store']);

Route::delete('/operacao/{iCodigo}', [OperacaoController::class, 'destroy']);

Route::post('/operacao/{iCodigo}', [OperacaoController::class, 'update']);

// Pessoa
Route::get('/pessoa', [PessoaController::class, 'index']);

Route::get('/pessoa/{sCPF}', [PessoaController::class, 'show']);

Route::put('/pessoa', [PessoaController::class, 'store']);

Route::delete('/pessoa/{sCPF}', [PessoaController::class, 'destroy']);

Route::post('/pessoa/{sCPF}', [PessoaController::class, 'update']);