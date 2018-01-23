@extends('plantilla.plantilla')
@section('contenido')
  <div class="post">
  <!-- Main -->
  	<div id="main">
  		<div class="inner">
  			<header>
  				<h1>Tienda de productos online<br />
  				</h1>
  				<p>Muestra todos los productos de la tienda</p>
  			</header>
  			<section class="tiles">
          @foreach ($productos as $producto)
  				<article class="style5">
              <span class="image" style="height:270px">
  							<img src="{{ $producto -> foto }}" alt="" />
  						</span>
  						<a href="{{ route('productos.show', $producto -> id) }}">
  							<h2>{{ $producto -> titulo }}</h2>
  							<div class="content">
                  <p>{{ $producto -> descripcion }}</p>
  							</div>
  						</a>
              <br/>
              <div class="content" style="float:right">
                <a href="#"><img src={{ asset('imagenes/carrito.ico') }} width='30' height='30' style="margin-right:10px" onclick=""></a>
                <a href="#"><img src={{ asset('imagenes/corazon.ico') }} width='30' height='30' style="margin-right:10px" onclick=""></a>
              </div>
              <h4>Precio: {{ $producto -> precio }} € </h4>
  					</article>
            @endforeach
          </div>
        </div>
      </div>

@endsection
