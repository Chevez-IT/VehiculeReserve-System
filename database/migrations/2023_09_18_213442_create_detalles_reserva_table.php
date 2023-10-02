<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_reserva', function (Blueprint $table) {
            $table->string('detalle_reserva_id', 12)->primary();
            $table->string('vehiculo_id', 10);
            $table->string('solicitante_id', 12);
            $table->date('fecha_reserva');
            $table->integer('km_inicial');
            $table->integer('km_final');
            $table->time('hora_salida_reserva');
            $table->time('hora_entrada_reserva');
            $table->decimal('monto_asignado_combustible', 10, 2);
            $table->decimal('numero_galones', 8, 2);
            $table->string('destino_reserva');
            $table->text('actividad_realizada');
            $table->enum('estado_reserva', ['activo', 'inactivo']);

            // Definimos las claves foráneas
            $table->foreign('vehiculo_id')->references('vehiculo_id')->on('vehiculos');
            $table->foreign('solicitante_id')->references('solicitante_id')->on('solicitantes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalles_reserva');
    }
};
