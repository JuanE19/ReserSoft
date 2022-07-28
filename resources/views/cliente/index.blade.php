@extends('adminlte::page')

@section('title', 'CRUD CLIENTES')

@section('content_header')
    <h1>LISTADO DE CLIENTES</h1>
@stop

@section('content')
    
<a href="clientes/create" class=" far fa-user btn btn-primary "><b> Crear Nuevo</b></a>


<table id="clientes" class="table table-striped table-bordered shadow-lg mt-1"  style="width:100%">
    <br>
    <br>
 <thead class="bg-green text-white">
   <tr>
    <th scope="col">ID</th>
    <th scope="col">Nombre completo</th>
    <th scope="col">Documento</th>
    <th scope="col">Correo</th>
    <th scope="col">Telefono</th>
    <th scope="col">Direccion</th>
    <th scope="col">Fecha de Nacimiento</th>
    <th scope="col">Acciones</th>
  </tr>
 </thead>
<tbody>
    @foreach($clientes as $cliente)
    <tr>
        <td>{{ $cliente->id }}</td>
        <td>{{ $cliente->NombreCompleto }}</td>
        <td>{{ $cliente->Documento }}</td>
        <td>{{ $cliente->Correo }}</td>
        <td>{{ $cliente->Telefono }}</td>
        <td>{{ $cliente->Direccion }}</td>
        <td>{{ $cliente->FechaNacimiento }}</td>
        <td>  

            <form action="{{ route  ('clientes.destroy', $cliente->id)}}" method="POST">
            <a href="/clientes/{{ $cliente->id}}/edit"  class="btn btn-info fas fa-edit"></a>

            @csrf 
            @method('DELETE')
            <button type="submit" class="btn btn-danger">
                <i class="fas fa-trash"></i>
            </button>
        </td>
    </tr>





    
    @endforeach
</tbody>

</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    
<script>
$(document).ready(function () {
    $('#clientes').DataTable({
    language:{
        "url": "https://cdn.datatables.net/plug-ins/1.12.1/i18n/es-ES.json"
    }
   
});
});
 </script>


@stop