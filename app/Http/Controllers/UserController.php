<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('usuarios.perfil');
    }

    public function show(){
        return view('usuarios.usuarios');
    }
}
