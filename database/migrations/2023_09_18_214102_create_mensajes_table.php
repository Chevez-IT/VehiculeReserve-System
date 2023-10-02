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
        Schema::create('mensajes', function (Blueprint $table) {
            $table->string('mensaje_id', 10)->primary();
            $table->string('conversacion_id', 10);
            $table->string('emisor_id', 10);
            $table->text('mensaje');
            $table->timestamp('fecha_creacion')->useCurrent();
            $table->time('hora_creacion')->useCurrent();

            // Definimos las claves foráneas
            $table->foreign('conversacion_id')->references('conversacion_id')->on('conversaciones');
            $table->foreign('emisor_id')->references('usuario_id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mensajes');
    }
};
