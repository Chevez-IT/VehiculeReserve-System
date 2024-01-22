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
        Schema::create('imagenes_vehiculos', function (Blueprint $table) {
            $table->string('imagen_id', 12);
            $table->string('vehiculo_id', 10);
            $table->string('nombre_imagen', 255);
            $table->string('imagen', 255);
        
            $table->foreign('vehiculo_id')->references('vehiculo_id')->on('vehiculos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imagenes_vehiculos');
    }
};
