<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create('bu', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('banco')->unsigned();
            $table->foreign('banco')->references('id')->on('datosBancarios');
            $table->integer('usuario')->unsigned();
            $table->foreign('usuario')->references('id')->on('users');
            $table->timestamps();
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bu');
    }
}
