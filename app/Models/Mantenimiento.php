<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mantenimiento extends Model
{
    use HasFactory;

    protected $table = 'mantenimientos';
    protected $primaryKey = 'mantenimiento_id';
    public $timestamps = false;

    protected $fillable = [
        'mantenimiento_id',
        'vehiculo_id',
        'fecha_mant',
        'notas_mant',
        'creador_id',
        'estado_mant',
    ];

    public function vehiculo()
    {
        return $this->belongsTo(Vehiculo::class, 'vehiculo_id', 'vehiculo_id');
    }

    public function administrador()
    {
        return $this->belongsTo(Administrador::class, 'creador_id', 'admin_id');
    }
}
