@extends('adminlte::page')

@section('title', 'Habitaciones')

@section('content_header')
    <h1>HABITACIÓNES</h1>
@stop

@section('content')

<a href="habitaciones/create" class=" far fa-user btn btn-primary mb-3"><b>Agregar habitación</b></a>

<table id="habitaciones" class="table table-striped table-bordered shadow-lg mt-1"  style="width:100%">
    
 <thead class="bg-green text-white">

   <tr>
    <th scope="col">Código</th>
    <th scope="col">Caracteristica</th>
    <th scope="col">Numero de habitación</th>
    <th scope="col">Precio</th>
    <th scope="col">Tipo de habitación</th>
    <th scope="col">Acciones</th>
  </tr>
 </thead>
<tbody>
    @foreach($habitaciones as $habitacion)
    <tr>
        <td>{{ $habitacion->id }}</td>
        <td>{{ $habitacion->caracteristica}}</td>
        <td>{{ $habitacion->numeroDeHabitacion }}</td>
        <td>{{ $habitacion->precio }}</td>
        <td>{{ $habitacion->tipoDeHabitacion}}</td>
        <td>

        <form action="{{ route ('habitaciones.destroy', $habitacion->id) }}" method="POST">
          <a href="/habitaciones/{{$habitacion->id}}/edit" class="btn btn-info fas fa-edit"></a>
       
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
   
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
