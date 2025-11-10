<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
    <a href="{{ route('user.create') }}">Cadastrar</a>
    <h2>Lista de usuários</h2>
    @if (session('success'))
        <p style="color: #008000;">
            {{ session('success') }}
        </p>
    @endif
</body>
</html>