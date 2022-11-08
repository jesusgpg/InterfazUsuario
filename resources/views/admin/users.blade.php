@extends('adminlte::page')

@section('title', 'Usuarios')

@section ('css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap5.min.css">
@endsection

@section('content')
<div> AAA </div>

<table class ="table table-striped" id="usuarios">

  <thead>
    <th>Cédula</th>
    <th>Nro de Licencia</th>
    <th>Nombre Completo</th>
    <th>Correo</th> 
    <th>Fecha de registro</th>
    <th>Acciones</th>
  </thead>
<tbody>
  @foreach ($users as $user)
      <tr> 
        <td> {{$user->cedula}} </td>
        <td> {{$user->nro_licencia}} </td>
        <td> {{$user->name}} {{$user->lastname}} </td>
        {{-- <td> {{$user->lastname}} </td> --}}
        <td> {{$user->email}} </td>
        <td> {{$user->created_at->diffForHumans()}}</td>
        <td> 
          <button>Editar</button> 
          <button>Eliminar</button>
        </td>
      </tr>
  @endforeach
</tbody>
</table>
@endsection

@section ('js')

  <script src="https://code.jquery.com/jquery-3.5.1.js"> </script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"> </script>
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"> </script>
  <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"> </script>
  <script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap5.min.js"> </script>

  <script>
    $('#usuarios').DataTable({
        responsive: true,
        autoWidth:false,
        "language": {
            "lengtMenu": "Mostrar" + 
            `<select class="custom-select custom-select-sm form-control form-control-sm"> 
              <option value='10'> 10 </option>
              <option value='25'> 25 </option>
              <option value='50'> 50 </option>
              <option value='100'> 100 </option>
              <option value='-1'> Todos </option>
            </select>` + 
            " registros por paginas",
            "zeroRecords": "No hay coincidencias.",
            "info": "Mostrando la pagina _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(Filtro desde _MAX_ registros)",
            "search": "Buscar:",
            "paginate":{
                "next": "Siguiente",
                "previous": "Anterior",
            },
          },
      });
  </script>

@endsection