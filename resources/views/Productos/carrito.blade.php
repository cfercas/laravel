@extends('plantilla.plantilla')
@section('contenido')
  <div class="post">
    <h1>Carrito de la compra</h1>
    @if (count($cart))
      <table>
        <tr>
          <th>Imagen</th>
          <th>Producto</th>
          <th>Precio</th>
          <th>Cantidad</th>
          <th>Subtotal</th>

          <th>Quitar</th>
        </tr>

      @foreach ($cart as $producto)
        @if ($producto -> id)
          <tr>
            <td> <img src="{{ $producto -> foto }}" style="height:30px;width:30px" alt=""> </td>
            <td>{{ $producto -> titulo }}</td>
            <td>{{ number_format($producto -> precio,2) }} €</td>
            <td>
              <input type="number" min="1" max="100"
                value="{{ $producto -> cantidad }}"
                id="producto_{{ $producto -> id }}"
                >
                <a href="#"
                    class="update-producto"
                      data-href="{{ route('actualizar-carrito', array($producto -> id, "")) }}"
                      data-id="{{ $producto -> id }}"
                >
                  <img src={{ asset('imagenes/1.ico') }} width='20' height='20' onclick="">
                </a>
            </td>
            <td>{{ number_format($producto -> precio * $producto -> cantidad,2) }} €</td>
    
            <td><a href="{{ route('eliminar-carrito', $producto -> id) }}"><img src={{ asset('imagenes/delete.ico') }} width='20' height='20' onclick=""></a></td>
          </tr>
        @endif
      @endforeach
      </table>
      <h3>
        <span> Total: ${{ number_format($total,2) }} </span>
      </h3>
      <a href="{{ url('/productos/mostrar') }}"> <input type="button" name="" value="Seguir Comprando"/> </a>
      <a href="#"> <input type="button" name="" value="Comprar"/> </a>
      <a href="{{ route('vaciar-carrito') }}"> <input type="button" name="" value="Vaciar el carrito"/> </a>
      <br/>
      <p></p>
    @else
      <p style="color:#6F0120;text-align:center;font-size:23px">No hay productos en el carrito</p>
    @endif

  </div>
@endsection
