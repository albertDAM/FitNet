<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;


/*Route::get('/home', function () {
    return view('home');
});*/

/**Route::get('/register', function () {
    return view('authentication.register');
});

/*Route::get('/login', function () {
    return view('authentication.login');
});*/

//Route::post('/register', function () {
 //   return view('authentication.register');
//});


Route::view('/login', 'authentication.login')/*->middleware('auth')*/->name('login');
Route::view('/register','authentication.register')->name('register');
//Route::get('/home','home')->middleware('auth')->name('home');

Route::post('/login', [LoginController::class, 'login'])/*->middleware('auth')*/;
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/logout', [LoginController::class, 'logout'])/*->middleware('auth')*/->name('logout');

Route::get('/home', [HomeController::class, 'mostrar'])->middleware('auth');
//Route::get('/register', [RegisterController::class, 'show']);
//Route::get('register', [RegisterController::class, 'register']);



 //Route::get('/login', [LoginController::class, 'show']);

 

 
