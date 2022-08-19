@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Reserva</h1>
@stop

@section('content')
<form action="/reserva/{{$reserva->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="container m-4 w-50">

    <div class="mb-3">
        <label for="" class="form-label">Fecha de ingreso</label>
        <input id="fechaDeIngreso" name="fechaDeIngreso" type="date" class="form-control" tabindex="1" value="{{$reserva->fechaDeIngreso}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Fecha de salida</label>
        <input id="fechaDeSalida" name="fechaDeSalida" type="date" class="form-control" tabindex="1" value="{{$reserva->fechaDeSalida}}">
    </div>

    <a href="/reserva" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-success" tabindex="4">Guardar</button>
    </div>

</form>
@stop

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="/css/admin_custom.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
@stop