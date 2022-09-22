@extends('adminlte::page')

@section('title', 'Crear Usuario')

@section('content_header')
    <h1>Crear Usuario</h1>
@stop

@section('content')

<form action ="/usuario" method="POST">
    @csrf
    <div class="container m-4 w-50">
    
    <div class="mb-3">
        <label for="" class="form-label">Nombre<span style="color:red">*</span></label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1" maxlength="45" required="">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Apellido<span style="color:red">*</span></label>
        <input id="apellido" name="apellido" type="text" class="form-control" tabindex="2" maxlength="45" required="">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Teléfono<span style="color:red">*</span></label>
        <input id="telefono" name="telefono" type="text" class="form-control" tabindex="3" maxlength="45" required="">
    </div>  

    <div class="mb-3">
        <label for="" class="form-label">Dirección<span style="color:red">*</span></label>
        <input id="direccion" name="direccion" type="text" class="form-control" tabindex="4" maxlength="45" required="">
    </div>  

    <div class="mb-3">
        <label for="" class="form-label">Correo <span style="color:red">*</span> </label>
        <input id="correo" name="correo" type="email" class="form-control @error('correo') is-invalid @enderror" value="{{old('correo') }}" tabindex="5" maxlength="45" required="">
        @error('correo')

        <span class="invalid-feedback" role="alert">
            <strong> {{$message}} </strong>
        </span>
        @enderror
    </div>  

    <div class="mb-3">
        <label for="" class="form-label">Contraseña <span style="color:red">*</span> </label>
        <input id="password" name="password" type="password" class="form-control" tabindex="6" maxlength="45" required="">
    </div>  

    <a href="/usuario" class= "btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
                        
</form><br><br>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
@stop