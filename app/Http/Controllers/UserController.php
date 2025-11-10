<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

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
}
