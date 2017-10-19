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

/*
 * Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return(view('bienvenido'));
});
Route::get('/agur', function () {
    return(view('agur'));
});

Route::post('/formpost', 'formulario_controlador@formulario_datos'
    //return(view('formpost'));
);
/**/
Route::get('/', function(){
    return view('pages.home');
});
Route::get('formulario', function() {
    return View('pages.formulario');
});
Route::post('formpost', 'formulario_controlador@formulario_datos'
//return(view('formpost'));
);

?>