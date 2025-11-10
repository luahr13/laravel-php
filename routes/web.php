<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::CLass, 'index'])->name('user.index');
