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
        Schema::create('gestores', function (Blueprint $table) {
            $table->string('gestor_id', 12)->primary();
            $table->string('nombres_gestor');
            $table->string('apellidos_gestor');
            $table->string('telefono_gestor');
            $table->string('usuario_id', 10);
            $table->timestamp('fechaRegistro_gestor')->useCurrent();
            $table->enum('estado_gestor', ['activo', 'inactivo']);
            $table->string('registrador_id', 10);
            $table->string('supervisor_id', 10);

            // Definimos las claves foráneas
            $table->foreign('usuario_id')->references('usuario_id')->on('usuarios');
            $table->foreign('registrador_id')->references('usuario_id')->on('usuarios');
            $table->foreign('supervisor_id')->references('usuario_id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gestores');
    }
};
