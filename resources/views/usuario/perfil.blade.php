
  <div class="post">
    <h1>Bienvenido/a {{Auth::user()->name.' con identificador: '.Auth::user()->id}}</h1>
    <h2>Datos del usuario</h2>
    <div class="">
      <img  class="circular" src="{{ $usuario -> foto }}" alt=""/>

    </div>
      {!! Form::open(array('route' => ['perfil-usuario', auth::user() ],'method'=>'POST', 'files' => 'true','enctype'=>'multipart/form-data')) !!}
        {!! Form::label('foto','Foto de Perfil') !!}
        {!! Form::file('foto') !!}
        {!! Form::submit('Enviar') !!}
    {!! Form::close() !!}
    </form>

    <table>
      <tr><td>{{ $usuario -> nameUsuario }}</td></tr>
      <tr><td>{{ $usuario -> type }}</td></tr>
      <tr><td>{{ $usuario -> email }}</td></tr>
      <tr><td>{{ $usuario -> telefono }}</td></tr>
    </table>
  </div>
