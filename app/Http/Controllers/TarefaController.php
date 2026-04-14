<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;
use App\Models\Usuario;

class TarefaController extends Controller
{
    public function index()
    {
        // Alterado para $tarefas (plural) para bater com o Blade
        $tarefas = Tarefa::all();
        return view('tarefa', compact('tarefas'));
    }

    public function create()
    {
        // Este é o método que está faltando no seu erro!
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
}