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
Route::post('contacto', 'ContactoController@ContactoDatos'
);

Route::get('RBX1', function(){
    return(view('pages.RBX1'));
});
Route::get('controlBotones', function(){
    return(view('pages.controlBotones'));
});
Route::get('controlManual', function(){
    return(view('pages.controlManual'));
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

?>
