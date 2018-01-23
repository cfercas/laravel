<?php

namespace App\Http\Controllers;
use App\Empleados;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;
use App\Http\Controllers\Validator;
use Mail;


class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $empleados = DB::table('empleados')->orderBy('id','DESC')->paginate(6);

      //dd($paginando);
      return view('user', compact('empleados','empleadoss'));
    }

    public function buscar(Request $request)
    {

      //name creado el modelo empleado
      $empleados = Empleados::name($request-> get('name'))->orderBy('id','DESC')->paginate(6);
      return view('user', compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formularios.crearEmpleado');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //genera un nuemero aletorio
      $data = $request['confirmation_code'] = str_random(25);
      request()->validate([
          'name' => 'required|string|max:60',
          'nameUsuario' => 'required|string|max:15',
          'email' => 'required|email|unique:Empleados',
          'telefono' => 'required|digits:9',
          'password' => 'required|min:5',
      ]);
      $name = $request -> name;
      $correo = $request -> email;

      $empleados = Empleados::create([
        'name' => $request['name'],
        'nameUsuario' => $request['nameUsuario'],
        'email' => $request['email'],
        'telefono' => $request['telefono'],
        'password' => bcrypt($request['password']),
        'confirmation_code' => $request['confirmation_code']
      ]);

      /*Mail::send('emails.codigo_confirmacion', ['confirmation_code' => $data, 'email' => $correo, 'name' => $name], function($message) use ($correo) {
        $message->from('cristina.fdez.lp@gmail.com','Proyecto de Laravel - Cristina');
        $message->to($correo)->subject('Por favor confirma tu correo');
      });*/

      return redirect()->route('/');
    }
    /*public function verify($code){
      $empleados = Empleados::where('confirmation_code', $code)->first();
      if(!$empleados) return redirect ('/');
      $empleados -> confirmed = true;
      $empleados -> confirmation_code = null;
      $empleados -> save();

      return redirect('/home')->with('notification', 'Has confirmado correctamente tu correo!');
    }*/

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $empleados = Empleados::find($id);
      return view('user',compact('empleados'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $empleado = Empleados::find($id);
      return view('formularios.modificarEmpleado',compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      request()->validate([
        'name' => 'required',
        'nameUsuario' => 'required',
        'email' => 'required|email',
        'telefono' => 'required|digits:9',
        'password' => 'required|min:5',
      ]);
      Empleados::find($id)->update($request->all());
      return redirect()->route('empleados.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Empleados::findOrFail($id)->delete();
      return redirect()->route('empleados.index');
    }

}
