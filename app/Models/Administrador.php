<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    use HasFactory;

    protected $table = 'administradores';
    protected $primaryKey = 'admin_id';
    public $timestamps = false;

    protected $fillable = [
        'admin_id',
        'foto_admin',
        'usuario_id',
        'nombres_admin',
        'apellidos_admin',
        'telefono_admin',
        'estado_admin',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id', 'usuario_id');
    }

    public function gestores()
    {
        return $this->hasMany(Gestor::class, 'creador_id', 'admin_id');
    }

    public function vehiculos()
    {
        return $this->hasMany(Vehiculo::class, 'creador_id', 'admin_id');
    }

    public function mantenimientos()
    {
        return $this->hasMany(Mantenimiento::class, 'creador_id', 'admin_id');
    }
}
