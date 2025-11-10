<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
    <style>
        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background: #f5f7fa;
            margin: 0;
            padding: 0;
            color: #333;
        }

        header {
            background: #2563eb;
            color: #fff;
            padding: 1.2rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            font-size: 1.5rem;
            margin: 0;
        }

        header a {
            background: #fff;
            color: #2563eb;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: 0.2s;
        }

        header a:hover {
            background: #dbeafe;
        }

        main {
            max-width: 800px;
            margin: 2rem auto;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
            padding: 1.5rem 2rem;
        }

        h2 {
            color: #111827;
            border-bottom: 2px solid #e5e7eb;
            padding-bottom: 0.5rem;
        }

        .success {
            background: #dcfce7;
            color: #166534;
            border: 1px solid #86efac;
            padding: 0.75rem 1rem;
            border-radius: 8px;
            margin-bottom: 1rem;
        }

        .user-card {
            border-bottom: 1px solid #e5e7eb;
            padding: 1rem 0;
        }

        .user-card:last-child {
            border-bottom: none;
        }

        .user-info {
            margin-bottom: 0.5rem;
        }

        .actions a, .actions button {
            display: inline-block;
            margin-right: 0.5rem;
            padding: 0.4rem 0.8rem;
            border-radius: 6px;
            text-decoration: none;
            font-size: 0.9rem;
            transition: background 0.2s;
            border: none;
            cursor: pointer;
        }

        .actions a {
            background: #eff6ff;
            color: #1d4ed8;
        }

        .actions a:hover {
            background: #dbeafe;
        }

        .actions button {
            background: #fee2e2;
            color: #b91c1c;
        }

        .actions button:hover {
            background: #fecaca;
        }

        hr {
            border: none;
            border-top: 1px solid #e5e7eb;
            margin: 1rem 0;
        }

        @media (max-width: 600px) {
            main {
                margin: 1rem;
                padding: 1rem;
            }

            header {
                flex-direction: column;
                align-items: flex-start;
                gap: 0.5rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Gestão de Usuários</h1>
        <a href="{{ route('user.create') }}">Cadastrar Usuário</a>
    </header>

    <main>
        <h2>Lista de Usuários</h2>

        @if (session('success'))
            <div class="success">
                {{ session('success') }}
            </div>
        @endif

        @forelse ($users as $user)
            <div class="user-card">
                <div class="user-info">
                    <strong>ID:</strong> {{ $user->id }}<br>
                    <strong>Nome:</strong> {{ $user->name }}<br>
                    <strong>E-mail:</strong> {{ $user->email }}
                </div>
                <div class="actions">
                    <a href="{{ route('user.show', ['user' => $user->id]) }}">Visualizar</a>
                    <a href="{{ route('user.edit', ['user' => $user->id]) }}">Editar</a>
                    <form method="POST" action="{{ route('user.destroy', ['user' => $user->id]) }}" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Apagar</button>
                    </form>
                </div>
            </div>
        @empty
            <p>Nenhum usuário cadastrado.</p>
        @endforelse
    </main>
</body>
</html>
