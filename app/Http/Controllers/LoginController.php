<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */

    protected $redirectAfterLogout = '/login';

    public function show(){
        return view('authentication.login');
    }


    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email','password');

        if(Auth::attempt($credentials))
            {
                $request->session()->regenerate();  

                return redirect()->intended('/home');
            }

            return back()->withErrors(['email' => 'No se ha encontrado'])->OnlyInput('email');

    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();


        return redirect()->intended('/login');
    }
    
}
