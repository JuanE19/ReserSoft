@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Reserva</h1>
@stop

@section('content')
<form action="/reserva/{{$reserva->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="container m-4 w-25">
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1" value="{{$reserva->nombre}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Apellido</label>
        <input id="apellido" name="apellido" type="text" class="form-control" tabindex="1" value="{{$reserva->apellido}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Cantidad de personas</label>
        <input id="cantidadDePersonas" name="cantidadDePersonas" type="text" class="form-control" tabindex="1" value="{{$reserva->cantidadDePersonas}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Fecha de ingreso</label>
        <input id="fechaDeIngreso" name="fechaDeIngreso" type="date" class="form-control" tabindex="1" value="{{$reserva->fechaDeIngreso}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Fecha de salida</label>
        <input id="fechaDeSalida" name="fechaDeSalida" type="date" class="form-control" tabindex="1" value="{{$reserva->fechaDeSalida}}">
    </div>

    <a href="/reserva" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </div>

</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
