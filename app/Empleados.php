<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Empleados;
use Illuminate\Http\Request;



class Empleados extends Model
{
  protected $table = 'empleados';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  //protected $primaryKey = ['id'];
  protected $fillable = ['name','nameUsuario','email','telefono','password','confirmation_code'];

  public function scopeName($query, $name)
  {
    //Buscar nombre empleado en la base de datos y devuelve el resultado
    if (trim($name) != "")
    {
       return $query->where( 'name' , 'LIKE', "%$name%");
    }
  }

}
