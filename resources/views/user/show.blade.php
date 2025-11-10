<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Usuário</title>
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
            max-width: 600px;
            margin: 2rem auto;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
            padding: 2rem;
        }

        h2 {
            color: #111827;
            border-bottom: 2px solid #e5e7eb;
            padding-bottom: 0.5rem;
        }

        .success {
            background: #dcfce7;
            color: #166534;
            padding: 0.6rem 1rem;
            border-radius: 8px;
            margin-bottom: 1rem;
        }

        .user-info {
            margin-top: 1rem;
            line-height: 1.6;
        }

        .user-info p {
            margin: 0.4rem 0;
        }

        @media (max-width: 600px) {
            main {
                margin: 1rem;
                padding: 1.5rem;
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
        <h1>Detalhes do Usuário</h1>
        <div>
            <a href="{{ route('user.index') }}">Listar Usuários</a>
            <a href="{{ route('user.edit', ['user' => $user->id]) }}">Editar</a>
        </div>
    </header>

    <main>
        <h2>Informações do Usuário</h2>

        @if (session('success'))
            <div class="success">
                {{ session('success') }}
            </div>
        @endif

        <div class="user-info">
            <p><strong>ID:</strong> {{ $user->id }}</p>
            <p><strong>Nome:</strong> {{ $user->name }}</p>
            <p><strong>E-mail:</strong> {{ $user->email }}</p>
            <p><strong>Cadastrado:</strong> {{ $user->created_at->format('d/m/Y H:i:s') }}</p>
            <p><strong>Atualizado:</strong> {{ $user->updated_at->format('d/m/Y H:i:s') }}</p>
        </div>
    </main>
</body>
</html>
