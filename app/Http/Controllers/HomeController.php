<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;


class HomeController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    public function mostrar()
    {
        return view('home');
    }
}
