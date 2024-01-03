<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\UnidadesController;
use App\Http\Controllers\ColabController;
use App\Http\Controllers\CargoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[CadastroController::class, 'index']);

Route::get('/unidades',[UnidadesController::class, 'show']);
Route::post('/unidades/criar', [UnidadesController::class, 'store']);
Route::post('/colaboradores/criar', [ColabController::class, 'store']);
Route::get('/colaborador/{id}',[ColabController::class, 'edit']);
Route::put('/colaboradores/update/{id}', [ColabController::class, 'update']);
Route::get('/colaboradores',[ColabController::class, 'show']);

Route::get('/cargocolaborador/{id}',[CargoController::class, 'avaliar']);
Route::post('/cargocolaborador/update/{id}',[CargoController::class, 'criar']);
