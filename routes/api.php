<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\TarefaController;
use App\Http\Controllers\StatusController;

// -------------------------------------------------------
// ROTAS DE USUÁRIOS
// -------------------------------------------------------
Route::get('/usuarios',  [UsuarioController::class, 'indexApi']);  // GET  - listar
Route::post('/usuarios', [UsuarioController::class, 'storeApi']);  // POST - cadastrar

// -------------------------------------------------------
// ROTAS DE TAREFAS
// -------------------------------------------------------
Route::get('/tarefas',  [TarefaController::class, 'indexApi']);    // GET  - listar (inclui status)
Route::post('/tarefas', [TarefaController::class, 'storeApi']);    // POST - cadastrar

// -------------------------------------------------------
// ROTAS DE STATUS
// -------------------------------------------------------
Route::get('/status',  [StatusController::class, 'indexApi']);     // GET  - listar (inclui tarefa)
Route::post('/status', [StatusController::class, 'store']);        // POST - cadastrar/atualizar
