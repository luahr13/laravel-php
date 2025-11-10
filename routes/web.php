<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index'])->name('user.index');
Route::get('/show-user/{user}', [UserController::class, 'show'])->name('user.show');
Route::get('/create-user', [UserController::class, 'create'])->name('user.create');
Route::get('/edit-user/{user}', [UserController::class, 'edit'])->name('user.edit');
Route::post('/store-user', [UserController::class, 'store'])->name('user.store');
Route::put('/update-user/{user}', [UserController::class, 'update'])->name('user.update');