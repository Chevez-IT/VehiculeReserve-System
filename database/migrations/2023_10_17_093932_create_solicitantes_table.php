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
            $table->string('usuario_id', 10);
            $table->string('foto_solicitante', 255);
            $table->string('nombres_solicitante', 255);
            $table->string('apellidos_solicitante', 255);
            $table->string('telefono_solicitante', 100);
            $table->enum('estado_solicitante', ['Activo', 'Inactivo']);
            $table->string('creador_id', 12);
            $table->timestamp('creacion_solicitante')->useCurrent();
            $table->timestamp('actualizacion_solicitante')->nullable()->useCurrentOnUpdate();

            $table->foreign('usuario_id')->references('usuario_id')->on('usuarios')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('creador_id')->references('gestor_id')->on('gestores')->onDelete('cascade')->onUpdate('cascade');
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
