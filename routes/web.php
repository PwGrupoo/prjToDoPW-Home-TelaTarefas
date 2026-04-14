<?php

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
Route::get('/tarefa','App\Http\Controllers\TarefaController@index');

Route::get('/', function () {
    return view('welcome');
});
;
use App\Http\Controllers\TarefaController;

Route::get('/tarefa', [TarefaController::class, 'index']);



Route::get('/usuario','App\Http\Controllers\UsuarioController@index');

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\UsuarioController;

Route::get('/usuario', [UsuarioController::class, 'index']);



Route::get('/contato', function () {
    return view('nivelusuario.contato');
});

Route::get('/enviar-contato','App\Http\Controllers\UsuarioController@create');

Route::post('/criar-contato','App\Http\Controllers\UsuarioController@store');


Route::get('/cadtarefas','App\Http\Controllers\TarefaController@create');

Route::get('/enviar-cadtarefas','App\Http\Controllers\TarefaController@create');

Route::post('/criar-cadtarefas','App\Http\Controllers\TarefaController@store');

