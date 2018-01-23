@extends('plantilla.plantilla')

@section('contenido')
  <div class="post">
    @if ( isset($errors) )
      @foreach ($errors->all() as $error)
        <li style="color:#6F0120">{{ $error }}</li>
      @endforeach
    @endif
    <br/>
  <h2>Para registrarte introduce los siguientes datos: </h2>
  <table>
      <tr>
        {!! Form::open(array('route' => 'registrar-usuario','method'=>'POST')) !!}

        <thead>{!! Form::label('name','Nombre del Usuario') !!}</thead>
        <tdbody>{!! Form::text('name') !!}</tdbody>
      </tr>
      <tr>
        <thead>{!! Form::label('nameUsuario','Usuario') !!}</thead>
        <tdbody>{!! Form::text('nameUsuario') !!}</tdbody>
      </tr>
      <tr>
        <tdbody>{!! Form::hidden('type', 'Usuario') !!}</tdbody>
      </tr>
      <tr>
        <thead>{!! Form::label('telefono','Telefono') !!}</thead>
        <tdbody>{!! Form::text('telefono') !!}</tdbody>
      </tr>
      <tr>
        <thead>{!! Form::label('email','Email') !!}</thead>
        <tdbody>{!! Form::text('email') !!}</tdbody>
      </tr>
      <tr>
        <thead>{!! Form::label('password','Contraseña') !!}</thead>
        <tdbody>{!! Form::password('password') !!}</tdbody>
      </tr>
      <tr>
        <p></p>
        <div class="">
          {!! NoCaptcha::display() !!}
        </div>

      </tr>
      <tr>
          <br/>
        <tdbody >{!! Form::submit('Enviar') !!}</tdbody>
      </tr>
        {!! Form::close() !!}

  </table>
  </div>
@endsection
