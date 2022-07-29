<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaracteristicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caracteristicas', function (Blueprint $table) {
            $table->id();
            $table->integer("aire_acondicionado");
            $table->integer("baños");
            $table->integer("camas");
            $table->integer("controles");
            $table->integer("televisores");
            $table->unsignedBigInteger('habitacion_id');
            $table->foreign('habitacion_id')->references('id')->on('habitacions');
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
        Schema::dropIfExists('caracteristicas');
    }
}
