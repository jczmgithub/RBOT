<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacto;

class ContactoController extends Controller
{
    public function ContactoDatos(Request $request){
        $this->validate($request,[
            'nombre'=>"required|string",
            'email'=>"required|string|unique:contacto,email",
            'mensaje'=>"required|string"
        ]);
        Contacto::create(
            $request->all()
        );
        return(view('pages.contacto'));
    }
}
