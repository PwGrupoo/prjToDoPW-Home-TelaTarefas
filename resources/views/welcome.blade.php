@extends('layouts.app')

@section('content')
<div class="text-center py-5">
    <h1 class="display-3 fw-bold text-primary mb-3">Gerenciador PrjToDo</h1>
    <p class="lead text-muted mb-5 mx-auto" style="max-width: 600px;">
        Sua ferramenta simples e eficiente para organizar as tarefas do dia a dia com foco e produtividade.
    </p>
    <div class="d-flex justify-content-center gap-3">
        <a href="/tarefa" class="btn btn-primary btn-lg px-5 shadow">Ver Minhas Tarefas</a>
        <a href="/contato" class="btn btn-outline-primary btn-lg px-5">Contato</a>
    </div>
</div>
@endsection