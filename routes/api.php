<?php

use App\Http\Controllers\ExercicioCincoController;
use App\Http\Controllers\ExercicioDoisController;
use App\Http\Controllers\ExercicioNoveController;
use App\Http\Controllers\ExercicioOitoController;
use App\Http\Controllers\ExercicioQuatrooController;
use App\Http\Controllers\ExercicioSeisController;
use App\Http\Controllers\ExercicioSeteController;
use App\Http\Controllers\ExercicioTresController;
use App\Http\Controllers\ExercicioUmController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('exercicio/um', [ExercicioUmController::class, 'multiplicar']);

Route::post('exercicio/dois', [ExercicioDoisController::class, 'retornarMaior']);

Route::get('exercicio/sete', [ExercicioSeteController::class, 'exibirNumeros']);

Route::post('exercicio/quatro', [ExercicioQuatrooController::class, 'verificarNumero']);

Route::post('exercicio/tres', [ExercicioTresController::class, 'mediaAritmetica']);

Route::post('exercicio/cinco', [ExercicioCincoController::class, 'verificacao']);

Route::post('exercicio/seis', [ExercicioSeisController::class, 'idade']);

Route::post('exercicio/oito', [ExercicioOitoController::class, 'tabuada']);

Route::post('exercicio/nove', [ExercicioNoveController::class, 'divisao']);