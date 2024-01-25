<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    use HasFactory;

    protected $table = 'mensajes';
    protected $primaryKey = 'mensaje_id';
    public $timestamps = false;

    protected $fillable = [
        'mensaje_id',
        'conversacion_id',
        'emisor_id',
        'mensaje',
        'estado_mensaje',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'emisor_id', 'usuario_id');
    }

    public function conversacion()
    {
        return $this->belongsTo(Conversacion::class, 'conversacion_id', 'conversacion_id');
    }
}
