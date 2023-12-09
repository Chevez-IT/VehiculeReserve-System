<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Rol;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    /* public function insertarUsuarios()
    {
        $usuarios = [
            ['usuario_id' => 'DC400', 'nombre_usuario' => 'DiegoChevez400', 'correo_usuario' => 'proyectochevez@gmail.com', 'contrasena_usuario' => Hash::make('ASA2023'), 'rol_id' => Rol::where('rol', 'Administrador')->first()->rol_id, 'estado_usuario' => 'Activo'],
            ['usuario_id' => 'KS401', 'nombre_usuario' => 'KathiaSorto401', 'correo_usuario' => 'proyectochevez@gmail.com', 'contrasena_usuario' => Hash::make('ASA2023'), 'rol_id' => Rol::where('rol', 'Gestor')->first()->rol_id, 'estado_usuario' => 'Activo'],
            ['usuario_id' => 'EF402', 'nombre_usuario' => 'ErickFuentes402', 'correo_usuario' => 'proyectochevez@gmail.com', 'contrasena_usuario' => Hash::make('ASA2023'), 'rol_id' => Rol::where('rol', 'Solicitante')->first()->rol_id, 'estado_usuario' => 'Activo'],
        ];

        foreach ($usuarios as $usuario) {
            Usuario::create($usuario);
        }

        return response()->json(['mensaje' => 'Usuarios insertados con éxito']);
    } */
}

