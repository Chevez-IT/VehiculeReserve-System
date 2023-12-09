<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class RestaurarContrasenaController extends Controller
{
    public function checkCorreo(Request $request)
    {
        $correo_usuario = $request->input('correo_usuario');

        $usuario = Usuario::where('correo_usuario', $correo_usuario)->first();

        if ($usuario) {
            $token = Str::random(6);

            Mail::send('acceso.passwordToken', ['token' => $token], function ($message) use ($correo_usuario) {
                $message->to($correo_usuario)->subject('Recuperación de contraseña');
            });

            return redirect()->route('restablecer.contraseña.form')->with([
                'correo_usuario' => $correo_usuario,
                'token' => $token
            ]);
        } else {
            return response()->json([
                'mensaje' => 'No se ha encontrado al usuario ' . $correo_usuario
            ]);
        }
    }
}

