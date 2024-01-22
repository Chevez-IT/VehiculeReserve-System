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
        Schema::create('mantenimientos', function (Blueprint $table) {
            $table->string('mantenimiento_id', 12)->primary();
            $table->string('vehiculo_id', 10);
            $table->date('fecha_mant');
            $table->text('notas_mant');
            $table->string('creador_id', 12);
            $table->timestamp('creacion_mant')->useCurrent();
            $table->timestamp('actualizacion_mant')->useCurrentOnUpdate();
            $table->enum('estado_mant', ['Realizado', 'Por realizar', 'Realizando']);

            $table->foreign('vehiculo_id')->references('vehiculo_id')->on('vehiculos');
            $table->foreign('creador_id')->references('admin_id')->on('administradores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mantenimientos');
    }
};
