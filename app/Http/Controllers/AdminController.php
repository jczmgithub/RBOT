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
        return view('admin.home', ['users' => DB::table('users')->get(), 'robots' => DB::table('robots')->get()]);
    }

    public function cargarFilasUsuarios()
    {
        return view('admin.tabs.tablaUsuarios', ['users' => DB::table('users')->get()]);
    }

    public function eliminarUsuario()
    {
        DB::table('users')->where('id', '=', $_POST["id"])->delete();
    }

    public function nuevoUsuario()
    {
        DB::table('users')->insert([
            'name' => $_POST["nombre"],
            'email' => $_POST["email"],
            'confirmado' => $_POST["confirmado"],
            'tarifa' => $_POST["tarifa"],
            'credito' => $_POST["credito"],
        ]);
    }

    public function editarUsuario()
    {
        DB::update('update users set name = ?, email = ?, confirmado = ?, tarifa = ?, credito = ? where id = ?',
            [$_POST["nombre"], $_POST["email"], $_POST["confirmado"], $_POST["tarifa"], $_POST["credito"], $_POST["id"]]);
    }


    public function cargarFilasRobots()
    {
        return view('admin.tabs.tablaRobots', ['robots' => DB::table('robots')->get()]);
    }

    public function eliminarRobot()
    {
        DB::table('robots')->where('id', '=', $_POST["id"])->delete();
    }

    public function nuevoRobot()
    {
        DB::table('robots')->insert([
            'user_id' => $_POST["usuario"],
            'modelo' => $_POST["modelo"],
            'host' => $_POST["host"],
        ]);
    }

    public function editarRobot()
    {
        DB::update('update robots set user_id = ?, modelo = ?, host = ? where id = ?',
            [$_POST["usuario"], $_POST["modelo"], $_POST["host"], $_POST["id"]]);
    }
}
