<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalles_Reserva extends Model
{
    use HasFactory;

    protected $table = 'detalles_reservas';
    protected $primaryKey = 'detalle_reserva_id';
    public $timestamps = false;

    protected $fillable = [
        'detalle_reserva_id',
        'fecha_reserva',
        'km_inicial',
        'km_final',
        'hora_salida_reserva',
        'hora_entrada_reserva',
        'monto_asignado_combustible',
        'numero_galones',
        'destino_reserva',
        'actividad_resalizada',
        'notas_reserva',
        'comentarios_reserva',
    ];

    public function reserva()
    {
        return $this->hasOne(Reserva::class, 'detalle_reserva_id', 'detalle_reserva_id');
    }
}
