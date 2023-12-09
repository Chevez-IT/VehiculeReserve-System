<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'usuario_id';
    public $incrementing = false;
    public $timestamps = false;
    protected $keyType = 'string';


    protected $fillable = [
        'usuario_id',
        'nombre_usuario',
        'correo_usuario',
        'contrasena_usuario',
        'rol_id',
        'estado_usuario'
    ];

    protected $hidden = [
        'contrasena_usuario',
    ];

    public function rol()
    {
        return $this->belongsTo(Rol::class, 'rol_id', 'rol_id');
    }
}
