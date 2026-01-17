<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request) {
        $credentials = $request->only('username', 'password');

        //Se intenta autenticar la sesión con las credenciales introducidas en el formulario
        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
    
            return redirect()->route('check.role');
        }

        //Redireccionamos a la misma página con error

        return back()->with('error', 'Correo electrónico o contraseña incorrectos.');
    }

    //Función para cerrar sesión, invalidar la sesión y redirige al login

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
