<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Str;

class PasswordController extends Controller
{

    use ResetsPasswords;
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);
    }
    public function reset(Request $request){
        $input = $request->only(
            'email', 'password', 'password_confirmation', 'token'
        );
        $validator =  $this->validator($input);

        if($validator->passes()) {
            $user = User::where('email', $input['email'])->first();
            if(!is_null($user)) {
                $user->confirmado = 1;
                $user->emailToken = '';
                $user->password = Hash::make($input['password']);
                $user->setRememberToken(Str::random(60));
                $user->save();
                return redirect(route('login'))->with('status', 'Password establecido.');
            } else{
                return redirect(route('login'))->with('status', 'No se ha encontrado el user');
            }
        }
        return redirect(route('login'))->with('status', 'Ha ocurrido un error al establecer password');
        //return redirect(route('login'))->with('status', 'Ha ocurrido al establecer la password.');


    }
}
