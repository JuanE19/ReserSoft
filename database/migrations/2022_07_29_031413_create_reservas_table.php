<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->string("apellido");
            $table->integer("cantidadDePersonas");
            $table->dateTime("fechaDeIngreso");
            $table->dateTime("fechaDeSalida");
            // $table->unsignedBigInteger('habitacion_id');
            // $table->foreign('habitacion_id')->references('id')->on('habitacions');
            
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
        Schema::dropIfExists('reservas');
    }
}
