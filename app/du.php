<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class du extends Model
{
  protected $table = 'du';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  //protected $primaryKey = ['id'];
  protected $fillable = ['id_direccion','id_usuario'];
}
