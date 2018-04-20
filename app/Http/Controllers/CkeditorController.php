<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use App\Articulos;
use \Illuminate\Support\Facades\DB;
use \Illuminate\Support\Facades\Input;
use App\Http\Controllers\Validator;
use App\Http\Controllers\Controller;


class CkeditorController extends Controller
{
    //

    public function index(){
      $articulos = DB::table('Articulos')->get();
      return view('concretos.articulos', compact('articulos'));
    }
    public function guardar(Request $request){
      request()->validate([
          'ckeditor' => 'required',
      ]);
      $articulo = $request -> input('ckeditor');
      //$time = time();
      //dd($time);

      Articulos::create([
        'articulo' => $request['ckeditor'],
      ]);
      return view('home');
    }
}
