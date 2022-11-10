@extends('adminlte::page')

@section('title', 'Usuario')

@section('content')

<h1>Editar usuario</h1>

    <form method="POST" action="{{route('usuarios.update', $user)}}">
    {{-- <form method="" action=""> --}}
      
      @method('put')
        {{ csrf_field() }}
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        {{-- <label class="form-label" for="form3Example1">Licencia</label>
                        <input type="file" name="licencia" id="licencia" class="form-control"/> --}}
                        <label class="form-label" for="cedula">Cedula</label>
                        <input type="text" name="cedula" id="cedula" class="form-control" 
                        value="{{ old('cedula', $user->cedula) }}"/>
                    </div>
                </div>
                
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="form3Example1">Nombre</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $user->name) }}"/>
                    </div>
                </div>

                <div class="col">
                    <div class="form-outline">
                        <label for="lastname">Apellido:</label>
                        <input type="text" name="lastname" id="lastname" class="form-control" 
                        placeholder="{{ Auth::user()->lastname }}" value="{{ old('lastname', $user->lastname) }}">
                    </div>
                </div>
            </div>
            
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <label for="nro_licencia">Numero de Licencia:</label>
                        <input type="text" name="nro_licencia" id="nro_licencia" class="form-control"
                            value="{{ old('nro_licencia', $user->nro_licencia) }}">
                    </div>
                </div>

                <!-- Email input -->
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="email">Correo Electronico</label>
                        <input name="email" id="email" value="{{ old('email', $user->email) }}" class="form-control" />
                    </div>
                </div>

                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="telefono">Telefono</label>
                        <input type="text" name="telefono" id="telefono" value="{{ $user->telefono }}" class="form-control" />
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control">
                    </div>
                </div>

                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="fecha_licencia">Fecha de Licencia</label>
                        <input type="date" name="fecha_licencia" id="fecha_licencia" class="form-control" />
                    </div>
                </div>

                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="fecha_licencia_venc">Fecha de Vencimiento de Licencia </label>
                        <input type="date" name="fecha_licencia_venc" id="fecha_licencia_venc" class="form-control" />
                    </div>
                </div>
            </div>
            
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">         
                    </div>
                </div>

                <!-- Email input -->
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label"> Contraseña </label>
                        <input id="password" type="password" name="password" 
                        placeholder="Mayor a 4 caracteres" class="form-control" />
                    </div>
                </div>

                <div class="col">
                    <div class="form-outline">
                    </div>
                </div>
            </div>
            
            <!-- Submit button -->
            <div class="container">
                <div class="row">
                    <div class="col align-self-center">
                        <button type="submit" class="btn btn-primary btn-lg">Actualizar Usuario</button>
                    </div>
                </div>
            </div>
        </div>
    </form>



    {{-- <p>
        <a href="{{ route('usuarios') }}">Regresar al listado de usuarios</a>
    </p> --}}
@endsection