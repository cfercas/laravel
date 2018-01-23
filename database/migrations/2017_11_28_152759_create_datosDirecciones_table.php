<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosDireccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datosDirecciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_usuario')->unsigned();
            //$table->foreign('id_usuario')->references('id')->on('Users');
            $table->string('direccion','50');
            $table->integer('codigoPostal');
            $table->string('localidad','30');
            $table->string('provincia','30');
            $table->string('pais','20');
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
        Schema::dropIfExists('datosDirecciones');
    }
}
