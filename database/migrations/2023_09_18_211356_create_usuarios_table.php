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
            $table->string('nombre_usuario');
            $table->string('correo_usuario')->unique();
            $table->string('contrasena_usuario');
            $table->string('rol_id', 10);
            $table->enum('estado_usuario', ['activo', 'inactivo']);
            $table->timestamps();

            // Definimos la clave foránea para rol_id
            $table->foreign('rol_id')->references('rol_id')->on('roles');
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
