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
        Schema::create('bateadores', function (Blueprint $table) {
            $table->integer('idJuego');
            $table->integer('idAfiliacion');
            $table->integer('AB')->nullable();
            $table->integer('C')->nullable();
            $table->integer('H')->nullable();
            $table->integer('CP')->nullable();
            $table->integer('BB')->nullable();
            $table->integer('K')->nullable();
            $table->float('PJE', 10, 0)->nullable();
            $table->float('OBP', 10, 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bateadores');
    }
};
