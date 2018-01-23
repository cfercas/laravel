<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\TipoProductos;

class Productos extends Model
{
  protected $table = 'productos';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  //protected $primaryKey = ['id'];
  protected $fillable = ['titulo','descripcion','foto','id_tipo','precio','cantidad'];
  public function tipos ()
  {
    return $this->belongsTo('TipoProductos','id');
  }

  public function scopeTitulo($query, $titulo)
  {
    //Buscar nombre empleado en la base de datos y devuelve el resultado
    if (trim($titulo) != "")
    {
       return $query->where( 'titulo' , 'LIKE', "%$titulo%");
    }
  }
}
