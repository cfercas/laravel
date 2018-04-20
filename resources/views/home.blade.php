@extends('plantilla.plantilla')

  @section('contenido')
    <div class="post">
      
          <form action="/send" class="form-signin" method="post">
              {{ csrf_field() }}
              <h2 class="form-signin-heading">Envia un mensaje como Telegram Bot</h2>
              <img class="icons" src="{{asset('Future\images\telegram.png')}}" >
              <label for="inputText" class="sr-only">Mensaje</label>
              <textarea name="message" type="text" id="inputText" class="form-control" placeholder="Añade aqui tu mensaje" required autofocus></textarea>
              <br />
              <button class="btn btn-lg btn-primary btn-block" type="submit">Enviar</button>
              <a class="button"  href="https://t.me/joinchat/F17apA9XAzHFt69NOFXiHg" target="_blank">Unete a nuestro grupo de telegram</a><br/>

              <p>***Para poder unirte al grupo de telegram tienes que hacer click desde un smartphone o tener instalada la aplicacion Telegram Desktop</p>
          </form>
          <br />
          @if(Session::has('message'))
              <div class="alert alert-{{ Session::get('status') }} status-box">
                  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  {{ Session::get('message') }}
              </div>
          @endif

    </div>
    <div class="post">


    </div>
    <div class="post">
      <h1>Ideas para el proyecto</h1>
      <p>Voy a crear una tienda de productos con una pagina de inicio, que los usuarios se puedan registrar,
       e iniciar sesion, que puedan hacer la lista de la compra, antes de registrarse e introducir los datos
      personales, tambien quiero que tenga</p>
      <ul>
        <li>Mantenimiento de empleados CRUD, solo administrador o encargado</li>
        <li>Mantenimiento de productos, eliminar, crear añadir cantidades </li>
        <li>un editor de texto para añadir articulos en la pagina principal</li>
      </ul>
      <p>Corregir error en archivo composer.json linea 15, no puede haber dos archivos iguales no me dejar instalar nuevo paquetes</p>
      <p>rechapcha -> tengo claves en .env y script y contenedor en plantilla y en formularios.registrarse mirar como validar y funcion del controlador</p>
    </div>
    <div class="post">
      <h1>Instrucciones</h1>
        <h4><b>Tengo 3 CRUD:</b></h4>
        <p><b>Empleados: </b>fue la primera tabla que cree era solo de ejemplo, será borrada se puede acceder a ella a
           traves del menu de inicio en la pestaña Empleados</p>
        <p><b>Un CRUD de usuarios y de productos:</b> Estas estan todavia en producción debido a relaciones entre
          tablas que ire modificando según las necesidades de proyecto. A estas dos podemos acceder si iniciamos
          sesión en la barra de inicio, y logueandonos con un usuario existente como por ejemplo <strong> cristinita@gmail.com</strong>
          con contraseña <strong>saturno </strong><br/>
          Una vez que un usuario inicie ya puede ver los CRUD de productos y usuarios. Para la tabla productos estoy intentando que se pueda
          insertar un archivo y que este se guarde de manera local dentro de la estructura de laravel, en caso es la ruta en la ruta publica Public_Pacth()
          y dentro de aqui en la carpeta /Future/images/imaganes y el nombre de la nueva ruta en la base de datos, ahora mismo esto no está muy afinado,
          pero esta en proceso
        </p>
        <p>Para cerrar sesion una vez abierta</p>
        <p>Tengo creadas las <b>migraciones </b>para todas mis tablas, los <b>seeder</b> con un par de datos para ver los cambios y el funcionamiento de
          la aplicación y los modelos, aun me falta trabajar un poco las relacciones entre ellas utilizando el Eloquet ORM de Laravel (hasMany, hasOne, etc)
        </p>
        <p>
          He ultizado en mis routas resource para acortar el codigo en el fichero routes/web.php.<br/>
          Para ver todas mi rutas ejecuta el siguiente comando en la consola: <strong>php artisan route:list</strong>
        </p>
    </div>




  @endsection
