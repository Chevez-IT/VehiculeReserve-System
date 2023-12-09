<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rol;


class RolController extends Controller
{
    /* public function insertarRoles()
    {
        $roles = [
            ['rol' => 'Administrador', 'estado_rol' => 'Activo'],
            ['rol' => 'Gestor', 'estado_rol' => 'Activo'],
            ['rol' => 'Solicitante', 'estado_rol' => 'Activo'],
        ];

        foreach ($roles as $rol) {
            Rol::create($rol);
        }

        return response()->json(['mensaje' => 'Roles insertados con éxito']);
    } */
}
