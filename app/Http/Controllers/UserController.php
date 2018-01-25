<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use DB;
use Auth;
use Mail;

class UserController extends Controller
{
    protected $redirectTo = '/home';


    public function formRegistro(){
        return view('user.columnas.registrarUser');
    }
    public function tablaUser(){
        $id = Auth::user()->id;
        return view('user.columnas.tablaUsuarios', ['users' => DB::table('users')->get()->where('owner', '=', "$id")]);

    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $id = Auth::user()->id;
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'owner' => $id,
            'credito' => 'NO_DISPONIBLE'
        ]);
    }

    public function register(Request $request){
        $input = $request -> all();
        $validator =  $this->validator($input);

        if($validator->passes()){
            $data = $this ->create($input)->toArray();

            $data['emailToken'] =  str_random(25);

            $user = User::find($data['id']);
            $user -> emailToken = $data['emailToken'];
            $user -> save();

            Mail::send('email.completarRegistro', $data, function($message) use($data){
                $message->to($data['email']);
                $message->subject('Registro de confirmación');
            });
            return redirect(route('user.columnas.registrarUser'))->with('status', 'Email de confirmación enviado.');
        } else{
            return back()->with('errors',$validator->errors());
            //return redirect (route('register'))->with('status', $validator->errors());
        }
    }
    public function completarRegistro($token){
        $user = User::where('emailToken', $token)->first();

        if(!is_null($user)) {
            $user->confirmado = 1;
            $user->emailToken = '';
            $user->save();
            $token = NULL;
            return view('user.auth.passwords.addPassword')->with(
                ['token' => $token, 'email' => $user->email]);

        }
        return redirect(route('login'))->with('status', 'Ha ocurrido un error inesperado en el email');

    }
    public function eliminarUser(){
        DB::table('users')->where('email', '=', $_POST["email"])->delete();
    }



}
