<?php

use App\Http\Controllers\CandidataController;
use App\Http\Controllers\DetalhesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NovaVagaController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\VagasController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => '/vagas'], function () {
    Route::get('', [VagasController::class, 'index'])->name('vagas');
    Route::get('nova-vaga', [VagasController::class, 'create'])->name('nova')->middleware('auth');
    Route::post('nova-vaga', [VagasController::class, 'store'])->middleware('auth');
    Route::get('edita/{id}', [VagasController::class, 'show'])->middleware('auth');
    Route::post('edita/{id}', [VagasController::class, 'edit'])->middleware('auth');
    Route::delete('{id}/remover', [VagasController::class, 'destroy'])->middleware('auth');
    Route::get('detalhes/{id}', [CandidataController::class, 'index']);
    Route::get('detalhes/candidatar/{id}', [CandidataController::class, 'create']);
    Route::post('detalhes/candidatar/{id}', [CandidataController::class, 'store']);
    Route::post('search', [VagasController::class, 'search'])->name('search');
});

Route::group(['prefix' => '/login'], function () {
    Route::get('', [LoginController::class, 'index'])->name('login');
    Route::post('', [LoginController::class, 'login']);
    Route::get('logout', [LoginController::class, 'logout']);
});

