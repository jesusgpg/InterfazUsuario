@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content')

<h1>Nuevo usuario</h1>

    <form method="POST" action="{{route('admin.usernew.store')}}">
        {{ csrf_field() }}
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name">
        <br>

        <label for="lastname">Apellido:</label>
        <input type="text" name="lastname" id="lastname">
        <br>

        <label for="nro_licencia">Numero de Licencia:</label>
        <input type="text" name="nro_licencia" id="nro_licencia">
        <br>

        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" id="email">
        <br>

        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" placeholder="Mayor a 4 caracteres">
        <br>

        <button type="submit">Crear nuevo usuario</button>
    </form>

    <p>
        <a href="{{ route('usuarios') }}">Regresar al listado de usuarios</a>
    </p>
@endsection