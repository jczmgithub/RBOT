<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showUsers()
    {
        $users = User::all();
        openTab(event, 'ModificarUsu');
        return view('admin.tabs.modificarUsuario', ['usuarios' => $users->toArray()]);
    }
}
