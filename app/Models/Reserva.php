<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $table = 'reservas';
    protected $primaryKey = 'reserva_id';
    public $timestamps = false;

    protected $fillable = [
        'reserva_id',
        'detalle_reserva_id',
        'solicitante_id',
        'vehiculo_id',
        'encargado_id',
        'estado_reserva',
    ];

    public function detalleReserva()
    {
        return $this->belongsTo(Detalles_Reserva::class, 'detalle_reserva_id', 'detalle_reserva_id');
    }

    public function solicitante()
    {
        return $this->belongsTo(Solicitante::class, 'solicitante_id', 'solicitante_id');
    }

    public function vehiculo()
    {
        return $this->belongsTo(Vehiculo::class, 'vehiculo_id', 'vehiculo_id');
    }

    public function gestor()
    {
        return $this->belongsTo(Gestor::class, 'encargado_id', 'gestor_id');
    }
}
