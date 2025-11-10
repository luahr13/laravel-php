<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        //Recupera todos os usuários
        $users = User::orderByDesc('id')->get();

        // Carrega a view 'user.index'
        return view('user.index', ['users' => $users]);
    }

    public function show(User $user)
    {
        // Carrega a view 'user.show'
        return view('user.show', ['user' => $user]);
    }

    public function create()
    {
        // Carrega a view 'user.create'
        return view('user.show', ['user' => $user]);
    }

    public function store(UserRequest $request)
    {
        // Validar o formulário
        $request->validated();
        // Criar um novo usuário
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect()->route('user.index')->with('success', 'Usuário cadastrado com sucesso!');
    }
}
