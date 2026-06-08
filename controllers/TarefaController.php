<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;
use App\Models\Usuario;

class TarefaController extends Controller
{
    public function index()
    {
        $tarefas = Tarefa::with('status')->get();
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
        $tarefa->titulo     = $request->txTitulo;
        $tarefa->descricao  = $request->txDescricao;
        $tarefa->save();

        return redirect('/tarefa')->with('sucesso', 'Tarefa criada!');
    }

    // =======================================================
    // MÉTODOS EXCLUSIVOS PARA A API
    // =======================================================

    // GET /api/tarefas — retorna tarefas com o status vinculado
    public function indexApi()
    {
        // ✅ with('status') traz o status de cada tarefa junto
        $tarefas = Tarefa::with('status')->get();
        return response()->json($tarefas);
    }

    // POST /api/tarefas
    public function storeApi(Request $request)
    {
        $request->validate([
            'txId'     => 'required|exists:usuarios,id',
            'txTitulo' => 'required|string|max:255',
        ]);

        $tarefa = Tarefa::create([
            'usuario_id' => $request->txId,
            'titulo'     => $request->txTitulo,
            'descricao'  => $request->txDescricao,
        ]);

        return response()->json([
            'message' => 'Tarefa criada com sucesso via API!',
            'data'    => $tarefa,
        ], 201);
    }
}
