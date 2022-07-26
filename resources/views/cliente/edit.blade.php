@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Cliente</h1>
@stop

@section('content')
  


<form action ="/clientes/{{$cliente->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Nombre Completo</label>
        <input id="nombrecompleto" name="nombrecompleto" type="text" class="form-control" value="{{$cliente->nombrecompleto}}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Documento</label>
            <input id="documento" name="documento" type="text" class="form-control" class="{{$cliente->documento}}">
            </div>    

            <div class="mb-3">
                <label for="" class="form-label">Correo</label>
                <input id="correo" name="correo" type="text" class="form-control" class="{{$cliente->correo}}">
                </div>   

            <div class="mb-3">
                <label for="" class="form-label">Telefono</label>
                <input id="telefono" name="telefono" type="text" class="form-control" class="{{$cliente->telefono}}">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Direccion</label>
                    <input id="direccion" name="direccion" type="text" class="form-control" class="{{$cliente->direccion}}">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Fecha de Nacimiento</label>
                        <input id="fechanacimiento" name="fechanacimiento" type="date" class="form-control" {{$cliente->fechanacimiento}}>
                        </div>
            
                        <a href="/clientes" class= "btn btn-secondary" tabindex="5">Cancelar</a>
                        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
                        
</form>
                

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop