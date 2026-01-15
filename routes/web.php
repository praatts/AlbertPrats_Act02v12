<?php

use App\Http\Controllers\LoginController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('LoginView');
});

Route::get('/admin-dashboard', function () {
    $users = User::all();
    return view('AdminView', compact('users'));
});

Route::get('/user-dashboard', function () {
    return view('UserView');
});

Route::get('/verificar-rol', function() {
})->middleware(['check.role'])->name('check.role');

Route::post('/enviar-formulario', [LoginController::class, 'login']);


