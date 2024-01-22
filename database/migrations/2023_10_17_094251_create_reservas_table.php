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
        Schema::create('reservas', function (Blueprint $table) {
            $table->string('reserva_id', 10);
            $table->string('detalle_reserva_id', 12);
            $table->string('solicitante_id', 12);
            $table->string('vehiculo_id', 10);
            $table->string('encargado_id', 12)->nullable();
            $table->enum('estado_reserva', ['Aprobada', 'Rechazada', 'Realizada', 'En espera']);
            $table->timestamp('creacion_reserva')->useCurrent();
            $table->timestamp('actualizacion_reserva')->useCurrentOnUpdate();
        
            $table->foreign('detalle_reserva_id')->references('detalle_reserva_id')->on('detalles_reservas');
            $table->foreign('solicitante_id')->references('solicitante_id')->on('solicitantes');
            $table->foreign('vehiculo_id')->references('vehiculo_id')->on('vehiculos');
            $table->foreign('encargado_id')->references('gestor_id')->on('gestores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservas');
    }
};
