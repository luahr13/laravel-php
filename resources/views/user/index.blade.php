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

    @forelse ($users as $user)
        ID: {{ $user->id}}<br>
        Nome: {{ $user->name}}<br>
        E-mail: {{ $user->email}}<br>
        <a href="{{ route('user.show', ['user' => $user->id]) }}">Visualizar</a>
        <a href="{{ route('user.edit', ['user' => $user->id]) }}">Editar</a>
        {{-- <a href="{{ route('user.destroy', ['user' => $user->id]) }}">Apagar</a> --}}
        <form method="POST" action="{{ route('user.destroy', ['user' => $user->id]) }}">
            @csrf
            @method('DELETE')
            <button type="submit">Apagar</button>
        <hr>
    @empty
        
    @endforelse
</body>
</html>