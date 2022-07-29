@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Reservas</h1>
@stop

@section('content')

<a href="reserva/create" class="btn btn-primary">Crear</a>

<div class="container">
<table class="table table-striped table-bordered shadow-lg mt-1">
    <thead class="bg-green text-white">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Cantidad de personas</th>
            <th scope="col">Fecha de ingreso</th>
            <th scope="col">Fecha de salida</th>
            <th scope="col">Precio</th>
            <th scope="col">Tipo de habitación</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($reservas as $reserva)
        <tr>
            <td>{{ $reserva->id}}</td>
            <td>{{ $reserva->cantidadDePersonas}}</td>
            <td>{{ $reserva->fechaDeIngreso}}</td>
            <td>{{ $reserva->fechaDeSalida}}</td>
            <td>{{ $reserva->precio}}</td>
            <td>{{ $reserva->tipoDeHabitacion}}</td>
            <td>
            <form action="{{ route  ('reserva.destroy', $reserva->id)}}" method="POST">
            <a href="/reserva/{{ $reserva->id}}/edit"  class="btn btn-info fas fa-edit"></a>

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
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop