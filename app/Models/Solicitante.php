<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitante extends Model
{
    use HasFactory;

    protected $table = 'solicitantes';
    protected $primaryKey = 'solicitante_id';
    public $timestamps = false;

    protected $fillable = [
        'solicitante_id',
        'usuario_id',
        'foto_solicitante',
        'nombres_solicitante',
        'apellidos_solicitante',
        'telefono_solicitante',
        'estado_solicitante',
        'creador_id',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id', 'usuario_id');
    }

    public function gestor()
    {
        return $this->belongsTo(Gestor::class, 'creador_id', 'gestor_id');
    }

    public function detalleConductor()
    {
        return $this->hasOne(Detalles_Conductor::class, 'solicitante_id', 'solicitante_id');
    }

    public function reservas()
    {
        return $this->hasMany(Reserva::class, 'solicitante_id', 'solicitante_id');
    }
}
