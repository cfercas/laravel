<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bancarios extends Model
{
  protected $table = 'datosBancarios';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  //protected $primaryKey = ['id'];
  protected $fillable = ['tipoCuenta','titular','numTarjeta','cvv','caducidad'];

  /*public function user ()
  {
    return $this->belongsTo('User','id_usuario');
  }*/

}
