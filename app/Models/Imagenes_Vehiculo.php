<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagenes_Vehiculo extends Model
{
    use HasFactory;

    protected $table = 'imagenes_vehiculos';
    protected $primaryKey = 'imagen_id';
    public $timestamps = false;

    protected $fillable = [
        'imagen_id',
        'vehiculo_id',
        'nombre_imagen',
        'imagen',
    ];

    public function vehiculo()
    {
        return $this->belongsTo(Vehiculo::class, 'vehiculo_id', 'vehiculo_id');
    }
}
