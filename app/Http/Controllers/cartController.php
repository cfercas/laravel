<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use App\Productos;

class cartController extends Controller
{
    public function __construct()
    {
      if (!Session::has('cart')) \Session::put('cart', array());
    }
    //Mostrar carrito
    public function mostrar()
    {
      $cart = \Session::get('cart');
      $total = $this->total();
      return view('Productos.carrito', compact('cart', 'total'));
    }

    //Añadir producto al carrito
    public function añadir(Productos $producto)
    {
      $cart = \Session::get('cart');
      $producto -> cantidad = 1;
      //el slug determinará la posicion en la lista del carrito
      $cart[$producto -> id] = $producto;
      //actulizar variable de sesion
      \Session::put('cart', $cart);
      //dd($cart);
      return redirect()->route('mostrar-carrito');
    }
    //Eliminar producto del carrito
    public function eliminar(Productos $producto)
    {
      $cart = \Session::get('cart');
      //eliminar el producto del array
      unset($cart[$producto -> id]);
      //actulizar variable de sesion
      \Session::put('cart', $cart);
      return redirect()->route('mostrar-carrito');
    }
    //Actualizar producto del carrito
    public function actualizar(Productos $producto, $cantidad)
    {
      $cart = \Session::get('cart');

      $cart[$producto -> id] -> cantidad = $cantidad;
      //dd($cantidad);
      //actulizar variable de sesion
      \Session::put('cart', $cart);
      return redirect()->route('mostrar-carrito');
    }
    //Vaciar carrito
    public function vaciar()
    {
      //borra todo lo que haya en el carrito
      $cart = \Session::forget('cart');
      return view('Productos.carrito', compact('cart'));
    }
    //Total productos
    private function total(){
      $cart = \Session::get('cart');
      $total = 0;
      foreach ($cart as $producto) {
        $total += $producto -> precio * $producto -> cantidad;
      }
      return $total;
    }




}
