<?php

namespace App\Http\Controllers;

use App\Productos;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;
use \Illuminate\Support\Facades\Input;
use App\Http\Controllers\Validator;
use App\Http\Controllers\Controller;
use App\TipoProductos;
//use App\Http\Controllers\Input;
use Storage;
use File;




class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function index()
    {
      $productos = DB::table('Productos')->get();
      return view('productos.mostrar', compact('productos'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $productos = DB::table('Productos')->get();
      $tipos = DB::table('TipoProductos')->get();
      $list = TipoProductos::pluck('tipo','id')->all();
      $selected = array();
      return view('private.gestionproductos', compact('productos','tipos','list','selected'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function buscar(Request $request)
     {
       //name creado el modelo empleado
       $tipos = DB::table('TipoProductos')->get();
       $list = TipoProductos::pluck('tipo','id')->all();
       $selected = array();
       $productos = Productos::titulo($request->get('titulo'))->get();
       return view('private.gestionproductos', compact('productos','tipos','list','selected'));
     }

     public function mostrar()
     {
       $productos = DB::table('Productos')->get();
       return view('productos.mostrar', compact('productos'));
     }
     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
    public function create()
    {
        return view('formularios.gestionProductos');
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
          'titulo' => 'required|string|max:60',
          'descripcion' => 'required|string|max:500',
          'id_tipo' => 'required',
          'imagen' => 'image',
          'precio' => 'required',
          'cantidad' => 'required|numeric|max:2000',
      ]);

      if (\Request::file('imagen'))
      {
            //aloja el valor de la imagen en la variable
            $file = $request->file('imagen');
            //defiendo ruta donde guardar y nuevo nombre para el archivo
            $name = time() . '.' . $file->getClientOriginalName();
            $path = '/Productos';
            //Guardando en el sistema de ficheros
            $file->storeAs($path, $name);
            //variable para guardar ruta en la db
            $foto = '/Future/images/productos'.'/'.$name;
      }
       
       Productos::create([
         'titulo' => $request['titulo'],
         'descripcion' => $request['descripcion'],
         'id_tipo' => $request['id_tipo'],
         'foto' => $foto,
         'precio' => $request['precio'],
         'cantidad' => $request['cantidad'],
       ]);

       return redirect()->route('productos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show($id) //Productos $productos
    {
      $producto = Productos::find($id);
      return view('Productos.detalle',compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $producto = Productos::find($id);
      $tipos = DB::table('TipoProductos')->get();
      $list = TipoProductos::pluck('tipo','id')->all();
      $selected = array();
      return view('formularios.modificarProductos',compact('producto','tipos','list','selected'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) //Productos $productos
    {
      request()->validate([
          'titulo' => 'required',
          'descripcion' => 'required',
          'id_tipo' => 'required',
          'precio' => 'required',
          'cantidad' => 'required',
      ]);
      Productos::find($id)->update($request->all());
      return redirect()->route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Productos::findOrFail($id)->delete();
      return redirect()->route('productos.index');
    }
}
