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
/*RUTAS DE MASCOTAS  Perdidas*/
Route::get('perdidas', 'Lost\LostController@index')->name('mostrar_lost');
Route::get('perdidas/show', 'Lost\LostController@show')->name('mostrar_user');
/*RUTAS DE MASCOTAS  Encontradas*/
Route::get('encontradas', 'Lost\EncontradasController@index')->name('mostrar_encon');
Route::get('encontradas/show', 'Lost\EncontradasController@show')->name('mostrar_user_encon');
/*RUTAS DE MASCOTAS EN Adopcion*/
Route::get('adopcion', 'Adop\AdopController@index')->name('mostrar_adop');
Route::get('adopcion/show', 'Adop\AdopController@show')->name('mostrar_perf');
/*RUTAS SOBRE EL USUARIO*/
Route::get('usuario', 'User\UserinfoController@index')->name('user_info');
Route::get('usuario/show', 'User\UserinfoController@show')->name('');
/*RUTAS DEL PQRS*/
Route::get('pqrs', 'User\PqrsController@index')->name('pqrs');
/******************************************************************************** */
/* incio de Menu ADMINISTRADOR*/
Route::get('/homeadmin', 'HomeAdminController@index')->name('homeadmin');
/* incio de Menu ADMINISTRADOR*/
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
/*RUTAS DE MASCOTAS  Perdidas ADMINISTRADOR*/
Route::get('perdidas-admin', 'Admin\Lost_adminController@index')->name('mostrar_lost-admin');
Route::get('perdidas-admin/{id}/editar', 'Admin\Lost_adminController@editar')->name('editar_lost');
Route::put('perdidas-admin/{id}', 'Admin\Lost_adminController@actualizar')->name('actualizar_lost');
/*RUTAS DE MASCOTAS  en adopcion ADMINISTRADOR*/
Route::get('adopcion-admin', 'Admin\Adop_adminController@index')->name('mostrar_adop-admin');
Route::get('adopcion-admin/{id}/editar', 'Admin\Adop_adminController@editar')->name('editar_adop');
Route::put('adopcion-admin/{id}', 'Admin\Adop_adminController@actualizar')->name('actualizar_adop');
/*RUTAS DE MASCOTAS  en encontradas ADMINISTRADOR*/
Route::get('encontradas-admin', 'Admin\Encon_adminController@index')->name('mostrar_encon-admin');
Route::get('encontradas-admin/{id}/editar', 'Admin\Encon_adminController@editar')->name('editar_encon');
Route::put('encontradas-admin/{id}', 'Admin\Encon_adminController@actualizar')->name('actualizar_encon');
/*RUTAS DE REGISTROS*/
Route::get('registro', 'Admin\RegistroController@index')->name('registro');
Route::get('registro/crear', 'Admin\RegistroController@crear')->name('crear_regis');
Route::post('registro', 'Admin\RegistroController@guardar')->name('guardar_regid');
Route::get('registro/{id}/editar', 'Admin\RegistroController@editar')->name('editar_regis');
Route::put('registro/{id}', 'Admin\RegistroController@actualizar')->name('actualizar_regis');
Route::delete('registro/{id}', 'Admin\RegistroController@eliminar')->name('eliminar_regis');
/*RUTAS DE GENERAR*/
Route::get('generar', 'Admin\GenerarController@index')->name('Generar');