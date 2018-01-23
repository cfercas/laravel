<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bu extends Model
{
  protected $table = 'bu';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  //protected $primaryKey = ['id'];
  protected $fillable = ['id_banco','id_usuario'];
}
