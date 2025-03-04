<?php

use App\http\Controllers\exerciciosController;
use Illuminate\Support\Facades\Route;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ex1', [exerciciosController::class, 'h_ex1']);

Route::post('/ex1resp', [exerciciosController::class, 'somar']);

Route::get('/ex2', [exerciciosController::class, 'h_ex2']);

Route::post('/ex2resp', [exerciciosController::class, 'ordenarCres']);

Route::get('/ex3', [exerciciosController::class, 'h_ex3']);

Route::post('/ex3resp', [exerciciosController::class, 'aplicarDesc']);

Route::get('/ex4', [exerciciosController::class, 'h_ex4']);

Route::post('/ex4resp', [exerciciosController::class, 'primos']);

Route::get('/ex5', [exerciciosController::class, 'h_ex5']);

Route::post('/ex5resp', [exerciciosController::class, 'mesAno']);

Route::get('/ex6', [exerciciosController::class, 'h_ex6']);

Route::post('/ex6resp', [exerciciosController::class, 'incrementarFor']);

Route::get('/ex7', [exerciciosController::class, 'h_ex7']);

Route::post('/ex7resp', [exerciciosController::class, 'incrementarWhile']);

Route::get('/ex8', [exerciciosController::class, 'h_ex8']);

Route::post('/ex8resp', [exerciciosController::class, 'contagemRegressiva']);

Route::get('/ex9', [exerciciosController::class, 'h_ex9']);

Route::post('/ex9resp', [exerciciosController::class, 'calcularFatorial']);

Route::get('/ex10', [exerciciosController::class, 'h_ex10']);

Route::post('/ex10resp', [exerciciosController::class, 'calcularTabuada']);
