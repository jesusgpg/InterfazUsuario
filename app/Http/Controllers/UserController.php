<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller {

    public function showid($id) {
        $user = User::find($id);
        return view('admin.useredit', compact('user'));
    }

    // User Perfil
    public function show(User $user)
    {
        return view('perfil', compact('user'));
    }
  
    // Admin Home
    public function index()
    {
        return view('admin.index');
    }

    //Users List
    public function showall(){

        $users = User::all();
        return view('admin.users', compact('users'));
        // return view('admin.users');
    }

    public function create()
    {
        return view('admin.usernew');
    }

    //User Create 
    public function store(Request $request)
    {
        $user = new User(); 
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->nro_licencia = $request->nro_licencia;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->telefono = $request->telefono; 
        $user->cedula = $request->cedula; 
        $user->fecha_nacimiento = $request->fecha_nacimiento; 
        $user->fecha_licencia = $request->fecha_licencia; 
        $user->fecha_licencia_venc = $request->fecha_licencia_venc; 
        // return  $user;
        $user->save(); 
        return redirect()->route('usuarios.show', $user);
    }

        //User Edit
        public function edit(User $user) {
        //   $user = User::find($id);
          return view ('usuarios.show', compact('user'));
        }

        //User Edit
        public function update(Request $request, User $user) {
            $user->name = $request->name;
            $user->lastname = $request->lastname;
            $user->nro_licencia = $request->nro_licencia;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->telefono = $request->telefono;   
            $user->cedula = $request->cedula; 
            $user->fecha_nacimiento = $request->fecha_nacimiento; 
            $user->fecha_licencia = $request->fecha_licencia; 
            $user->fecha_licencia_venc = $request->fecha_licencia_venc; 
            $user->save(); 
            return redirect()->route('usuarios.show', $user);    
            // return  $user;
        }

        public function destroy (User $user){
            $user->delete();
            return redirect()->route('usuarios');    
        }

}
