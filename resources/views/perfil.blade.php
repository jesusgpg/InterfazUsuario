@extends('adminlte::page')

@section('title', 'Perfil')

@section('content')

<h1>Editar usuario</h1>

    {{-- <form method="POST" action="{{route('perfil.store')}}"> --}}
    <form method="" action="">
        {{ csrf_field() }}
        
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" placeholder="{{ Auth::user()->name }}"
         value="{{ old('name', $user->name) }}">
        <br>

        <label for="lastname">Apellido:</label>
        <input type="text" name="lastname" id="lastname" placeholder="{{ Auth::user()->lastname }}" 
            value="{{ old('lastname', $user->lastname) }}">
        <br>

        <label for="nro_licencia">Numero de Licencia:</label>
        <input type="text" name="nro_licencia" id="nro_licencia" placeholder="{{ Auth::user()->nro_licencia }}" 
            value="{{ old('nro_licencia', $user->nro_licencia) }}">
        <br>

        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" id="email" placeholder="{{ Auth::user()->email }}" value="{{ old('email', $user->email) }}">
        <br>

        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" placeholder="Mayor a 4 caracteres">
        <br>

        <button type="submit">Actualizar usuario</button>
    </form>

    <p>
        <a href="{{ route('home') }}">Regresar al listado de usuarios</a>
    </p>
@endsection