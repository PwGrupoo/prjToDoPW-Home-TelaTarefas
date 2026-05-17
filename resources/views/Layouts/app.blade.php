<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PrjToDo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --brand: #2563eb;
            --brand-dark: #1d4ed8;
            --brand-light: #eff6ff;
            --accent: #0ea5e9;
            --bg: #f0f4f8;
            --surface: #ffffff;
            --text: #0f172a;
            --text-muted: #64748b;
            --border: #e2e8f0;
            --radius: 14px;
            --shadow: 0 1px 3px rgba(15,23,42,.06), 0 4px 16px rgba(15,23,42,.07);
            --shadow-lg: 0 8px 32px rgba(15,23,42,.12);
        }

        * { box-sizing: border-box; }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: var(--bg);
            color: var(--text);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }

        /* ── NAVBAR ── */
        .navbar {
            background: rgba(255,255,255,0.8) !important;
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-bottom: 1px solid var(--border);
            padding: 0 0;
            box-shadow: 0 1px 0 var(--border);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .navbar .container {
            height: 64px;
            display: flex;
            align-items: center;
        }

        .navbar-brand {
            font-weight: 800;
            font-size: 1.2rem;
            color: var(--brand) !important;
            letter-spacing: -0.04em;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .navbar-brand::before {
            content: '';
            width: 30px;
            height: 30px;
            background: linear-gradient(135deg, var(--brand), var(--accent));
            border-radius: 8px;
            display: inline-block;
            flex-shrink: 0;
        }

        .navbar-nav .nav-link {
            color: var(--text-muted) !important;
            font-weight: 500;
            font-size: 0.9rem;
            padding: 6px 14px !important;
            border-radius: 8px;
            transition: all 0.18s ease;
        }

        .navbar-nav .nav-link:hover {
            color: var(--brand) !important;
            background: var(--brand-light);
        }

        /* ── MAIN ── */
        main {
            flex: 1;
            padding: 48px 0 64px;
        }

        /* ── FOOTER ── */
        footer {
            background: #0f172a;
            color: #64748b;
            padding: 22px 0;
            font-size: 0.83rem;
            letter-spacing: 0.01em;
        }

        /* ── CARDS ── */
        .card {
            border: 1px solid var(--border) !important;
            border-radius: var(--radius) !important;
            box-shadow: var(--shadow) !important;
        }

        /* ── BOTÕES ── */
        .btn {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.18s ease;
            letter-spacing: 0.01em;
        }

        .btn-primary {
            background: var(--brand) !important;
            border-color: var(--brand) !important;
            box-shadow: 0 4px 14px rgba(37,99,235,.3);
        }

        .btn-primary:hover {
            background: var(--brand-dark) !important;
            border-color: var(--brand-dark) !important;
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(37,99,235,.4);
        }

        .btn-outline-primary {
            color: var(--brand) !important;
            border-color: #bfdbfe !important;
            background: white !important;
        }

        .btn-outline-primary:hover {
            background: var(--brand-light) !important;
            border-color: var(--brand) !important;
            transform: translateY(-1px);
        }

        .btn-success {
            background: #059669 !important;
            border-color: #059669 !important;
            box-shadow: 0 4px 14px rgba(5,150,105,.25);
        }

        .btn-success:hover {
            background: #047857 !important;
            border-color: #047857 !important;
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(5,150,105,.35);
        }

        /* ── TABELA ── */
        .table {
            font-size: 0.9rem;
        }

        .table thead th {
            font-size: 0.72rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: var(--text-muted);
            background: #f8fafc;
            border-bottom: 2px solid var(--border);
            padding: 14px 16px;
        }

        .table tbody td {
            padding: 15px 16px;
            vertical-align: middle;
            border-color: var(--border);
            color: #334155;
        }

        .table-hover tbody tr:hover {
            background: var(--brand-light);
        }

        /* ── BADGES ── */
        .badge {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-weight: 600;
            font-size: 0.72rem;
            letter-spacing: 0.03em;
            padding: 5px 10px;
            border-radius: 999px;
        }

        .bg-warning {
            background: #fef3c7 !important;
            color: #92400e !important;
        }

        .bg-success {
            background: #d1fae5 !important;
            color: #065f46 !important;
        }

        .bg-danger {
            background: #fee2e2 !important;
            color: #991b1b !important;
        }

        /* ── INPUTS ── */
        .form-control, .form-select {
            font-family: 'Plus Jakarta Sans', sans-serif;
            border: 1.5px solid var(--border);
            border-radius: 8px;
            padding: 10px 14px;
            font-size: 0.9rem;
            transition: border-color 0.18s, box-shadow 0.18s;
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--brand);
            box-shadow: 0 0 0 3px rgba(37,99,235,.12);
        }

        .form-label {
            font-size: 0.85rem;
            font-weight: 600;
            color: #334155;
            margin-bottom: 6px;
        }

        /* ── ANIMAÇÃO ── */
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(16px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        .animate-in {
            animation: fadeUp 0.5s cubic-bezier(0.4,0,0.2,1) both;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg mb-0">
        <div class="container">
            <a class="navbar-brand" href="/">PrjToDo</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-1">
                    <li class="nav-item"><a class="nav-link" href="/">Início</a></li>
                    <li class="nav-item"><a class="nav-link" href="/tarefa">Tarefas</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contato">Contato</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <div class="container animate-in">
            @yield('content')
        </div>
    </main>

    <footer class="text-center">
        <div class="container">&copy; 2026 PrjToDo &mdash; Todos os direitos reservados.</div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>