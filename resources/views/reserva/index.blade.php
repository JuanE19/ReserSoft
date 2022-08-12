@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Reservas</h1>
@stop

@section('content')
<div class="container">
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
</div>

<div class="container w-80">
    <table id="dataTableReserva" class="table table-striped table-bordered shadow-lg mt-4">
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
                        <a href="/reserva/{{ $reserva->id}}/edit" class="bi bi-pencil-square">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@stop

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="/css/admin_custom.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('#dataTableReserva').DataTable({
            language: {
                "url": "https://cdn.datatables.net/plug-ins/1.12.1/i18n/es-ES.json"
            }
        });
    });
</script>
@stop