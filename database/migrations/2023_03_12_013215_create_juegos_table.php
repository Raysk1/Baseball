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
        Schema::create('juegos', function (Blueprint $table) {
            $table->integer('idJuego', true);
            $table->integer('idTemporada');
            $table->integer('jornada')->nullable();
            $table->integer('idCampo');
            $table->date('fecha')->nullable();
            $table->time('hora')->nullable();
            $table->string('clima', 30)->nullable();
            $table->integer('idEquipoVisitante');
            $table->integer('idEquipoLocal');
            $table->integer('final')->nullable();
            $table->integer('idAviso');
            $table->integer('idCuerpo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('juegos');
    }
};
