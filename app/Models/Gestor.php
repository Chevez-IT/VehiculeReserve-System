<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gestor extends Model
{
    use HasFactory;

    protected $table = 'gestores';
    protected $primaryKey = 'gestor_id';
    public $timestamps = false;

    protected $fillable = [
        'gestor_id',
        'usuario_id',
        'foto_gestor',
        'nombres_gestor',
        'apellidos_gestor',
        'telefono_gestor',
        'creador_id',
        'estado_gestor',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id', 'usuario_id');
    }

    public function administrador()
    {
        return $this->belongsTo(Administrador::class, 'creador_id', 'admin_id');
    }

    public function solicitantes()
    {
        return $this->hasMany(Solicitante::class, 'creador_id', 'gestor_id');
    }

    public function reservas()
    {
        return $this->hasMany(Reserva::class, 'encargado_id', 'gestor_id');
    }
}
