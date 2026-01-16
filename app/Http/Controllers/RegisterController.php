<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function register(Request $request) {
        $email = $request->only('email');
        $user = $request->only('user');
        $name = $request->only('name');
        $password = $request->only('password');

        User::create([
            'email' => $email,
            'user' => $user,
            'name' => $name,
            'password' => bcrypt($password['password']),
        ]);
    }
}
