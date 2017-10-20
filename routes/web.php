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

Route::get('contacto', function() {
    return View('pages.contacto');
});
Route::post('contacto', 'ContactoController@ContactoDatos'
);

Route::get('RBX1', function(){
    return(view('pages.RBX1'));
});
Route::get('controlB', function(){
    return(view('pages.controlBotones'));
});
Route::get('controlM', function(){
    return(view('pages.controlManual'));
});
?>