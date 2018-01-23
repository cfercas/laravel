<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('productos', function (Blueprint $table) {
          $table->increments('id');
          $table->string('titulo','50');
          $table->longText('descripcion','200');
          $table->text('foto')->nullable();
          $table->integer('id_tipo')->unsigned();
          $table->foreign('id_tipo')->references('id')->on('tipoProductos');
          $table->float('precio');
          $table->integer('cantidad')->default(0);
          $table->rememberToken();
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
        Schema::dropIfExists('productos');
    }
}
