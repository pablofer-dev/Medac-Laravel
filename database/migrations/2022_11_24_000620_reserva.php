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
            $table->bigInteger('users_id')->unsigned()->nullable();
            $table->bigInteger('menu_id')->unsigned();
            $table->foreign('menu_id')->references('id')->on('menu')->onDelete('cascade');
            $table->string('tarjeta_creadito_id')->nullable();
            $table->bigInteger('usuarionr_id')->unsigned()->nullable();
            $table->bigInteger('mesa_id')->unsigned();
            $table->foreign('mesa_id')->references('id')->on('mesa')->onDelete('cascade');
            $table->date('fecha_fk');
            $table->foreign('fecha_fk')->references('fecha')->on('fecha')->onDelete('cascade');
            $table->unsignedBigInteger('hora_id');
            $table->foreign('hora_id')->references('id')->on('hora')->onDelete('cascade');
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
        Schema::dropIfExists('reserva');
    }
};
