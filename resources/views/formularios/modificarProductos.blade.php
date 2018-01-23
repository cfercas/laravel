@extends('plantilla.plantilla')

@section('contenido')
  <div class="post">
    @if ( isset($errors) )
      @foreach ($errors->all() as $error)
        <li style="color:#6F0120">{{ $error }}</li>
      @endforeach
    @endif
    <br/>
  <h2>Modificar producto {{ $producto -> titulo }}: </h2>
  <table>
    <tr>
      {!! Form::model($producto ,['method' => 'PATCH','route' => ['productos.update', $producto ->id]]) !!}
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
        <td>{!! Form::select('id_tipo', $list, $selected) !!}</td>
        <td>{!! Form::text('precio') !!}</td>
        <td>{!! Form::text('cantidad') !!}</td>
      </tr>
      <tr><th colspan="4">{!! Form::label('descripcion','Descripcion') !!}</th></tr>
      <tr><td colspan="4">{!! Form::text('descripcion') !!}</td></tr>
      <tr><th>{!! Form::label('foto','Foto del producto') !!}</th></tr>
      <tr>
        <td colspan="3">{!! Form::file('foto') !!}</td>
        <td>{!! Form::submit('Enviar') !!}</td>
      </tr>
    {!! Form::close() !!}
    <input type="button" name="button" onclick="window.location.href='/private/productos'" value="Volver"/>

  </table>
  </div>

@endsection
