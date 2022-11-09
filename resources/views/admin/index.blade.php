@extends('adminlte::page')

@section('title', 'Inicio')

{{-- @section('plugins.Sweetalert2',true) --}}

@section('plugins.Datatables',true)

@section('content_header')
    <h1>Inicio</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
    <p>Hola, ADMIN</p>
    </div>
    <div class="card-body">
        <p>ADMIN</p>
    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> Swal.fire('Any fool can use a computer') </script>
@stop
