@extends('adminlte::page')

@section('title', 'Crear Cliente')

@section('content_header')
<h1>Crear Cliente</h1>
@stop

@section('content')


<form action="/clientes" method="POST">
    @csrf
    <div class="container m-4 w-50">
        <div class="mb-3">
            <label for="" class="form-label">Nombre Completo <span style="color:red">*</span> </label>
            <input id="nombrecompleto" name="nombrecompleto" placeholder="ej. Juan Perez" type="text" class="form-control" value="{{old('nombrecompleto')}}" tabindex="1" maxlength="45" required="">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Documento <span style="color:red">*</span></label>  
            <input id="documento" name="documento" placeholder="ej. 10000000"  type="text" class="form-control @error('documento') is-invalid @enderror" value="{{old('documento')}}" tabindex="1" maxlength="45" required="">
            @error('documento')
            <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Correo <span style="color:red">*</span></label>
            <input id="correo" name="correo" placeholder="ej. juan@gmail.com" type="email" class="form-control @error('correo') is-invalid @enderror" value="{{old('correo')}}" tabindex="1" maxlength="45" required="">
            @error('correo')
            <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Telefono <span style="color:red">*</span></label>
            <input id="telefono" name="telefono" placeholder="ej. 31271561" type="text" class="form-control" value="{{old('telefono')}}" tabindex="1" maxlength="20" required="">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Direccion <span style="color:red">*</span></label>
            <input id="direccion" name="direccion" placeholder="ej. calle 103" type="text" class="form-control" value="{{old('direccion')}}" tabindex="1" maxlength="20" required="">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Tipo de Documento <span style="color:red">*</span></label>
            <select class="form-select" name="tipodocumento" id="tipodocumento" required="">
                <option value="">Seleccione</option>
                <?php foreach ($tipodocumento as $td) { ?>
                    <option value="{{$td['id']}}">{{$td['nombre']}}</option>
                <?php } ?>
            </select>
        </div>
    </div>
    <a href="/clientes" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

</form><br><br>



@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
@stop

@section('js')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
@stop