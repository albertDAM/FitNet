<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    //
    public function show(){
        return view('authentication.register');
    }

    public function register(RegisterRequest $request){
        $user = User::create($request->validated());

        Auth::login($user);

        //return redirect(route('/home'));
        

        return redirect('/home')->with('success', 'Se ha creado la cuenta');

    }
}
