@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-7">
        <div class="mb-3">
            <a href="javascript:history.back()" class="btn btn-outline-primary btn-sm px-3 fw-semibold">&larr; Voltar</a>
        </div>
        <div class="card p-4">
            <div class="text-center mb-4">
                <h2 class="text-primary fw-bold">Contato PrjToDo</h2>
                <p class="text-muted">Dúvidas ou sugestões? Envie uma mensagem.</p>
            </div>
            <form>
                <div class="mb-3">
                    <label class="form-label fw-bold">Nome</label>
                    <input type="text" class="form-control" placeholder="Seu nome">
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">E-mail</label>
                    <input type="email" class="form-control" placeholder="email@exemplo.com">
                </div>
                <div class="mb-4">
                    <label class="form-label fw-bold">Mensagem</label>
                    <textarea class="form-control" rows="4" placeholder="Como podemos ajudar?"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-lg w-100 fw-bold shadow-sm">Enviar Mensagem</button>
            </form>
        </div>
    </div>
</div>
@endsection