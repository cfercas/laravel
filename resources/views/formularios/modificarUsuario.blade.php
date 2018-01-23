@extends('plantilla.plantilla')

@section('contenido')
  <div class="post">
  <h2>Añade un nuevo usuario: </h2>
  @if ( isset($errors) )
    @foreach ($errors->all() as $error)
      <li style="color:#6F0120">{{ $error }}</li>
    @endforeach
  @endif
  <br/>
  <table>
      <tr>
        {!! Form::model($usuarios ,['method' => 'PATCH','route' => ['usuarios.update', $usuarios ->id]]) !!}
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
           <tr >
             <td colspan="3">{!! Form::submit('Enviar') !!}{!! Form::close() !!}</td>
             <td colspan="3">
               {!! Form::open(['method' => 'HEAD','route' => ['usuarios.index', $usuarios ],'style'=>'display:inline']) !!}
               {!! Form::submit('Volver', ['class' => 'btn btn-danger']) !!}
               {!! Form::close() !!}
             </td>
           </tr>

  </table>
  <input type="button" name="button" onclick="window.location.href='/private/usuarios'" value="Volver"/>

</div>
@endsection
