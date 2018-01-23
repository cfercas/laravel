<?php

namespace App\Http\Controllers;

use App\User;
//use App\Users;
use Illuminate\Http\Request;
use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Mail;


class UserController extends Controller
{
    public function __construct()
    {
       //$this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $usuarios = DB::table('users')->get();
      //$list = array('Cliente','Encargado','Admin');
      //$selected = array();
      return view('private.gestionusuarios', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function buscar(Request $request)
     {

       //name creado el modelo empleado
       $usuarios = User::name($request->get('name'))->get();
       return view('private.gestionusuarios', compact('usuarios'));
     }


    public function create()
    {
        return view('private.gestionusuarios');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      request()->validate([
          'name' => 'required|string|max:60',
          'nameUsuario' => 'required|string|max:15',
          'type' => 'required',
          'email' => 'required|email|unique:users',
          'telefono' => 'required|digits:9',
          'password' => 'required|min:5',
      ]);
      User::create($request->all());
      return redirect()->route('usuarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
     //registro de usuarios automatico
     public function registrar(Request $request)
     {
       //dd($request);

       request()->validate([
           'name' => 'required|string|max:60',
           'nameUsuario' => 'required|string|max:15',
           'type' => 'required',
           'email' => 'required|email|unique:users',
           'telefono' => 'required|digits:9',
           'password' => 'required|min:5',
           //'g-recaptcha-response' => 'required|captcha',
       ]);
       $data = $request['confirmation_code'] = str_random(25);
       $name = $request-> name;
       $correo = $request-> email;

       User::create([
           'name' => $request['name'],
           'nameUsuario' => $request['nameUsuario'],
           'type' => $request['type'],
           'email' => $request['email'],
           'telefono' => $request['telefono'],
           'password' => bcrypt($request['password']),
           'confirmation_code' => $data,
           'confirmed' => false,
       ]);
       $datos = [
         'email' => $request['email'],
         'password' => $request['password'],
         ];
        //Si existe el email y la contraseña se evia el correo
        //if (Auth::attempt($datos)) {
          //envia un email al correo esperando verificacion
          Mail::send('emails.codigo_confirmacion', ['confirmation_code' => $data, 'email' => $correo, 'name' => $name], function($message) use ($correo) {
            $message->from('cristina.fdez.lp@gmail.com','Proyecto de Laravel - Cristina');
            $message->to($correo)->subject('Por favor confirma tu correo');
          });
          //Auth::check();
          return view('auth.login');
        //}
    }
    public function verify($code){
      //verifica que el email
      $usuario = User::where('confirmation_code', $code)->first();
      if(!$usuario) return redirect ('/');
      $usuario -> confirmed = true;
      $usuario -> confirmation_code = null;
      $usuario -> save();

      return redirect('/home')->with('notification', 'Has confirmado correctamente tu correo!');
    }
    public function show($id)
    {
      $usuarios = User::find($id);
      return view('users',compact('usuarios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id) //User $user
    {
      $usuarios = User::find($id);
      return view('formularios.modificarUsuario',compact('usuarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      request()->validate([
        'name' => 'required|string|max:60',
        'nameUsuario' => 'required|string|max:15',
        'type' => 'required',
        'email' => 'required|email',
        'telefono' => 'required|digits:9',
        'password' => 'required|min:5',
      ]);
      User::find($id)->update($request->all());
      return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      User::findOrFail($id)->delete();
      return redirect()->route('usuarios.index');
    }
    public function perfil(Request $request, $usuario){
      if (\Request::file('foto'))
      {
            //aloja el valor de la imagen en la variable
            $file = $request->file('foto');
            //defiendo ruta donde guardar y nuevo nombre para el archivo
            $name = time() . '.' . $file->getClientOriginalName();
            $path = '/perfiles';
            //Guardando en el sistema de ficheros
            $file->storeAs($path, $name);
            //variable para guardar ruta en la db
            $foto = '/Future/images/perfiles'.'/'.$name;
      }
    $usuario = auth::user();
    $usuario -> foto = $foto;
    $usuario -> save();
    return view('private.gestion', compact('usuario'));

    }
}
