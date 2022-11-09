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
        $user->password = $request->password;
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
            $user->password = $request->password;
            
            $user->save(); 
            return redirect()->route('usuarios.show', $user);
        
        }

}
