<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    return view('home');
});

Route::post('contacto', 'ContactoController@ContactoDatos');

Auth::routes();
Route::post('auth/login', 'Auth\LoginController@attemptLogin');
Route::get('/home', 'HomeController@index')->name('home');

Route::post("/datosRobot","RobotController@dataRobot")->name('datosRobot');

Route::prefix('admin')->group(function() {
    Route::get('/', 'AdminController@index')->name('admin.home');
    Route::get('/login', 'AuthAdmin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'AuthAdmin\LoginController@login')->name('admin.login.submit');
    Route::post('/logout', 'AuthAdmin\LoginController@logout')->name('admin.logout');
    Route::get('/password/reset', 'AuthAdmin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/email', 'AuthAdmin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset/{token}', 'AuthAdmin\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('/password/reset', 'AuthAdmin\ResetPasswordController@reset');
    Route::get('/eliminarUsuario/{id}', 'AdminController@eliminarUsuario')->name('admin.eliminarUsuario');
});

Route::get('/user/confirmation/{token}', 'Auth\RegisterController@confirmation')->name('confirmation');

Route::get('showUsers', 'UserController@showUsers')->name('showUsers');

Route::post('/prueba', function(){
    echo $_POST["robot"]."; ".$_POST["motor"]."; ".$_POST["pasos"]."; ".$_POST["velocidad"];
});

Route::post('/prueba2', function(){
    echo "Quieres borrar el usuario con id: ".$_POST["id"];
});

Route::post('/prueba3', 'AdminController@eliminarUsuario2')->name('admin.eliminarUsuario2');
