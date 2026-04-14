<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>

    <link rel="stylesheet" href="{{ url('css/style.css') }}">
</head>
<body>

<header>
    <h2>ToDoList</h2>

    <nav>
        <a href="/">Home</a>
        <a href="/tarefa">Tarefas</a>
        <a href="/usuario">Usuários</a>
    </nav>
</header>


<div class="container">

    <div class="top-bar">
        <a href="/" class="btn">⬅ Voltar</a>
    </div>

    <h1>Lista de Usuarios</h1>

    <table class="tabela">

        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
            </tr>
        </thead>

        <tbody>
            @foreach($usuario as $u)
            <tr>
                <td>{{ $u->id }}</td>
                <td>{{ $u->nome }}</td>
                <td>{{ $u->email }}</td>
            </tr>
            @endforeach
        </tbody>

    </table>

</div>

<footer>
    <p>© 2026 ToDoList</p>
</footer>

</body>
</html>
