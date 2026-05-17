@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">

        <div class="mb-4">
            <a href="javascript:history.back()" class="btn btn-outline-primary btn-sm px-3">
                &larr; Voltar
            </a>
        </div>

        <div class="card p-0" style="overflow: hidden;">
            <div class="p-5">
                <div class="text-center mb-4">
                    <div style="
                        width: 52px; height: 52px;
                        background: linear-gradient(135deg, #2563eb, #0ea5e9);
                        border-radius: 14px;
                        display: inline-flex;
                        align-items: center;
                        justify-content: center;
                        font-size: 1.4rem;
                        margin-bottom: 16px;
                    ">✉️</div>
                    <h2 style="font-weight: 800; letter-spacing: -0.04em; color: #0f172a; font-size: 1.5rem; margin-bottom: 6px;">
                        Contato PrjToDo
                    </h2>
                    <p style="color: #64748b; font-size: 0.9rem; margin: 0;">
                        Dúvidas ou sugestões? Envie uma mensagem.
                    </p>
                </div>

                <form>
                    <div class="mb-3">
                        <label class="form-label">Nome</label>
                        <input type="text" class="form-control" placeholder="Seu nome">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">E-mail</label>
                        <input type="email" class="form-control" placeholder="email@exemplo.com">
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Mensagem</label>
                        <textarea class="form-control" rows="4" placeholder="Como podemos ajudar?"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg w-100 fw-bold">
                        Enviar Mensagem
                    </button>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection