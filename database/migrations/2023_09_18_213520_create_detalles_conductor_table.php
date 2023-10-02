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
        Schema::create('detalles_conductor', function (Blueprint $table) {
            $table->string('detalle_conductor_id', 12)->primary();
            $table->string('solicitante_id', 12);
            $table->string('dui_conductor', 10);
            $table->string('licencia_conductor');
            $table->enum('estado_conductor', ['activo', 'inactivo']);

            // Definimos la clave foránea
            $table->foreign('solicitante_id')->references('solicitante_id')->on('solicitantes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalles_conductor');
    }
};
