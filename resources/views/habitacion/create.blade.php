@extends('adminlte::page')

@section('title', 'Crear Habitacion')

@section('content_header')

    <h1>Agregar habitación </h1>
@stop

@section('content')

    <form action ="/habitaciones" method="POST">
    @csrf

        <div class="container m-4 w-50">
        <div class="mb-3">
            <label for="" class="form-label">Numero de la Habitacion</label>
            <input id="numerodehabitacion" name="numerodehabitacion" type="number" class="form-control" tabindex="1">
            </div>    

            <div class="mb-3">
                <label for="" class="form-label">Precio</label>
                <input id="precio" name="precio" type="number" class="form-control" tabindex="1">
                </div>   

            <div class="mb-3">
                <label for="" class="form-label">Tipo de habitacion</label>
                <input id="tipodehabitacion" name="tipodehabitacion" type="text" class="form-control" tabindex="1">
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
