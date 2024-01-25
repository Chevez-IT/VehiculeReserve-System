<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use HasFactory, Notifiable;

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
        'estado_usuario',
    ];

    protected $hidden = [
        'contrasena_usuario',
    ];

    public function rol()
    {
        return $this->belongsTo(Rol::class, 'rol_id', 'rol_id');
    }

    public function mensajes()
    {
        return $this->hasMany(Mensaje::class, 'emisor_id', 'usuario_id');
    }

    public function conversaciones1()
    {
        return $this->hasMany(Conversacion::class, 'usuario1', 'usuario_id');
    }

    public function conversaciones2()
    {
        return $this->hasMany(Conversacion::class, 'usuario2', 'usuario_id');
    }

    public function solicitante()
    {
        return $this->hasOne(Solicitante::class, 'usuario_id', 'usuario_id');
    }

    public function administrador()
    {
        return $this->hasOne(Administrador::class, 'usuario_id', 'usuario_id');
    }

    public function gestor()
    {
        return $this->hasOne(Gestor::class, 'usuario_id', 'usuario_id');
    }

    public function getAuthPassword()
    {
        return $this->contrasena_usuario;
    }
}
