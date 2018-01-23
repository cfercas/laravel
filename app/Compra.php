<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
  protected $table = 'compra';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  //protected $primaryKey = ['id'];
  protected $fillable = ['producto'];
}
