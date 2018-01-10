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

    public function tablaUsuarios()
    {
        return view('admin.tabla', ['users' => DB::table('users')->get()]);
    }

    public function eliminarUsuario($id)
    {
        DB::table('users')->where('id', '=', $id)->delete();
        return $this->index();
    }

    public function eliminarUsuario2()
    {
        echo "Quieres borrar el usuario con id: ".$_POST["id"];
        DB::table('users')->where('id', '=', $_POST["id"])->delete();
    }
}
