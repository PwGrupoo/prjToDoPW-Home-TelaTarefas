<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;
use App\Models\Tarefa;

class StatusController extends Controller
{
    // ✅ GET /api/status — lista todos os status com a tarefa vinculada
    public function indexApi()
    {
        $statuses = Status::with('tarefa')->get();
        return response()->json($statuses);
    }

    // ✅ POST /api/status — cadastra um status vinculado a uma tarefa
    public function store(Request $request)
    {
        $request->validate([
            'tarefa_id' => 'required|exists:tarefas,id',
            'nome'      => 'required|string|max:255',
        ]);

        // Garante que a tarefa não tenha status duplicado
        $jaExiste = Status::where('tarefa_id', $request->tarefa_id)->first();
        if ($jaExiste) {
            // Atualiza o status existente
            $jaExiste->update(['nome' => $request->nome]);
            return response()->json([
                'message' => 'Status atualizado com sucesso!',
                'data'    => $jaExiste->load('tarefa'),
            ], 200);
        }

        $status = Status::create([
            'tarefa_id' => $request->tarefa_id,
            'nome'      => $request->nome,
        ]);

        return response()->json([
            'message' => 'Status cadastrado com sucesso!',
            'data'    => $status->load('tarefa'),
        ], 201);
    }
}
