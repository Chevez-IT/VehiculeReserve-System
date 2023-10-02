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
        Schema::create('solicitantes', function (Blueprint $table) {
            $table->string('solicitante_id', 12)->primary();
            $table->string('nombres_solicitante');
            $table->string('apellidos_solicitante');
            $table->string('telefono_solicitante');
            $table->string('usuario_id', 10);
            $table->timestamp('fechaRegistro_solicitante')->useCurrent();
            $table->enum('estado_solicitante', ['activo', 'inactivo']);
            $table->string('registrador_id', 10);

            // Definimos las claves foráneas
            $table->foreign('usuario_id')->references('usuario_id')->on('usuarios');
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
        Schema::dropIfExists('solicitantes');
    }
};
