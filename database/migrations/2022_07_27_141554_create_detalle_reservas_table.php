<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_reservas', function (Blueprint $table) {
            $table->id();
            $table->integer("cantidadDePersonas");
            $table->datetime("FechaDeIngreso");
            $table->datetime("FechaDeSalida");
            $table->double("precio");
            $table->string("TipoDeHabitacion");
            $table->unsignedBigInteger('reserva_id');
            $table->foreign('reserva_id')->references('id')->on('_reservas');
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
        Schema::dropIfExists('detalle_reservas');
    }
}
