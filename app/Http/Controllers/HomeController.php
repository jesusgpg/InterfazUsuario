<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function __invoke($name, $nickname = null)
    // {
    //     $name = ucfirst($name);

    //     if ($nickname) {
    //         return "Bienvenido {$name}, tu apodo es {$nickname}";
    //     } else {
    //         return "Bienvenido {$name}";
    //     }
    // }

    public function index()
    {
        return view('home');
    }

}
