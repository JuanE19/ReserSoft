@extends('layouts.plantillareserva')

@section('contenido')
<a href="reserva/create" class="btn btn-primary">Crear</a>

<table class="table table-dark table-striped mt-4">
    <thead>
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
            <td>{{ $reserva->FechaDeIngreso}}</td>
            <td>{{ $reserva->FechaDeSalida}}</td>
            <td>{{ $reserva->precio}}</td>
            <td>{{ $reserva->TipoDeHabitacion}}</td>
            <td>
                <a href="/reserva/{{ $reserva->id}}/edit" class="btn btn-info">Editar</a>
                <button class="btn btn-danger">Eliminar</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection