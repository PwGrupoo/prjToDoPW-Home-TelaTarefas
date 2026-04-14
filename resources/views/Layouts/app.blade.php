<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PrjToDo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        :root { --azul-projeto: #0d6efd; }
        body { font-family: 'Inter', sans-serif; background-color: #f4f7f6; display: flex; flex-direction: column; min-height: 100vh; margin: 0; }
        .bg-primary { background-color: var(--azul-projeto) !important; }
        .text-primary { color: var(--azul-projeto) !important; }
        .btn-primary { background-color: var(--azul-projeto); border-color: var(--azul-projeto); }
        .btn-outline-primary { color: var(--azul-projeto); border-color: var(--azul-projeto); }
        .navbar { box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        .card { border: none; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); }
        footer { background: #212529; color: white; padding: 15px 0; margin-top: auto; }
        main { flex: 1; padding-bottom: 40px; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-5">
        <div class="container">
            <a class="navbar-brand fw-bold fs-3" href="/">PrjToDo</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link text-white px-3" href="/">Início</a></li>
                    <li class="nav-item"><a class="nav-link text-white px-3" href="/tarefa">Tarefas</a></li>
                    <li class="nav-item"><a class="nav-link text-white px-3" href="/contato">Contato</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container">
        @yield('content')
    </main>
    <footer class="text-center">
        <div class="container small">&copy; 2026 PrjToDo - Todos os direitos reservados.</div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>