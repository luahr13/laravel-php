<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function index()
    {
        // Carrega a view 'user.index'
        return view('user.index');
    }

    public function create()
    {
        // Carrega a view 'user.create'
        return view('user.create');
    }

    public function store(UserRequest $request)
    {
        // Validar o formulário
        $request->validated();
    }
}
