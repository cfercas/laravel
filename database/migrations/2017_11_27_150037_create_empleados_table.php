<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
      Schema::create('empleados', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name','50');
          $table->string('nameUsuario','30')->unique();
          $table->string('email','50')->unique();
          $table->string('telefono');
          $table->string('password');
          $table->boolean('confirmed')->default(0);
          $table->string('confirmation_code')->nullable();
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
      Schema::dropIfExists('empleados');
  }
}
