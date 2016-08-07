<?php
//Para importar la clase Usuario del modelo

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'VistaUsuarioController@vista_inicio');
Route::get('/productos', 'VistaUsuarioController@vista_productos');
Route::get('/quienes_somos', 'VistaUsuarioController@vista_quienesSomos');

Route::resource('/admin/estatus', 'EstatusController'); //porque lo hicimos con el CRUD y no esta pasando nada
Route::resource('/admin/categoria', 'CategoriaController');
Route::resource('/admin/marca', 'MarcaController');
Route::resource('/admin/tipo_producto', 'Tipo_productoController');
Route::resource('/admin/producto', 'ProductoController');
Route::resource('/admin/user', 'UserController');
Route::resource('/admin/tipo_usuario', 'Tipo_usuarioController');
Route::resource('/admin/ubicacion', 'UbicacionController');
Route::get('admin/categoria/suspender/{id}','CategoriaController@suspender');

Route::resource('/admin', 'AdminController@mostrar_principal' ); //Asi para llamar la vista que tiene el authenticate

Route::get('/registro', 'RegistroController@nombreEstatus');

Route::get('auth/login', 'Auth\AuthController@getLogin'); //Ve si iniciaste sesion.
Route::post('auth/login','Auth\AuthController@postLogin');



//Para suspender y pasar id por url


/*Route::get('/formulario', function () {
   
    return view('prueba_form');
});

Route::get('/admin', function () {
   
    return view('admin.index');
});

Route::get('/admin/estatus', function () {
   
    return view('admin.estatus.principal');
});
*/
