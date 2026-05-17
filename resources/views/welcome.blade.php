@extends('layouts.app')

@section('content')
<div class="d-flex flex-column align-items-center justify-content-center text-center" style="min-height: 60vh; padding: 20px 0;">

    <span style="
        display: inline-flex;
        align-items: center;
        gap: 6px;
        background: #eff6ff;
        color: #2563eb;
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        padding: 6px 16px;
        border-radius: 999px;
        border: 1px solid #bfdbfe;
        margin-bottom: 28px;
    ">
        ✦ Organize. Foque. Conquiste.
    </span>

    <h1 style="
        font-size: clamp(2.4rem, 5vw, 3.5rem);
        font-weight: 800;
        letter-spacing: -0.05em;
        line-height: 1.1;
        color: #0f172a;
        margin-bottom: 20px;
        max-width: 700px;
    ">
        Gerenciador
        <span style="
            background: linear-gradient(135deg, #2563eb 0%, #0ea5e9 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        ">PrjToDo</span>
    </h1>

    <p style="
        color: #64748b;
        font-size: 1.1rem;
        font-weight: 400;
        line-height: 1.75;
        max-width: 520px;
        margin-bottom: 40px;
    ">
        Sua ferramenta simples e eficiente para organizar as tarefas do dia a dia com foco e produtividade.
    </p>

    <div class="d-flex gap-3 justify-content-center flex-wrap">
        <a href="/tarefa" class="btn btn-primary btn-lg px-5" style="font-size: 0.95rem;">
            Ver Minhas Tarefas
        </a>
        <a href="/contato" class="btn btn-outline-primary btn-lg px-5" style="font-size: 0.95rem;">
            Contato
        </a>
    </div>

</div>
@endsection