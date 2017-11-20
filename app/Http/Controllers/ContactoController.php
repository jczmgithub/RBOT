<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacto;
use Mail;

class ContactoController extends Controller
{
    public function ContactoDatos(Request $request){
        $this->validate($request,[
            'nombre'=>"required|string",
            'email'=>"required|string",
            'mensaje'=>"required|string"
        ]);
        Contacto::create(
            $request->all()
        );

        $data = $request -> all();
            Mail::send('email.contacto', $data, function ($message) use ($data) {
                $message->to($data['email']);
                $message->subject('Contacto enviado');
            });
        return redirect (url('contact'))->with('status', 'Se ha enviado correctamente');
    }
}
