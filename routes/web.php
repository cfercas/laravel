<?php
use App\Productos;

/**/
Route::get('/','homeController@index');
Route::get('/home','homeController@index');
Route::get('/empleados/create','EmpleadosController@create');
Route::get('/empleados/buscar','EmpleadosController@buscar');
Route::resource('/empleados','EmpleadosController');

Route::get('/private/productos/buscar','ProductosController@buscar');
Route::get('/private/usuarios/buscar','UserController@buscar');
Route::resource('/private/productos','ProductosController');
Route::resource('/private/usuarios','UserController');

Auth::routes();


Route::get('/productos/mostrar', 'ProductosController@mostrar');
Route::get('/private', 'PrivateController@index')->name('private');
Route::get('/private/salir', 'PrivateController@salir');

//ruta para la verificacion de E-mail
Route::get('/verificar/email/{code}', 'UserController@verify');

Route::get('/registro', function () {
    return view('formularios.registrarse');
});
Route::post('/registrar/nuevo', [
    'as' => 'registrar-usuario',
    'uses' => 'UserController@registrar'
]);
//ruta subir foto de perfil
Route::post('/privado/usuario/perfil/{id}', [
    'as' => 'perfil-usuario',
    'uses' => 'UserController@perfil'
]);


//Rutas para el carrito ------------------------------
Route::bind('productos', function($slug)
{
  //esta ruta busca en el modelo productos donde id es igual al slug que se le pase
  //para usarla para gestionar los productos del carrito
  return Productos::where('id', $slug)->first();
});

Route::get('cart/mostrar', [
    'as' => 'mostrar-carrito',
    'uses' => 'cartController@mostrar'
]);

Route::get('cart/add/{producto}', [
    'as' => 'añadir-carrito',
    'uses' => 'cartController@añadir'
]);
Route::get('cart/delete/{producto}', [
    'as' => 'eliminar-carrito',
    'uses' => 'cartController@eliminar'
]);
Route::get('cart/trash', [
    'as' => 'vaciar-carrito',
    'uses' => 'cartController@vaciar'
]);
Route::get('cart/update/{producto}/{cantidad}', [
    'as' => 'actualizar-carrito',
    'uses' => 'cartController@actualizar'
]);

//Rutas chungas
/*Route::get('/home1', function () {
    return view('home1');
});*/
Route::get('/noticias', 'CkeditorController@index');
Route::post('/articulo', [
    'as' => 'post.articulo',
    'uses' => 'CkeditorController@guardar',
]);


//Twitter

Route::get('twitterUserTimeLine', 'TwitterController@twitterUserTimeLine');
Route::post('tweet', ['as'=>'post.tweet','uses'=>'TwitterController@tweet']);

//Telegram
Route::get('/', 'TelegramController@getHome');
Route::get('get-updates',   'TelegramController@getUpdates');
Route::get('send',  'TelegramController@getSendMessage');
Route::post('send', 'TelegramController@postSendMessage');













//PRUEBAS SE PUEDE BORRAR ******************************
//Route::get('/empleados/mostrar','empleadosController@index');
//Route::get('/empleados/nuevo', 'empleadosController@nuevo');
//Route::get('/empleados/eliminar/{id_emp}','empleadosController@eliminar')->where('id_emp','[0-9]+');
//Route::post('/empleados/guardar', 'empleadosController@guardar');
//Route::get('/home/contacto','ContactoController@index');
//Route::get('/home/productos','ProductosController@index');
//Route::get('/home/productos/{$id}', 'ProductosController@detalles')->where('$id','[0-9]+');
//Route::get('/home/sesion','UserController@login');
//Route::get('/home/registrate','UserController@registrar');
//Route::get('/probando', function () {
    //return view('formularios.crearEmpleado');
//});
//Route::get('/empleados/nuevo','empleadosController@newUserSystem');
//pruebas -luego borrar
/*Route::get('/', function () {
    return view('welcome');
});*/
//Pruebas proyecto
/*Route::get('/home', function () {
    return view('home');
});*/
?>
