<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function solicitud()
    {
        return view('solicitud');
    }
    public function documentos()
    {
        return view('documentos');
    }
    public function perfil()
    {
        return view('perfil');
    }
    public function panel()
    {
        return view('panel');
    }
}
