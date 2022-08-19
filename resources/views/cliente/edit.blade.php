@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1><b>Editar Cliente</b></h1>
@stop

@section('content')
  


<form action ="/clientes/{{$cliente->id}}" method="POST">
    @csrf
    @method('PUT')

    <div class="container m-4 w-50">
    <div class="mb-3">
        <label for="" class="form-label">Nombre Completo <span style="color:red">*</span></label>
        <input id="nombrecompleto" name="nombrecompleto" type="text" class="form-control" maxlength="45" required="" value="{{$cliente->NombreCompleto}}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Documento <span style="color:red">*</span></label>
            <input id="documento" name="documento" type="text" class="form-control @error('documento') is-invalid @enderror" maxlength="20" required="" value="{{ old('documento', $cliente->Documento)}}">
            @error('documento')
            <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
            </div>    

            <div class="mb-3">
                <label for="" class="form-label">Correo <span style="color:red">*</span></label>
                <input id="correo" name="correo" type="email" class="form-control @error('correo') is-invalid @enderror" maxlength="45" required="" value="{{ old('correo', $cliente->Correo)}}">
                @error('correo')
                <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
                </div>   

            <div class="mb-3">
                <label for="" class="form-label">Telefono <span style="color:red">*</span></label>
                <input id="telefono" name="telefono" type="text" class="form-control" maxlength="20"required="" value="{{$cliente->Telefono}}">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Direccion <span style="color:red">*</span></label>
                    <input id="direccion" name="direccion" type="text" class="form-control" maxlength="20" required="" value="{{$cliente->Direccion}}">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Tipo de Documento <span style="color:red">*</span></label>
                        <select class="form-select" name="tipodocumento" id="tipodocumento" required="">
                    </div> 
                    
                            <option value="">Seleccione </option>
                            <?php foreach ($tipodocumento as $td) { ?>
                                <option value="{{$td['id']}}">{{$td['nombre']}}</option>
                            <?php } ?>
                        </select>
                        </div>
            </div>
                        <a href="/clientes" class= "btn btn-secondary" tabindex="5">Cancelar</a>
                        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
                        
</form><br><br>
                

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
@stop

@section('js')
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
@stop