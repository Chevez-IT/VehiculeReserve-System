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
            $table->string('usuario_id', 10);
            $table->string('foto_gestor', 255);
            $table->string('nombres_gestor', 255);
            $table->string('apellidos_gestor', 255);
            $table->string('telefono_gestor', 100);
            $table->string('creador_id', 12);
            $table->enum('estado_gestor', ['Activo', 'Inactivo']);
            $table->timestamp('creacion_gestor')->useCurrent();
            $table->timestamp('actualizacion_gestor')->useCurrentOnUpdate();

            $table->foreign('usuario_id')->references('usuario_id')->on('usuarios');
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
        Schema::dropIfExists('gestores');
    }
};
