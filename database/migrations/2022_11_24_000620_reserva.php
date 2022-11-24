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
        Schema::create('reserva', function (Blueprint $table) {
            $table->id();
            $table->integer('numero_persona');

            $table->bigInteger('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');

            $table->bigInteger('menu_id')->unsigned();
            $table->foreign('menu_id')->references('id')->on('menu')->onDelete('cascade');

            $table->bigInteger('tarjeta_creadito_id')->unsigned();
            $table->foreign('tarjeta_creadito_id')->references('id')->on('creadit_card')->onDelete('cascade');

            $table->bigInteger('usuarionr_id')->unsigned();
            $table->foreign('usuarionr_id')->references('id')->on('usuarionr')->onDelete('cascade');

            $table->bigInteger('mesa_id')->unsigned();
            $table->foreign('mesa_id')->references('id')->on('mesa')->onDelete('cascade');

            $table->bigInteger('fecha_id')->unsigned();
            $table->foreign('fecha_id')->references('id')->on('fecha')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserva');
    }
};
