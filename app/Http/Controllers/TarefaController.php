<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;
use App\Models\Usuario;

class TarefaController extends Controller
{
    public function index()
    {
        $tarefas = Tarefa::all();
        return view('tarefa', compact('tarefas'));
    }

    public function create()
    {
        $usuarios = Usuario::all();
        return view('niveltarefas.cadtarefas', compact('usuarios'));
    }

    public function store(Request $request)
    {
        $tarefa = new Tarefa();
        $tarefa->usuario_id = $request->txId;
        $tarefa->titulo = $request->txTitulo;
        $tarefa->descricao = $request->txDescricao;
        $tarefa->save();

        return redirect('/tarefa')->with('sucesso', 'Tarefa criada!');
    }

    // =======================================================
    // MÉTODOS EXCLUSIVOS PARA A API (POSTMAN)
    // =======================================================

    // GET - Listar via API
    public function indexApi()
    {
        $tarefas = Tarefa::all();
        return response()->json($tarefas);
    }

    // POST - Criar via API
    public function storeApi(Request $request)
    {
        $tarefa = new Tarefa();
        $tarefa->usuario_id = $request->txId;
        $tarefa->titulo = $request->txTitulo;
        $tarefa->descricao = $request->txDescricao;
        $tarefa->save();

        return response()->json([
            'message' => 'Tarefa criada com sucesso via API!',
            'data' => $tarefa
        ], 201);
    }
}