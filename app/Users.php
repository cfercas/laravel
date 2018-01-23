<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Users extends Model
{
  protected $table = 'empleados';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  //protected $primaryKey = ['id'];
  protected $fillable = ['name','nameUsuario','email','telefono','password'];

}
