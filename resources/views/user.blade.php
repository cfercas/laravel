@extends('plantilla.plantilla')
@section('contenido')
  <div class="post">
    <h1>Gestion de Empleados</h1>
    <input type="button" name="button" onclick="window.location.href='/empleados/create'" value="Nuevo usuario"/>
    <div style="float:right;width:">
        {!! Form::open(['url' => '/empleados/buscar', 'method' => 'GET','class'=>'btn btn-danger']) !!}
        {!! Form::submit('Buscar', ['class' => 'btn btn-danger']) !!}
    </div>
    <div style="float:right;width:400px">
      {!! Form::text('name', null, ['class' => 'btn btn-danger', 'placeholder' => 'Nombre de Usuario'])!!}
      {!! Form::close() !!}
    </div>
    <br/>
  </div>
  <div class="post">
    <h1>Empleados - tabla para practicar</h1>
    <h2>Aprendiendo Laravel</h2>
    <h5>Ideas de proyecto</h5>
    <p>En esta vista quiero crear una lista de usuarios donde ademas los pueda elimninar
      y modificar. Más adelante esta vista sera privada y solo podrán acceder a través del
      login el administrador del sitio web a través de una ruta especifica /home/mantenimiento <br/>
      Para pasar los valores de los usuarios a esta vista hay que especificarle al controlador los
      parametros que queremos pasarle en nuestro caso en el controlador especificaremos que esos datos vienen
      de la base de datos y los añadiremos a return view('nombre de la vista','parametros de los usuarios')<br/>
      e($valor): nos sirve para escapar el valor de una variable a html y que en ella no puedan escribir por
      ejemplo código javascript, aunque estos prblemas de seguridad tambien se corrigen con el motor de plantillas
      de blade
    </p>
    <h1>Lista de Empleados</h1>

    <table style="width:100%" >
      @if ( isset($empleados) && count($empleados) > 0 )
      <caption>Empleados de la tienda</caption>
      <tr>
        <th>Nombre</th>
        <th>Nombre de usuario</th>
        <th>Email</th>
        <th>Teléfono</th>
        <th>Modificar</th>
        <th>Eliminar</th>
      </tr>
        @foreach ($empleados as $empleado)
          <tr id="{{$empleado-> name}}"
           onmouseover="this.style.backgroundColor='#E3FCC0'" onmouseout="this.style.backgroundColor='white'">
            <td>{{ $empleado -> name}}</td>
            <td>{{ $empleado -> nameUsuario}}</td>
            <td>{{ $empleado -> email}}</td>
            <td>{{ $empleado -> telefono}}</td>
            <td><a href="{{ route('empleados.edit',$empleado-> id) }}"><img src={{ asset('imagenes/edit.ico') }} width='20' height='20' onclick="return modifi({{ $empleado-> id }})"></a></td>
            <td>
              {!! Form::open(['method' => 'DELETE','route' => ['empleados.destroy', $empleado-> id ],'style'=>'display:inline']) !!}
              {!! Form::submit('Delete', ['class' => 'btn btn-danger'], ['onClick'=> 'elimi({{ $empleado-> id }})']) !!}
              {!! Form::close() !!}

            </td>
          </tr>
        @endforeach
      @else

        <b><p style="color:#6F0120;font-size:20">***No existe ningun usuario a partir de esa busqueda</p></b>
      @endif
      <tr>

      </tr>
    </table>

      <ul class="actions pagination">
        <li>{!! $empleados->links() !!}</li>
      </ul>



</div>
@endsection
