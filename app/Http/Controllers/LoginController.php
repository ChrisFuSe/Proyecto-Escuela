<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $usuario = User::where('username', $credentials['username'])->first();

            $request->session()->regenerate();

            return redirect()->intended('home');
        }

        return back()->withErrors([
            'username' => 'El nombre de usuario no concuerda con los registros',
        ]);
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}
