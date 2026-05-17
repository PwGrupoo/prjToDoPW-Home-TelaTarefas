<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários — PrjToDo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --brand: #2563eb;
            --brand-light: #eff6ff;
            --accent: #0ea5e9;
            --bg: #f0f4f8;
            --border: #e2e8f0;
            --text: #0f172a;
            --muted: #64748b;
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
        nav.topnav {
            background: rgba(255,255,255,0.85);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid var(--border);
            height: 64px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 40px;
            position: sticky;
            top: 0;
            z-index: 100;
        }
        .logo {
            font-weight: 800;
            font-size: 1.15rem;
            color: var(--brand);
            text-decoration: none;
            letter-spacing: -0.04em;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .logo::before {
            content: '';
            width: 28px; height: 28px;
            background: linear-gradient(135deg, var(--brand), var(--accent));
            border-radius: 8px;
            display: inline-block;
        }
        .topnav-links { display: flex; gap: 4px; }
        .topnav-links a {
            color: var(--muted);
            text-decoration: none;
            font-size: 0.88rem;
            font-weight: 500;
            padding: 6px 13px;
            border-radius: 7px;
            transition: all 0.18s;
        }
        .topnav-links a:hover {
            color: var(--brand);
            background: var(--brand-light);
        }
        main { flex: 1; padding: 48px 40px; max-width: 1000px; margin: 0 auto; width: 100%; }
        footer {
            background: #0f172a;
            color: #475569;
            text-align: center;
            padding: 20px;
            font-size: 0.83rem;
        }
        .btn-back {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            color: var(--muted);
            text-decoration: none;
            font-size: 0.85rem;
            font-weight: 600;
            padding: 7px 14px;
            border-radius: 8px;
            border: 1.5px solid var(--border);
            background: white;
            margin-bottom: 28px;
            transition: all 0.18s;
        }
        .btn-back:hover {
            color: var(--brand);
            border-color: #93c5fd;
            background: var(--brand-light);
        }
        .page-title { font-weight: 800; font-size: 1.7rem; letter-spacing: -0.04em; color: var(--text); margin-bottom: 4px; }
        .page-sub { color: var(--muted); font-size: 0.88rem; margin-bottom: 28px; }
        .table-card {
            background: white;
            border: 1px solid var(--border);
            border-radius: 14px;
            box-shadow: 0 1px 3px rgba(15,23,42,.06), 0 4px 16px rgba(15,23,42,.07);
            overflow: hidden;
        }
        table { width: 100%; border-collapse: collapse; font-size: 0.9rem; }
        thead th {
            font-size: 0.72rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: var(--muted);
            background: #f8fafc;
            padding: 14px 20px;
            border-bottom: 2px solid var(--border);
            text-align: left;
        }
        tbody td {
            padding: 15px 20px;
            border-bottom: 1px solid var(--border);
            color: #334155;
            vertical-align: middle;
        }
        tbody tr:last-child td { border-bottom: none; }
        tbody tr:hover td { background: var(--brand-light); }
        .id-badge {
            display: inline-block;
            background: #f1f5f9;
            color: var(--muted);
            font-size: 0.75rem;
            font-weight: 700;
            padding: 3px 9px;
            border-radius: 999px;
            font-variant-numeric: tabular-nums;
        }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(14px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        main { animation: fadeUp 0.5s ease both; }
    </style>
</head>
<body>

<nav class="topnav">
    <a class="logo" href="/">PrjToDo</a>
    <div class="topnav-links">
        <a href="/">Home</a>
        <a href="/tarefa">Tarefas</a>
        <a href="/usuario">Usuários</a>
    </div>
</nav>

<main>
    <a href="/" class="btn-back">⬅ Voltar</a>

    <div class="page-title">Lista de Usuários</div>
    <div class="page-sub">Todos os usuários cadastrados no sistema</div>

    <div class="table-card">
        <table>
            <thead>
                <tr>
                    <th style="width: 80px;">ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                </tr>
            </thead>
            <tbody>
                @foreach($usuario as $u)
                <tr>
                    <td><span class="id-badge">#{{ $u->id }}</span></td>
                    <td style="font-weight: 600; color: #0f172a;">{{ $u->nome }}</td>
                    <td>{{ $u->email }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>

<footer>
    &copy; 2026 PrjToDo &mdash; Todos os direitos reservados.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>