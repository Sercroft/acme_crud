<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropietariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('propietarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cedula');
            $table->string('primer_nombre');
            $table->string('segundo_nombre');
            $table->string('apellidos');
            $table->string('direccion');
            $table->integer('telefono');
            $table->string('ciudad');
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
        Schema::dropIfExists('propietarios');
    }
}
