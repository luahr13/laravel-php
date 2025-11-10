<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Usuário</title>
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

        form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            margin-top: 1rem;
        }

        label {
            font-weight: 600;
            color: #374151;
        }

        input {
            padding: 0.6rem 0.8rem;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-size: 1rem;
            outline: none;
            transition: border-color 0.2s;
        }

        input:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37,99,235,0.15);
        }

        button {
            background: #2563eb;
            color: white;
            padding: 0.7rem 1.2rem;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: 0.2s;
        }

        button:hover {
            background: #1d4ed8;
        }

        .errors p {
            background: #fee2e2;
            color: #b91c1c;
            border: 1px solid #fecaca;
            padding: 0.5rem 0.8rem;
            border-radius: 8px;
            margin-bottom: 0.5rem;
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
        <h1>Cadastrar Usuário</h1>
        <a href="{{ route('user.index') }}">Listar Usuários</a>
    </header>

    <main>
        <h2>Formulário de Cadastro</h2>

        @if ($errors->any())
            <div class="errors">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            @method('POST')

            <div>
                <label>Nome:</label>
                <input type="text" name="name" placeholder="Nome completo" value="{{ old('name') }}">
            </div>

            <div>
                <label>E-mail:</label>
                <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}">
            </div>

            <div>
                <label>Senha:</label>
                <input type="password" name="password" placeholder="Senha com no mínimo 6 caracteres" value="{{ old('password') }}">
            </div>

            <button type="submit">Salvar</button>
        </form>
    </main>
</body>
</html>
