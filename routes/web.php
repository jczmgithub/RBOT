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
    return view('pages.home');
});

Route::get('contact', function() {
    return View('pages.contacto');
});
Route::post('contacto', 'ContactoController@ContactoDatos');

Route::get('RBX1', function(){
    return(view('pages.RBX1'));
});
Route::get('controlBotones', function(){
    return(view('includes.error404'));
});
Route::get('error404', function(){
    return view('includes.error404');
});
Route::get('controlManual', function(){
    return(view('includes.error404'));
});
Auth::routes();
Route::post('auth/login', 'Auth\LoginController@attemptLogin');
Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function() {
    Route::get('/', 'AdminController@index')->name('admin.home');
    Route::get('/login', 'AuthAdmin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'AuthAdmin\LoginController@login')->name('admin.login.submit');
    Route::post('/logout', 'AuthAdmin\LoginController@logout')->name('admin.logout');
    Route::get('/password/reset', 'AuthAdmin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/email', 'AuthAdmin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset/{token}', 'AuthAdmin\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('/password/reset', 'AuthAdmin\ResetPasswordController@reset');
});

Route::get('/user/confirmation/{token}', 'Auth\RegisterController@confirmation')->name('confirmation');
?>
