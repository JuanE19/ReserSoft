@extends('adminlte::page')

@section('title', 'Habitaciones')

@section('content_header')
    <h1>HABITACIÓNES</h1>
@stop

@section('content')

<!-- <a href="habitaciones/create" class="btn btn-primary mb-3"><b>Agregar habitación</b></a> -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Agregar habitación
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      </div>
      <div class="modal-body">
      <form action ="/habitaciones" method="POST">
    @csrf

        <div class="mb-3">
            <label for="" class="form-label">Numero de la Habitacion</label>
            <input id="numerodehabitacion" name="numerodehabitacion" type="number" class="form-control" tabindex="1">
            </div>    

            <div class="mb-3">
                <label for="" class="form-label">Precio</label>
                <input id="precio" name="precio" type="number" class="form-control" tabindex="1">
                </div>   

            <div class="mb-3">
                <label for="" class="form-label">Tipo de habitacion</label>
                <input id="tipodehabitacion" name="tipodehabitacion" type="text" class="form-control" tabindex="1">
                </div>          
                        
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>

<table id="habitaciones" class="table table-striped table-bordered shadow-lg mt-1"  style="width:90%">
    
 <thead class="bg-green text-white">

   <tr>
    <th scope="col">Código</th>
    <th scope="col">Caracteristica</th>
    <th scope="col">Numero de habitación</th>
    <th scope="col">Precio</th>
    <th scope="col">Tipo de habitación</th>
    <th scope="col">Estado</th>
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
        <td>{{ $habitacion->estado}}</td>
        <td>

        <form action="{{ route ('habitaciones.destroy', $habitacion->id) }}" method="POST">
            
        <!-- <a href="/habitaciones/{{$habitacion->id}}/edit" class="btn btn-info fas fa-edit"></a> -->

        <!-- Button trigger modal -->
<button type="button" class="btn btn-info fas fa-edit" data-bs-toggle="modal" data-bs-target="#editarhabitacion">
</button>

<!-- Modal -->
<div class="modal fade" id="editarhabitacion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar habitación</h5>
      </div>
      <div class="modal-body">
      <form action="/habitaciones/{{$habitacion->id}}" method="POST">
    @csrf    
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Código</label>
    <input id="id" name="id" type="text" class="form-control" value="{{$habitacion->id}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Numero de la Habitacion</label>
    <input id="numeroDeHabitacion" name="numeroDeHabitacion" type="text" class="form-control" value="{{$habitacion->numeroDeHabitacion}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Precio</label>
    <input id="precio" name="precio" type="number" class="form-control" value="{{$habitacion->precio}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Tipo de habitacion</label>
    <input id="tipoDeHabitacion" name="tipoDeHabitacion" type="text" class="form-control" value="{{$habitacion->tipoDeHabitacion}}">
  </div>
  <a href="/habitaciones" class= "btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>








          <a href = "">
                <button type="button" class="bi bi-eye btn btn-primary"></button>
                     
        </td> 
        
    </tr>
    @endforeach
</tbody>
</table>
@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function () {
    $('#habitaciones').DataTable({
    language:{
        "url": "https://cdn.datatables.net/plug-ins/1.12.1/i18n/es-ES.json"
    }
   
});
});
 </script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

@stop
