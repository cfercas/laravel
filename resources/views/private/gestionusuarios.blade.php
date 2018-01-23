@extends('plantilla.plantilla')
@section('contenido')
  <div class="post">
    @if ( isset($errors) )
      @foreach ($errors->all() as $error)
        <li style="color:#6F0120">{{ $error }}</li>
      @endforeach
    @endif
    <br/>
  <h2>Añade un nuevo usuario: </h2>
  <table>
      <tr>
        {!! Form::open(array('route' => 'usuarios.store','method'=>'POST')) !!}
                 <th>{!! Form::label('name','Nombre del Usuario') !!}</th>
                 <th>{!! Form::label('nameUsuario','Usuario') !!}</th>
                 <th>{!! Form::label('type','Rol') !!}</th>
                 <th>{!! Form::label('telefono','Telefono') !!}</th>
            </tr>
            <tr>
                 <td>{!! Form::text('name') !!}</td>
                 <td>{!! Form::text('nameUsuario') !!}</td>
                 <td>{!! Form::select('type', ['Usuario' => 'Cliente','Admin' => 'Administrador','Encargado' => 'Encargado']) !!}</td>
                 <td>{!! Form::text('telefono') !!}</td>
           </tr>
           <tr>
             <th colspan="3">{!! Form::label('email','Email') !!}</th>
             <th>{!! Form::label('password','Contraseña') !!}</th>
           </tr>
           <tr>
             <td colspan="3">{!! Form::text('email') !!}</td>
             <td>{!! Form::password('password') !!}</td>
           </tr>
           <tr ><td colspan="6">{!! Form::submit('Enviar') !!}</td></tr>
        {!! Form::close() !!}

  </table>
  </div>
  <div class="post">
    <input style="float:right;width:" type="button" name="button" onclick="window.location.href='/private'" value="Volver"/>
    <div style="float:right;width:">
        {!! Form::open(['url' => '/private/usuarios/buscar', 'method' => 'GET','class'=>'btn btn-danger']) !!}
        {!! Form::submit('Buscar', ['class' => 'btn btn-danger']) !!}
    </div>
    <div style="float:right;width:400px">
      {!! Form::text('name', null, ['class' => 'btn btn-danger', 'placeholder' => 'Nombre de Usuario'])!!}
      {!! Form::close() !!}
    </div>
  <h1>Buscar usuarios</h1>
  </div>
  <div class="post">
    <h1>Gestion de usuarios</h1>
    <table style="width:100%" >
      <caption>Usuarios de la tienda</caption>
      <tr>
        <th>Nombre del usuario</th>
        <th>Usuario</th>
        <th>Tipo</th>
        <th>Email</th>
        <th>telefono</th>
        <th>Modificar</th>
        <th>Eliminar</th>
      </tr>
        @foreach ($usuarios as $usuario)
          <tr>
            <td>{{ $usuario -> name}}</td>
            <td>{{ $usuario -> nameUsuario}}</td>
            <td>{{ $usuario -> type}}</td>
            <td>{{ $usuario -> email}}</td>
            <td>{{ $usuario -> telefono}}</td>
            <td><a href="{{ route('usuarios.edit', $usuario -> id) }}"><img src={{ asset('imagenes/edit.ico') }} width='20' height='20' onclick=""></a></td>
            <td>
              {!! Form::open(['method' => 'DELETE','route' => ['usuarios.destroy', $usuario-> id ],'style'=>'display:inline']) !!}
              {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
              {!! Form::close() !!}

            </td>
          </tr>
        @endforeach
      </table>
  </div>

@endsection
