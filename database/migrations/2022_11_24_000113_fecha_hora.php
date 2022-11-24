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
            $table->bigInteger('fecha_id')->unsigned();
            $table->foreign('fecha_id')->references('id')->on('fecha')->onDelete('cascade');

            $table->bigInteger('hora_id')->unsigned();
            $table->foreign('hora_id')->references('id')->on('hora')->onDelete('cascade');
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
