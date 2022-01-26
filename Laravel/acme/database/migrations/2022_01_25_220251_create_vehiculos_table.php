<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('placa');
            $table->string('color');
            $table->string('marca');
            $table->string('tipo_vehiculo');
            $table->unsignedInteger('conductor_id');
            $table->unsignedInteger('propietario_id');
            $table->foreign('conductor_id')->references('id')->on('conductors')->onDelete('cascade');
            $table->foreign('propietario_id')->references('id')->on('propietarios')->onDelete('cascade');
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
        Schema::dropIfExists('vehiculos');
    }
}
