@extends('plantilla.plantilla')
@section('contenido')

  @if (Auth::check() && Auth::user()-> type == 'Admin')

  <div class="post">
    <h2>Gestion de productos</h2>
    <p>Aqui podremos insertar, modificar y eliminar productos <br/>
    Además quiero poner botón de añadir cantidad de productos cuando tenga
    añadida la base de datos completamente con sus claves foraneas y relacciones</p>
    <a href="/private/productos" target="self"><input type="submit" Value="Productos"></a>
  </div>
  <div class="post">
    <h2>Gestion de usuarios</h2>
    <p>Aqui podremos insertar, modificar y eliminar empleados</p>
    <a href="/private/usuarios"><input type="submit" Value="Empleados"></a>
  </div>
  <div class="post">
    <h2>Gestion de empleados</h2>
    <p>Aqui podremos insertar, modificar y eliminar productos <br/>
    Además quiero poner botón de añadir cantidad de productos cuando tenga
    añadida la base de datos completamente con sus claves foraneas y relacciones</p>
    <a href="/empleados" target="self"><input type="submit" Value="Gestiones"></a>
  </div>
  <div class="post">
    <h2>Más gestiones</h2>
    <p>Aqui podremos insertar, modificar y eliminar productos <br/>
    Además quiero poner botón de añadir cantidad de productos cuando tenga
    añadida la base de datos completamente con sus claves foraneas y relacciones</p>
    <a href="#" target="self"><input type="submit" Value="Gestiones"></a>
  </div>
  <div class="post">
    <a href="/private/salir" target="self"><input type="submit" Value="Cerrar Sesión"></a>
  </div>
@elseif  (Auth::check() && Auth::user()-> type != 'Admin')
  @include('usuario.perfil')
@endif

@endsection
