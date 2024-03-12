<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ApiCategoriaController;
use App\Http\Controllers\ApiEventoController;
use App\Http\Controllers\ApiAsistenteController;
use App\Http\Controllers\ApiInscripcionController;
use App\Http\Controllers\ApiExperienciaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('v1')->group(function () {
    Route::get('/agencult/evento', [ApiEventoController::class, 'index']);
    Route::get('/agencult/evento/{id}', [ApiEventoController::class, 'show']);
    Route::post('/agencult/evento', [ApiEventoController::class, 'store']);
    Route::delete('/agencult/evento/{id}', [ApiEventoController::class, 'destroy']);

    Route::get('/agencult/categorias/{id}', [ApiCategoriaController::class, 'show']);

    Route::get('/agencult/asistente/{dni}', [ApiAsistenteController::class, 'show']);
    Route::get('/agencult/asistente/{dni}/inscripciones', [ApiInscripcionController::class, 'index']);
    Route::get('/agencult/asistente/{dni}/inscripcion/{idEvento}', [ApiInscripcionController::class, 'show']);

    Route::get('/agencult/experiencias', [ApiExperienciaController::class, 'index']);

});