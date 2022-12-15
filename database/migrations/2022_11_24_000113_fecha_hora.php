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
        Schema::create('fecha_hora', function (Blueprint $table) {
            $table->id();
            $table->date('fk_fecha');
            $table->unsignedBigInteger('id_hora');
            $table->foreign('fk_fecha')->references('fecha')->on('fecha')->onDelete('cascade');
            $table->foreign('id_hora')->references('id')->on('hora')->onDelete('cascade');
            $table->string('estado');
            $table->string('eleccion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fecha_hora');
    }
};
