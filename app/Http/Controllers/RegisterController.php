<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request) {
        //Insertamos usuario en la base de datos
        User::create([
            'email' => $request->input('email'),
            'username' => $request->input('username'),
            'name' => $request->input('name'),
            'password' => Hash::make($request->input('password')), //Encriptamos contraseña
        ]);

        //Redirección al login después del registro
        return redirect('/');
    }
}
