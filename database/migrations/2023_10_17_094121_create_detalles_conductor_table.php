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
        Schema::create('detalles_conductores', function (Blueprint $table) {
            $table->string('detalles_conductor_id', 12)->primary();
            $table->string('solicitante_id', 12);
            $table->string('dui_conductor', 10);
            $table->string('licencia_conductor', 255);
            $table->string('documentacion_conductor', 255);
            $table->enum('estado_conductor', ['Verificado', 'Rechazado']);

            $table->foreign('solicitante_id')->references('solicitante_id')->on('solicitantes')->onDelete('cascade')->onUpdate('cascade');
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
