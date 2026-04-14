@extends('layouts.app')

@section('content')
<div class="card p-4 shadow-sm border-0">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-primary fw-bold m-0">Minhas Atividades</h2>
        <a href="/cadtarefas" class="btn btn-success fw-bold px-4 shadow-sm">+ Nova Tarefa</a>
    </div>

    <table class="table table-hover">
        <thead class="table-light">
            <tr>
                <th>Descrição</th>
                <th class="text-center">Data e Hora</th>
                <th class="text-center">Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse($tarefas as $t)
            <tr>
                <td>{{ $t->titulo }} - <small class="text-muted">{{ $t->descricao }}</small></td>
                <td class="text-center">{{ $t->created_at?->format('d/m/Y H:i') }}</td>
                <td class="text-center"><span class="badge bg-warning text-dark">Pendente</span></td>
            </tr>
            @empty
            <tr>
                <td colspan="3" class="text-center py-5 text-muted">Nenhuma tarefa encontrada.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection