<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosBancariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datosBancarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_usuario')->unsigned();
            //$table->foreign('id_usuario')->references('id')->on('Users');
            $table->string('tipoCuenta');
            $table->string('titular','50');
            $table->string('numTarjeta','30');
            $table->integer('cvv')->unsigned();
            $table->integer('caducidad')->unsigned();
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
        Schema::dropIfExists('datosBancarios');
    }
}
