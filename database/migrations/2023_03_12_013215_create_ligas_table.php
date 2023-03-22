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
        Schema::create('ligas', function (Blueprint $table) {
            $table->integer('idLiga', true);
            $table->string('descripcion', 1000)->nullable();
            $table->string('presidente', 50)->nullable();
            $table->string('coordinador', 50)->nullable();
            $table->string('mapa', 15)->nullable();
            $table->string('direccion', 50)->nullable();
            $table->integer('telefono')->nullable();
            $table->string('redes', 70)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ligas');
    }
};
