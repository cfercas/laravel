<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoProductos extends Model
{
  protected $table = 'TipoProductos';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  //protected $primaryKey = ['id'];
  protected $fillable = ['tipo'];
  public function productos ()
  {
    return $this->hasOne('Producto','id');
  }
}
