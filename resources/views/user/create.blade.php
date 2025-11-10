<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
    <a href="{{ route('user.index') }}">Listar</a>
    <h2>Cadastrar Usuário</h2>

    <form action="#" method="POST">
        @csrf
        @method('POST')

        <label>Nome:</label>
        <input type="text" name="name" placeholder="Nome completo">
        <br><br>

        <label>E-mail:</label>
        <input type="email" name="email" placeholder="E-mail">
        <br><br>

        <label>Senha:</label>
        <input type="password" name="password" placeholder="Senha com no mínimo 6 caracteres">
        <br><br>

        <button type="submit">Cadastrar</button>
</body>
</html>