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
        Schema::create('ampayers', function (Blueprint $table) {
            $table->integer('idAmpayer', true);
            $table->string('nombre', 30)->nullable();
            $table->string('apellidos', 60)->nullable();
            $table->date('fechaNacimiento')->nullable();
            $table->string('curp', 18)->nullable();
            $table->string('abreviacion', 20)->nullable();
            $table->boolean('activo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ampayers');
    }
};
