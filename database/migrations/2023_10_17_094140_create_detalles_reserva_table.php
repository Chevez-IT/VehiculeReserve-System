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
        Schema::create('detalles_reservas', function (Blueprint $table) {
            $table->string('detalle_reserva_id', 12)->primary();
            $table->date('fecha_reserva');
            $table->double('km_inicial');
            $table->double('km_final');
            $table->time('hora_salida_reserva');
            $table->time('hora_entrada_reserva');
            $table->decimal('monto_asignado_combustible', 10, 2);
            $table->decimal('numero_galones', 10, 2);
            $table->text('destino_reserva');
            $table->text('actividad_resalizada');
            $table->text('notas_reserva');
            $table->text('comentarios_reserva');
            $table->timestamp('creacion_detalles_reserva')->useCurrent();
            $table->timestamp('actualizacion_detalles_reserva')->nullable()->useCurrentOnUpdate();
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
