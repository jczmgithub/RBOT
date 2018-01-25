<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Password;

class PasswordController extends Controller
{

    use ResetsPasswords;
    public function reset(Request $request)
    {
        $this->validate($request, [
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);
        $credentials = $request->only(
            'email', 'password', 'password_confirmation'
        );
        $user = User::where('email',$credentials['email']);
        $user->password = bcrypt($credentials['password']);
        $user->save();
        return redirect(route('user.home'))->with('status', 'Password establecido.');
    }
}
