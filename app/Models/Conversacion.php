<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversacion extends Model
{
    use HasFactory;

    protected $table = 'conversaciones';
    protected $primaryKey = 'conversacion_id';
    public $timestamps = false;

    protected $fillable = [
        'conversacion_id',
        'usuario1',
        'usuario2',
    ];

    public function mensajes()
    {
        return $this->hasMany(Mensaje::class, 'conversacion_id', 'conversacion_id');
    }

    public function usuario1()
    {
        return $this->belongsTo(Usuario::class, 'usuario1', 'usuario_id');
    }

    public function usuario2()
    {
        return $this->belongsTo(Usuario::class, 'usuario2', 'usuario_id');
    }
}
