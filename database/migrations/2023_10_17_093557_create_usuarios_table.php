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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->string('usuario_id', 10)->primary();
            $table->string('nombre_usuario', 100);
            $table->string('correo_usuario', 255);
            $table->string('contrasena_usuario', 255);
            $table->unsignedBigInteger('rol_id');
            $table->enum('estado_usuario', ['Activo', 'Inactivo']);
            $table->timestamp('creacion_usuario')->useCurrent();
            $table->timestamp('actualizacion_usuario')->nullable()->default(null)->useCurrentOnUpdate();
            $table->foreign('rol_id')->references('rol_id')->on('roles')->onDelete('cascade')->onUpdate('cascade');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
};
