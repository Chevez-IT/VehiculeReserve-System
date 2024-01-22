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
            $table->string('usuario1', 10);
            $table->string('usuario2', 10);
            $table->timestamp('creacion_conversacion')->useCurrent();

            $table->foreign('usuario1')->references('usuario_id')->on('usuarios')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('usuario2')->references('usuario_id')->on('usuarios')->onDelete('cascade')->onUpdate('cascade');
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
