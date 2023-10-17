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
            $table->string('reserva_id', 10)->primary();
            $table->string('detalle_reserva_id', 12);
            $table->string('detalle_conductor_id', 12);
            $table->timestamp('creacion_reserva')->useCurrent();
            $table->enum('estado_reserva', ['Activa', 'Inactiva', 'Realizada', 'Cancelada']);

            $table->foreign('detalle_reserva_id')->references('detalle_reserva_id')->on('detalles_reserva')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('detalle_conductor_id')->references('detalle_conductor_id')->on('detalles_conductor')->onDelete('cascade')->onUpdate('cascade');
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
