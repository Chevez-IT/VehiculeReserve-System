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
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->string('vehiculo_id', 10)->primary();
            $table->string('marca_vehiculo', 255);
            $table->string('modelo_vehiculo', 255);
            $table->string('año_vehiculo', 5);
            $table->enum('tipo_vehiculo', ['Pick Up', 'Sedan', 'Camioneta', 'Microbus']);
            $table->string('placa_vehiculo', 255);
            $table->string('motor_vehiculo', 50);
            $table->string('galones_vehiculo', 50);
            $table->text('notas_vehiculo');
            $table->timestamp('creacion_vehiculo')->useCurrent();
            $table->timestamp('actualizacion_vehiculo')->useCurrentOnUpdate();
            $table->enum('estado_vehiculo', ['Activo', 'Inactivo', 'En mantenimiento']);
            $table->string('creador_id', 12);

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
        Schema::dropIfExists('vehiculos');
    }
};
