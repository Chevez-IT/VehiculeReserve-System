<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalles_Conductor extends Model
{
    use HasFactory;

    protected $table = 'detalles_conductores';
    protected $primaryKey = 'detalles_conductor_id';
    public $timestamps = false;

    protected $fillable = [
        'detalles_conductor_id',
        'solicitante_id',
        'dui_conductor',
        'licencia_conductor',
        'documentacion_conductor',
        'estado_conductor',
    ];

    public function solicitante()
    {
        return $this->belongsTo(Solicitante::class, 'solicitante_id', 'solicitante_id');
    }
}
