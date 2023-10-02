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
            $table->string('mant_id', 12)->primary();
            $table->string('vehiculo_id', 10);
            $table->date('fecha_mant');
            $table->text('notas_mant')->nullable();
            $table->timestamp('fechaRegistro_mant')->useCurrent();
            $table->enum('estado_mant', ['activo', 'inactivo']);
            $table->string('registrador_id', 10);

            // Definimos las claves foráneas
            $table->foreign('vehiculo_id')->references('vehiculo_id')->on('vehiculos');
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
        Schema::dropIfExists('mantenimientos');
    }
};
