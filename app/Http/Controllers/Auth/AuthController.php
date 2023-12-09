<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
{
    $credentials = $request->only('credencial_usuario', 'contrasena_usuario');

    if (Auth::attempt(['nombre_usuario' => $credentials['credencial_usuario'], 'password' => $credentials['contrasena_usuario']]) ||
        Auth::attempt(['correo_usuario' => $credentials['credencial_usuario'], 'password' => $credentials['contrasena_usuario']])) {


        $usuario = Auth::user();

        $infoUsuario = [
            'usuario_id' => $usuario->usuario_id,
            'nombre_usuario' => $usuario->nombre_usuario,
            'correo_usuario' => $usuario->correo_usuario,
            'estado_usuario' => $usuario->estado_usuario,
            'rol' => $usuario->rol->rol
        ];

        return response()->json([
            'mensaje' => 'Acceso Completo',
            'usuario' => $infoUsuario
        ]);
    }

    return response()->json([
        'mensaje' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
    ]);
}



    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.form');
    }
}
