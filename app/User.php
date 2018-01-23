<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $fillable = [
        'name', 'nameUsuario','type','email','telefono','foto','password','confirmation_code',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
     /*public function tipos ()
     {
       return $this->belongsTo('Bancarios','id');
     }*/

      protected $hidden = [
          'password', 'remember_token',
      ];
      public function scopeName($query, $name)
      {
        //Buscar nombre empleado en la base de datos y devuelve el resultado
        if (trim($name) != "")
        {
           return $query->where( 'name' , 'LIKE', "%$name%");
        }
      }
}
