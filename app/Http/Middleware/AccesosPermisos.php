<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccesosPermisos
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {

        if (!Auth::check()) {
            return $next($request);
        }

        $user = Auth::user();
        switch ($user->rol) {
            case 'Administrador':
                return redirect()->route('404'); // Ruta del home de administradores
            case 'Gestor':
                return redirect()->route('404'); // Ruta del home de gestores
            case 'Solicitante':
                return redirect()->route('404'); // Ruta del home de solicitantes
            default:
                return redirect()->route('404');
        }
    }
}
