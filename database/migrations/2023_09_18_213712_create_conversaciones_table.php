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
        Schema::create('conversaciones', function (Blueprint $table) {
            $table->string('conversacion_id', 10)->primary();
            $table->string('usuario1_id', 10);
            $table->string('usuario2_id', 10);

            // Definimos las claves foráneas
            $table->foreign('usuario1_id')->references('usuario_id')->on('usuarios');
            $table->foreign('usuario2_id')->references('usuario_id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conversaciones');
    }
};
