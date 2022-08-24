<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabitacionesTable extends Migration
{
    /**
     * Run the migrations.
     *git 
     * @return void
     */
    public function up()
    {
        Schema::create('habitacions', function (Blueprint $table) {
            $table->id();
            $table->string("caracteristicas");
            $table->integer("numeroDeHabitacion");
            $table->double("precio");
            $table->unsignedBigInteger("tipoDeHabitacion");
            $table->foreign('tipoDeHabitacion')->references('id')->on('tipos');
            $table->boolean("estado")->default(1);
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
        Schema::dropIfExists('habitaciones');
    }
}
