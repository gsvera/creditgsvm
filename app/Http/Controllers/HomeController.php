<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Credito;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function userconfig()
    {
        $usuario = auth()->user();
        return view('userconfig',compact('usuario'));
    }

}
