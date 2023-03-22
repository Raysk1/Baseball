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
        Schema::create('turnos', function (Blueprint $table) {
            $table->integer('idJuego');
            $table->integer('idEquipo');
            $table->integer('idAfiliacion');
            $table->integer('turno')->nullable();
            $table->integer('inning')->nullable();
            $table->integer('posicion')->nullable();
            $table->string('tipo', 2)->nullable();
            $table->string('resultado', 2)->nullable();
            $table->boolean('carrera')->nullable();
            $table->integer('producciones')->nullable();
            $table->string('detalles', 20)->nullable();
            $table->integer('idLanzador');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('turnos');
    }
};
