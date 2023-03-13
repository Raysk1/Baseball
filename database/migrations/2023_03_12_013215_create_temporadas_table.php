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
        Schema::create('temporadas', function (Blueprint $table) {
            $table->integer('idTemporada', true);
            $table->integer('idLiga');
            $table->string('grupo', 10)->nullable();
            $table->string('categoria', 12)->nullable();
            $table->string('momento', 15)->nullable();
            $table->string('temporada', 12)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temporadas');
    }
};
