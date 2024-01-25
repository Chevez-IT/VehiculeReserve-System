<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    protected $table = 'vehiculos';
    protected $primaryKey = 'vehiculo_id';
    public $timestamps = false;

    protected $fillable = [
        'vehiculo_id',
        'marca_vehiculo',
        'modelo_vehiculo',
        'año_vehiculo',
        'tipo_vehiculo',
        'placa_vehiculo',
        'motor_vehiculo',
        'galones_vehiculo',
        'notas_vehiculo',
        'estado_vehiculo',
        'creador_id'
    ];

    public function reservas() {
        return $this->hasMany(Reserva::class);
    }

    public function imagenes() {
        return $this->hasMany(Imagenes_Vehiculo::class);
    }

    public function mantenimientos() {
        return $this->hasMany(Mantenimiento::class);
    }

    public function administrador() {
        return $this->belongsTo(Administrador::class, 'creador_id');
    }

}
