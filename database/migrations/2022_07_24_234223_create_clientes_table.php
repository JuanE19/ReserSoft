<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('NombreCompleto', 50);
            $table->string('Documento', 20)->unique();
            $table->string('Correo', 50)->unique();
            $table->string('Telefono', 20);
            $table->string('Direccion', 20);
            $table->boolean('Estado')->nullable();
            $table->unsignedBigInteger('documento_id');
            $table->foreign('documento_id')->references('id')->on('tipo_documentos');
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
        Schema::dropIfExists('clientes');
    }
}
