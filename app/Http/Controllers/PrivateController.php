<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class PrivateController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
     $this->middleware('auth');
  }
  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
   public function index()
   {
     if (Auth::check() && Auth::user()-> confirmed == "1") {
       $usuario = auth::user();
       return view('private.gestion',compact('usuario'));

     }else{
       Auth::logout();
       return view('emails.confirmar_email');
     }

   }
   public function salir()
   {
     Auth::logout();
     return redirect('/home');
   }
}
