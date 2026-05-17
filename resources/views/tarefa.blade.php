@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 style="font-weight: 800; font-size: 1.7rem; letter-spacing: -0.04em; color: #0f172a; margin: 0;">
            Minhas Atividades
        </h2>
        <p style="color: #64748b; font-size: 0.88rem; margin: 4px 0 0;">
            Gerencie e acompanhe todas as suas tarefas
        </p>
    </div>
    <a href="/cadtarefas" class="btn btn-success fw-bold px-4">
        + Nova Tarefa
    </a>
</div>

<div class="card p-0" style="overflow: hidden;">
    <table class="table table-hover mb-0">
        <thead>
            <tr>
                <th>Descrição</th>
                <th class="text-center" style="width: 160px;">Data e Hora</th>
                <th class="text-center" style="width: 120px;">Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse($tarefas as $t)
            <tr>
                <td>
                    <span style="font-weight: 600; color: #0f172a;">{{ $t->titulo }}</span>
                    <span style="color: #94a3b8; margin: 0 4px;">—</span>
                    <small style="color: #64748b;">{{ $t->descricao }}</small>
                </td>
                <td class="text-center" style="color: #64748b; font-size: 0.85rem;">
                    {{ $t->created_at?->format('d/m/Y H:i') }}
                </td>
                <td class="text-center">
                    <span class="badge bg-warning">Pendente</span>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="3" class="text-center py-5" style="color: #94a3b8;">
                    <div style="font-size: 2rem; margin-bottom: 10px;">📋</div>
                    <div style="font-weight: 600; margin-bottom: 4px;">Nenhuma tarefa encontrada</div>
                    <div style="font-size: 0.85rem;">Clique em "+ Nova Tarefa" para começar</div>
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection