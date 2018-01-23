@extends('plantilla.plantilla')
@section('contenido')
  <div class="post">
    <div id="main">
      <div class="inner">
        <h1>{{ $producto -> titulo }}</h1>
        <span class="image main"><img src="{{ $producto -> foto }}" alt="" style="height:400px;width:auto" /></span>
        <div class="inner" style="float:right">
          <a href="{{ route('añadir-carrito', $producto -> id ) }}"><img src={{ asset('imagenes/carrito.ico') }} width='30' height='30' style="margin-right:10px" onclick=""></a>
          <a href="#"><img src={{ asset('imagenes/corazon.ico') }} width='30' height='30' style="margin-right:70px" onclick=""></a>
          <br/>
        </div>
        <h3>{{ $producto -> precio }} € </h3><br/>

        <p><b>{{ $producto -> descripcion }}</b></p>
        <p>En principio este boton lo he creado para que vaya acumulado productos en el carrito</p>
        {!! Form::open(['method' => 'DELETE','route' => ['productos.show', $producto-> id ],'style'=>'display:inline']) !!}
        {!! Form::submit('Añadir al carrito', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}

      </div>
    </div>
  </div>

@endsection
