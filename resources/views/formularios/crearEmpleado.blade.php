@extends('plantilla.plantilla')

@section('contenido')
  <div class="post">
    @if ( isset($errors) )
      @foreach ($errors->all() as $error)
        <li style="color:#6F0120">{{ $error }}</li>
      @endforeach
    @endif
    <br/>
    <h1>Formulario para empleados</h1>
     {!! Form::open(array('route' => 'empleados.store','method'=>'POST')) !!}
        {!! Form::label('name','Nombre de Empleado') !!}
        {!! Form::text('name') !!}
        {!! Form::label('nameUsuario','Nombre de usuario') !!}
        {!! Form::text('nameUsuario') !!}
        {!! Form::label('email','Email') !!}
        {!! Form::text('email') !!}
        {!! Form::label('telefono','Telefono') !!}
        {!! Form::text('telefono') !!}
        {!! Form::label('contraseña','Escribe tu contraseña') !!}
        {!! Form::password('password') !!}
        {!! Form::label('foto','Inserta tu foto de usuario') !!}
        {!! Form::submit('Enviar') !!}
       {!! Form::close() !!}

        <br/>
        <input type="button" name="button" onclick="window.location.href='/empleados'" value="Volver"/>
        <p></p>
  </div>

@endsection
