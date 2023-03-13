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
        Schema::create('jugadores', function (Blueprint $table) {
            $table->integer('idAfiliacion')->primary();
            $table->string('nombre', 30)->nullable();
            $table->string('apellidos', 60)->nullable();
            $table->date('fechaNacimiento')->nullable();
            $table->string('curp', 18)->nullable();
            $table->integer('posicion')->nullable();
            $table->string('golpea', 15)->nullable();
            $table->string('tira', 15)->nullable();
            $table->string('pagina', 70)->nullable();
            $table->string('abreviacion', 20)->nullable();
            $table->boolean('status')->nullable();
            $table->string('rama', 15);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jugadores');
    }
};
