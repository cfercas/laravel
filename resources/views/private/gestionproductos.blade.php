@extends('plantilla.plantilla')
@section('contenido')
  <div class="post">
    @if ( isset($errors) )
      @foreach ($errors->all() as $error)
        <li style="color:#6F0120">{{ $error }}</li>
      @endforeach
    @endif
    <br/>
  <h2>Añade un nuevo producto: </h2>
  <table>
      <tr>
        {!! Form::open(array('route' => 'productos.store','method'=>'POST','files' => 'true','enctype'=>'multipart/form-data')) !!}
                 <th>{!! Form::label('titulo','Nombre de Producto') !!}</th>
                 <th>{!! Form::label('tipo','Tipo de producto') !!}</th>
                 <th>{!! Form::label('precio','Precio') !!}</th>
                 <th>{!! Form::label('cantidad','Cantidad') !!}</th>

            </tr>
            <tr>
                 <td>{!! Form::text('titulo') !!}</td>
                 <!--<td> <select class="" id="id_tipo" name="id_tipo">
                 @foreach ($tipos as $tipo)
                   <option id="id_tipo" name="id_tipo">{{ $tipo -> id }} {{ $tipo -> tipo }}</option>
                 @endforeach
               </select> </td>-->
                 <td>
                   {!! Form::select('id_tipo', $list, $selected) !!}
                 </td>


                 <td>{!! Form::text('precio') !!}</td>
                 <td>{!! Form::text('cantidad') !!}</td>
               </tr>
               <tr>
                 <th colspan="4">{!! Form::label('descripcion','Descripcion') !!}</th>
               </tr>
               <tr>
                 <td colspan="4">{!! Form::text('descripcion') !!}</td>
               </tr>
               <tr>
                 <th>{!! Form::label('imagen','Foto del producto') !!}</th>
               </tr>
               <tr>
                 <td colspan="3">{!! Form::file('imagen') !!} {!! Form::hidden('foto') !!}</td>
                 <td>{!! Form::submit('Enviar') !!}</td>
               </tr>
        {!! Form::close() !!}

  </table>
  </div>
  <div class="post">
    <input style="float:right;width:" type="button" name="button" onclick="window.location.href='/private'" value="Volver"/>
    <div style="float:right;width:">
        {!! Form::open(['url' => '/private/productos/buscar', 'method' => 'GET','class'=>'btn btn-danger']) !!}
        {!! Form::submit('Buscar', ['class' => 'btn btn-danger']) !!}
    </div>
    <div style="float:right;width:400px">
      {!! Form::text('titulo', null, ['class' => 'btn btn-danger', 'placeholder' => 'Nombre del producto'])!!}
      {!! Form::close() !!}
    </div>
    <h1>Buscar Productos</h1>
  </div>
  <div class="post">
    <h1>Gestion de productos e inventario</h1>
    <table style="width:100%" >
      <caption>Productos de la tienda</caption>
      <tr>
        <th>Nombre del producto</th>
        <th>Descripción</th>
        <th>Tipo</th>
        <th>Precio</th>
        <th>Cantidad</th>
        <th>Modificar</th>
        <th>Eliminar</th>
      </tr>
        @foreach ($productos as $producto)
          <tr>
            <td>{{ $producto -> titulo}}</td>
            <td>{{ $producto -> descripcion}}</td>
            <td>{{ $producto -> id_tipo}}</td>
            <td>{{ $producto -> precio}}</td>
            <td>{{ $producto -> cantidad}}</td>
            <td><a href="{{ route('productos.edit', $producto -> id) }}"><img src={{ asset('imagenes/edit.ico') }} width='20' height='20' onclick="return modifi({{ $producto-> id }})"></a></td>
            <td>
              {!! Form::open(['method' => 'DELETE','route' => ['productos.destroy', $producto-> id ],'style'=>'display:inline']) !!}
              {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
              {!! Form::close() !!}

            </td>
          </tr>
        @endforeach
      </table>
  </div>

@endsection
