@extends('adminlte::page')

@section('title', 'Crear Cliente')

@section('content_header')
    <h1>Crear Cliente</h1>
@stop

@section('content')
    
<form action ="/clientes" method="POST">
    @csrf
    <div class="container m-4 w-50">
    <div class="mb-3">
        <label for="" class="form-label">Nombre Completo</label>
        <input id="nombrecompleto" name="nombrecompleto" type="text" class="form-control" tabindex="1" maxlength="45" required="">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Documento</label>
            <input id="documento" name="documento" type="text" class="form-control" tabindex="1" maxlength="45" required="">
            </div>    

            <div class="mb-3">
                <label for="" class="form-label">Correo</label>
                <input id="correo" name="correo" type="email" class="form-control" tabindex="1" maxlength="45" required="">
                </div>   

            <div class="mb-3">
                <label for="" class="form-label">Telefono</label>
                <input id="telefono" name="telefono" type="text" class="form-control" tabindex="1" maxlength="20"required="">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Direccion</label>
                    <input id="direccion" name="direccion" type="text" class="form-control" tabindex="1" maxlength="20" required="">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Tipo de Documento</label>
                        <select name="tipodocumento" id="tipodocumento" required="">
                            <option value="">Seleccione</option>
                            <?php foreach ($tipodocumento as $td) { ?>
                                <option value="{{$td['id']}}">{{$td['nombre']}}</option>
                            <?php } ?>
                        </select>
                        </div>
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