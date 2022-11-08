{{-- @extends('layouts.app')
@section('title', 'MyApp')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        CONTENT
        </div>
    </div>
</div>

@endsection --}}

@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h1>Inicio</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
    <p>Tabla de usuarios</p>
    </div>
    <div class="card-body">
        <p>Usuario body</p>
    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
