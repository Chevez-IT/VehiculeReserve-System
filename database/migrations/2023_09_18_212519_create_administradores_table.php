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
        Schema::create('administradores', function (Blueprint $table) {
            $table->string('admin_id', 12)->primary();
            $table->string('nombres_admin');
            $table->string('apellidos_admin');
            $table->string('telefono_admin');
            $table->string('usuario_id', 10);
            $table->timestamp('fechaRegistro_admin')->useCurrent();
            $table->enum('estado_admin', ['activo', 'inactivo']);

            // Definimos las claves foráneas
            $table->foreign('usuario_id')->references('usuario_id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('administradores');
    }
};
