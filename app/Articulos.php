<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulos extends Model
{
  protected $table = 'articulos';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  //protected $primaryKey = ['id'];
  protected $fillable = ['articulo'];

  /*public function user ()
  {
    return $this->belongsTo('User','id_usuario');
  }*/
}
