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
    Route::post('/eliminarUsuario', 'AdminController@eliminarUsuario')->name('admin.eliminarUsuario');
    Route::post('/cargarFilasUsuarios', 'AdminController@cargarFilasUsuarios')->name('admin.cargarFilasUsuarios');
    Route::post('/nuevoUsuario', 'AdminController@nuevoUsuario')->name('admin.nuevoUsuario');
    Route::post('/editarUsuario', 'AdminController@editarUsuario')->name('admin.editarUsuario');
    Route::post('/eliminarRobot', 'AdminController@eliminarRobot')->name('admin.eliminarRobot');
    Route::post('/cargarFilasRobots', 'AdminController@cargarFilasRobots')->name('admin.cargarFilasRobots');
    Route::post('/nuevoRobot', 'AdminController@nuevoRobot')->name('admin.nuevoRobot');
    Route::post('/editarRobot', 'AdminController@editarRobot')->name('admin.editarRobot');
});

Route::get('/user/confirmation/{token}', 'Auth\RegisterController@confirmation')->name('confirmation');

Route::post('/prueba', function(){
    echo $_POST["robot"]."; ".$_POST["motor"]."; ".$_POST["pasos"]."; ".$_POST["velocidad"];
});
Route::post('/user/tablaDatos', 'RobotController@addFila')->name('addFila');
//Rutas admin robot para registro de user y robots
Route::prefix('user')->group(function() {
Route::get('/verUser', 'UserController@verUsers')->name('user.verUsers');
Route::get('/verUser/tablaUser', 'UserController@tablaUser')->name('user.tablaUser');
Route::get('/registrarUser/{token}', 'UserController@completarRegistro')->name('user.rellenarPassword');
Route::get('/registrarUser', 'UserController@formRegistro')->name('user.pages.registrarUser');
Route::post('/registrar-user', 'UserController@register')->name('user.registrarUser');
Route::post('/register/completarRegistro','PasswordController@reset')->name('user.newPassword');
Route::post('/eliminarUser', 'UserController@eliminarUser')->name('user.eliminarUser');
Route::get('/registrarRobot', 'RobotController@formRobot')->name('formRobot');
Route::get('/verRobot', 'RobotController@verRobot')->name("user.tablaRobot");
Route::get('/verRobot/tablaRobot', 'RobotController@tablaRobot')->name('user.tablaRobot');
Route::post('/eliminarRobot', 'RobotController@eliminarRobot')->name("user.eliminarRobot");
Route::get('/verRobotUser', 'RobotController@verRobotUser')->name("user.verRobotUser");
Route::post('/asignarRobot', 'RobotController@asignarRobot')->name("user.asignarRobot");
});

Route::get('/user/registrarRobot', 'RobotController@formRobot')->name('formRobot');

Route::post('/guardarFila', 'RobotController@guardarFila')->name('guardarFila');