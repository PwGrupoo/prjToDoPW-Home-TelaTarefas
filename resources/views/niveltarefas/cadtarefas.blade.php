@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="mb-3">
            <a href="/tarefa" class="btn btn-outline-primary btn-sm px-3 fw-semibold">&larr; Voltar para a lista</a>
        </div>
        <div class="card p-4 shadow-sm border-0">
            <h2 class="text-primary fw-bold text-center mb-4">Nova Tarefa</h2>
            <form action="/criar-cadtarefas" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label fw-bold small">Responsável</label>
                    <select name="txId" class="form-select" required>
                        <option value="">Selecione o usuário</option>
                        @foreach($usuarios as $usuario)
                            <option value="{{ $usuario->id }}">{{ $usuario->nome }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold small">Título</label>
                    <input type="text" name="txTitulo" class="form-control" placeholder="Título da tarefa" required>
                </div>
                <div class="mb-4">
                    <label class="form-label fw-bold small">Descrição</label>
                    <input type="text" name="txDescricao" class="form-control" placeholder="O que precisa ser feito?" required>
                </div>
                <button type="submit" class="btn btn-primary btn-lg w-100 fw-bold">Salvar Tarefa</button>
            </form>
        </div>
    </div>
</div>
@endsection