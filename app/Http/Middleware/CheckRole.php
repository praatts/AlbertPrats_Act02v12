<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {

        //Si el usuario no está autenticado, le reedirige al login
        if (!$request->user()) {
            return redirect('login');
        }

        //Recoge el usuario que ha iniciado sesión

        $user = $request->user();

        //Redirección según rol
        if ($user->role == 'admin') {
            return redirect('');
        } else {
            return redirect('');
        }

        return $next($request);
    }
}
