<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $request) {
        $email = $request->only('email');
        $user = $request->only('user');
        $name = $request->only('name');
        $password = $request->only('password');
    }
}
