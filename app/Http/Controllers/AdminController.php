<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home', ['users' => DB::table('users')->get()]);
    }

    public function cargarFilasUsuarios()
    {
        // No pasar datos sensibles GET !!!
        // Mejorar peticion BBDD !!!
        return view('admin.tabs.tablaUsuarios', ['users' => DB::table('users')->get()]);
    }

    public function eliminarUsuario()
    {
        DB::table('users')->where('id', '=', $_POST["id"])->delete();
    }

    public function editarUsuario()
    {
        DB::table('users')->where('id', '=', $_POST["id"])->delete();
    }

}
