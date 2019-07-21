<?php

use App\Mascota;
/* return view('nombrecarpeta.nombreblade'); va en el cotroller index*/
/*Route::resource('regis-masc', 'MascotasController');

*/
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

/* Modulo registro de mascotas*/
Route::resource('passwords/register', 'UserController');
/* Modulo registro de mascotas*/