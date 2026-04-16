<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;


Route::get('/home', function () {
    return view('home');
});

Route::get('/register', function () {
    return view('authentication.register');
});

//Route::post('/register', function () {
 //   return view('authentication.register');
//});


Route::get('/registro', [RegisterController::class, 'show']);
//Route::get('register', [RegisterController::class, 'register']);

 Route::post('/register', [RegisterController::class, 'register']);
