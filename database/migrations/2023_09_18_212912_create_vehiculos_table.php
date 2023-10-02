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
            $table->string('marca_vehiculo');
            $table->string('modelo_vehiculo');
            $table->string('tipo_vehiculo');
            $table->string('placa_vehiculo');
            $table->text('notas_vehiculo')->nullable();
            $table->string('fotografia_vehiculo')->nullable();
            $table->timestamp('fechaRegistro_vehiculo')->useCurrent();
            $table->enum('estado_vehiculo', ['activo', 'inactivo']);
            $table->string('registrador_id', 10);

            // Definimos la clave foránea
            $table->foreign('registrador_id')->references('usuario_id')->on('usuarios');
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
