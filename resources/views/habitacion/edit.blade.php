@extends('adminlte::page')

@section('title', 'Editar habitacion')

@section('content_header')
    <h1>Editar habitación</h1>
@stop
  
@section('content')

<form action="/habitaciones/{{$habitacion->id}}" method="POST">
    @csrf    
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Código</label>
    <input id="id" name="id" type="text" class="form-control" value="{{$habitacion->id}}">    
  </div>

  <div class="mb-3">
   <label for="" class="form-label">Caracteristicas</label>
   <input id="caracteristicas" name="caracteristicas" type="text" class="form-control" value="{{$habitacion->caracteristicas}}" tabindex="1" maxlength="200" required="">
   </div>


   <div class="form-check caracteristicas">
   <label class="form-check-label">
   <input class="form-check-input" id="cama1" name="caracteristicas" type="checkbox" class="ml-3" value="cama1"> 
   <span class="badge badge-secondary-fill btn btn-success"><i class="fas fa-bed"></i> Cama individual estandar </span>
   </label>
   </div>

   <div class="form-check caracteristicas">
   <label class="form-check-label">
   <input class="form-check-input" id="cama2" name="caracteristicas" type="checkbox" class="ml-3" value="cama2"> 
   <span class="badge badge-secondary-fill btn btn-success"><i class="fas fa-bed"></i> Cama doble estandar </span>
   </label>
   </div>

   <div class="form-check caracteristicas">
   <label class="form-check-label">
   <input class="form-check-input" id="cama3" name="caracteristicas" type="checkbox" class="ml-3" value="cama3"> 
   <span class="badge badge-secondary-fill btn btn-success"><i class="fas fa-bed"></i> Cama doble - 2 camas </span> 
   </label>
   </div>

   <div class="form-check caracteristicas">
   <label class="form-check-label">
   <input class="form-check-input" id="tv1" name="caracteristicas" type="checkbox" class="ml-3" value="tv1"> 
   <span class="badge badge-secondary-fill btn btn-success"><i class="fas fa-tv"></i> 1 TV</span>
   </label>
   </div>

   <div class="form-check caracteristicas">
   <label class="form-check-label">
   <input class="form-check-input" id="tv2" name="caracteristicas" type="checkbox" class="ml-3" value="tv2"> 
   <span class="badge badge-secondary-fill btn btn-success"><i class="fas fa-tv"></i> 2 TV</span>
   </label>
   </div>

   <div class="form-check caracteristicas">
   <label class="form-check-label">
   <input class="form-check-input" id="agua" name="caracteristicas" type="checkbox" class="ml-3" value="agua"> 
   <span class="badge badge-secondary-fill btn btn-success"><i class="fas fa-tint"></i> Agua Caliente </span>
   </label>
   </div>

   <div class="form-check caracteristicas">
   <label class="form-check-label">
   <input class="form-check-input" id="aire" name="caracteristicas" type="checkbox" class="ml-3" value="aire"> 
   <span class="badge badge-secondary-fill btn btn-success"><i class="fas fa-water"></i> Aire acondicionado </span>
   </label>
   </div>

   <div class="form-check caracteristicas">
   <label class="form-check-label">
   <input class="form-check-input" id="ventilador" name="caracteristicas" type="checkbox" class="ml-3" value="ventilador"> 
   <span class="badge badge-secondary-fill btn btn-success"><i class="fas fa-water"></i> Ventilador </span>
   </label>
   </div>

   <div class="form-check caracteristicas">
   <label class="form-check-label">
   <input class="form-check-input" id="baño" name="caracteristicas" type="checkbox" class="ml-3" value="baño">
   <span class="badge badge-secondary-fill btn btn-success"><i class="fas fa-toilet"></i> Baño privado </span>
   </label>
   </div>

   <div class="form-check caracteristicas">
   <label class="form-check-label">
   <input class="form-check-input" id="armario" name="caracteristicas" type="checkbox" class="ml-3" value="armario"> 
   <span class="badge badge-secondary-fill btn btn-success"><i class="fas fa-couch"></i> Armario </span>
   </label>
   </div>

   <div class="form-check caracteristicas">
   <label class="form-check-label">
   <input class="form-check-input" id="wifi" name="caracteristicas" type="checkbox" class="ml-3" value="wifi"> 
   <span class="badge badge-secondary-fill btn btn-success"><i class="fas fa-wifi"></i> Servicio Wifi </span>
   </label>
   </div>

   <br>

<inut type="hidden" name="caracteristicas">         

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
    <input id="tipo" name="tipo" type="text" class="form-control" value="{{$habitacion->tipo}}">
    
  </div>
  <a href="/habitaciones" class= "btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

  