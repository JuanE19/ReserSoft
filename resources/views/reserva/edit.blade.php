@extends('layouts.plantillareserva')

@section('contenido')
<form action="/reserva/{{reserva->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Cantidad de personas</label>
        <input id="cantidadDePersonas" name="cantidadDePersonas" type="text" class="form-control" tabindex="1" value="{{$articulo->cantidadDePersonas}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Fecha de ingreso</label>
        <input id="fechaDeIngreso" name="fechaDeIngreso" type="date" class="form-control" tabindex="1" value="{{$articulo->fechaDeIngreso}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Fecha de salida</label>
        <input id="FechaDeSalida" name="FechaDeSalida" type="date" class="form-control" tabindex="1" value="{{$articulo->FechaDeSalida}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Precio</label>
        <input id="precio" name="precio" type="text" class="form-control" tabindex="1" value="{{$articulo->precio}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Tipo de Habitación</label>
        <input id="tipoDeHabitacion" name="tipoDeHabitacion" type="text" class="form-control" tabindex="1" value="{{$articulo->tipoDeHabitacion}}">
    </div>

    <a href="/reserva" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

</form>
@endsection