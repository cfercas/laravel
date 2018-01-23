@extends('plantilla')
@section('contenido')
  <div class="container">

    <form class="form-signin">
      <h2 class="form-signin-heading">Inicia Sesion de empleados</h2>
      <label for="inputEmail" class="sr-only">Email o usuario</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Contraseña</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <div class="checkbox">
        <label>
          <input type="checkbox" value="remember-me"> Recuerdame
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" onclick="">Iniciar</button>
    </form>

  </div>
@endsection
