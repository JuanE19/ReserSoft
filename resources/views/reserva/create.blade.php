@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Reservas</h1>
@stop

@section('content')
<form action="/reserva" method="POST">
    @csrf
    <div class="container">
    <div class="mb-3">
        <label for="" class="form-label">Cantidad de personas</label>
        <input id="cantidadDePersonas" name="cantidadDePersonas" type="text" class="form-control" tabindex="1" required maxlength="20">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Fecha de ingreso</label>
        <input id="fechaDeIngreso" name="fechaDeIngreso" type="date" class="form-control" tabindex="1" required maxlength="20">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Fecha de salida</label>
        <input id="FechaDeSalida" name="FechaDeSalida" type="date" class="form-control" tabindex="1" required maxlength="20">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Precio</label>
        <input id="precio" name="precio" type="text" class="form-control" tabindex="1" required maxlength="20">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Tipo de Habitación</label>
        <input id="tipoDeHabitacion" name="tipoDeHabitacion" type="text" class="form-control" tabindex="1" required maxlength="20">
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