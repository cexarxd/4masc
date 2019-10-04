<?php


/* return view('nombrecarpeta.nombreblade'); va en el cotroller index*/


/* incio de 4masc.com*/
Route::get('/', function () {
    return view('welcome');
});
/* incio de 4masc.com*/

/*lgoin y registro*/
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
if ($options['register'] ?? true) {
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Auth\RegisterController@register');
}
Route::get('/careers','SelectController@getCareers');
// Password Reset Routes...
if ($options['reset'] ?? true) {
    Route::resetPassword();
}
/*lgoin y registro*/

/* incio de Menu usuarios*/
Route::get('/home', 'HomeController@index')->name('home');
/* incio de Menu usuarios*/

/*RUTAS DEL MENU*/
Route::get('menu', 'Admin\MenuController@index')->name('menu');
Route::get('menu/crear', 'Admin\MenuController@crear')->name('crear_menu');
Route::post('menu', 'Admin\MenuController@guardar')->name('guardar_menu');
Route::get('menu/{id}/editar', 'Admin\MenuController@editar')->name('editar_menu');
Route::put('menu/{id}', 'Admin\MenuController@actualizar')->name('actualizar_menu');
Route::get('menu/{id}/eliminar', 'Admin\MenuController@eliminar')->name('eliminar_menu');
Route::post('menu/guardar-orden', 'Admin\MenuController@guardarOrden')->name('guardar_orden');

/*RUTAS ROL*/
Route::get('rol', 'Admin\RolController@index')->name('rol');
Route::get('rol/crear', 'Admin\RolController@crear')->name('crear_rol');
Route::post('rol', 'Admin\RolController@guardar')->name('guardar_rol');
Route::get('rol/{id}/editar', 'Admin\RolController@editar')->name('editar_rol');
Route::put('rol/{id}', 'Admin\RolController@actualizar')->name('actualizar_rol');
Route::delete('rol/{id}', 'Admin\RolController@eliminar')->name('eliminar_rol');
 /*RUTAS MENU_ROL*/
 Route::get('menu-rol', 'Admin\MenuRolController@index')->name('menu_rol');
 Route::post('menu-rol', 'Admin\MenuRolController@guardar')->name('guardar_menu_rol');
/*RUTAS DE PERMISO*/
//Route::get('permiso', 'PermisoController@index')->name('permiso');
//Route::get('permiso/crear', 'PermisoController@crear')->name('crear_permiso');
//Route::post('permiso', 'PermisoController@guardar')->name('guardar_permiso');
//Route::get('permiso/{id}/editar', 'PermisoController@editar')->name('editar_permiso');
//Route::put('permiso/{id}', 'PermisoController@actualizar')->name('actualizar_permiso');
//Route::delete('permiso/{id}', 'PermisoController@eliminar')->name('eliminar_permiso');
/*RUTAS DE resgistro de mascotas*/
Route::get('registrar', 'Registro\RegistroController@index')->name('crear_registro');
Route::Post('registrar', 'Registro\RegistroController@store')->name('registro');
/*RUTAS DE MASCOTAS EN ADOPCION*/
Route::get('perdidas', '\RegistroController@index')->name('crear_registro');