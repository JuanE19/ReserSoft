@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Reservas</h1>
@stop

@section('content')

<!-- <a href="reserva/create" class="btn btn-success">Crear reserva</a> -->

<form action="/reserva" method="POST">
    @csrf
    <div class="input-group mb-3">
        <input id="nombre" name="nombre" class="form-control" placeholder="Nombre" aria-label="Nombre" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3">
        <input id="apellido" name="apellido" class="form-control" placeholder="apellido" aria-label="apellido" aria-describedby="basic-addon2">

    </div>

    <label for="basic-url" class="form-label">Fechas</label>

    <div class="input-group mb-3">
        <span class="input-group-text">Llegada</span>
        <input id="fechaDeIngreso" name="fechaDeIngreso" type="date" class="form-control mx-2">
        <span class="input-group-text">Salida</span>
        <input id="fechaDeSalida" name="fechaDeSalida" type="date" class="form-control mx-2">
        <input id="cantidadDePersonas" name="cantidadDePersonas" type="text" class="form-control mx-2" placeholder="Cantidad de personas" aria-label="Cantidad de personas" aria-describedby="basic-addon2">
        <button type="submit" class="btn btn-success" tabindex="4">Guardar</button>
    </div>

</form>

<div class="container w-80">
    <table class="table table-striped table-bordered shadow-lg mt-4">
        <thead class="bg-green text-white">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Cantidad de personas</th>
                <th scope="col">Fecha de ingreso</th>
                <th scope="col">Fecha de salida</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservas as $reserva)
            <tr>
                <td>{{ $reserva->id}}</td>
                <td>{{ $reserva->nombre}}</td>
                <td>{{ $reserva->apellido}}</td>
                <td>{{ $reserva->cantidadDePersonas}}</td>
                <td>{{ $reserva->fechaDeIngreso}}</td>
                <td>{{ $reserva->fechaDeSalida}}</td>
                <td>
                    <form action="{{ route  ('reserva.destroy', $reserva->id)}}" method="POST">
                        <a href="/reserva/{{ $reserva->id}}/edit" class="btn btn-info fas fa-edit"></a>

                        @csrf
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="https://code.jsquery.com/jquery-3.2.1.js"></script>
<script type="text/javascript"></script>
<script>
    console.log('Hi!');
</script>
@stop