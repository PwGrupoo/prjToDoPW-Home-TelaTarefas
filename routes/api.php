<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefaController;
use App\Http\Controllers\UsuarioController;

// Rotas de Tarefas na API
Route::get('/tarefas', [TarefaController::class, 'indexApi']);
Route::post('/tarefas', [TarefaController::class, 'storeApi']);

// Rotas de Usuários na API
Route::get('/usuarios', [UsuarioController::class, 'indexApi']);
Route::post('/usuarios', [UsuarioController::class, 'storeApi']);