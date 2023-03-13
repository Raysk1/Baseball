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
        Schema::create('ampayerscuerpo', function (Blueprint $table) {
            $table->integer('idCuerpo', true);
            $table->integer('idAmpayers');
            $table->integer('idJuego');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ampayerscuerpo');
    }
};
