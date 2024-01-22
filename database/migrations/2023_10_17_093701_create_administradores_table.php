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
            $table->string('foto_admin', 255);
            $table->string('usuario_id', 10);
            $table->string('nombres_admin', 255);
            $table->string('apellidos_admin', 255);
            $table->string('telefono_admin', 100);
            $table->enum('estado_admin', ['Activo', 'Inactivo']);
            $table->timestamp('creacion_admin')->useCurrent();
            $table->timestamp('actualizacion_admin')->nullable()->useCurrentOnUpdate();

            $table->foreign('usuario_id')->references('usuario_id')->on('usuarios')->onDelete('cascade')->onUpdate('cascade');
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
