<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direcciones extends Model
{
  protected $table = 'datosDirecciones';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  //protected $primaryKey = ['id'];
  protected $fillable = ['direccion','codigoPostal','localidad','provincia','pais'];
}
