<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use Mail;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
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
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),

        ]);
    }
    protected function register(Request $request){
        $input = $request -> all();
        $validator =  $this->validator($input);

        if($validator->passes()){
            $data = $this ->create($input)->toArray();

            $data['emailToken'] =  str_random(25);

            $user = User::find($data['id']);
            $user -> emailToken = $data['emailToken'];
            $user -> save();

            Mail::send('email.confirmation', $data, function($message) use($data){
                $message->to($data['email']);
                $message->subject('Registro de confirmación');
            });
            return redirect(route('login'))->with('status', 'Email de confirmación enviado. Compruebe su correo, por favor.');
        }
        return redirect (route('login'))->with('status', $validator->errors());
    }
    public function confirmation($token){
        $user = User::where('emailToken', $token)->first();

        if(!is_null($user)) {
            $user->confirmado = 1;
            $user->emailToken = '';
            $user->save();
            return redirect(route('login'))->with('status', 'Has activado la cuenta!');
        }
        return redirect (route('login'))->with('status', 'Ha ocurrido un error.');
    }
}
