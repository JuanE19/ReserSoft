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

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

  