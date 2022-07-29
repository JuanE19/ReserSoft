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
        <input id="nombrecompleto" name="nombrecompleto" type="text" class="form-control" maxlength="45" required="" value="{{$cliente->NombreCompleto}}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Documento</label>
            <input id="documento" name="documento" type="text" class="form-control" maxlength="20" required="" value="{{$cliente->Documento}}">
            </div>    

            <div class="mb-3">
                <label for="" class="form-label">Correo</label>
                <input id="correo" name="correo" type="text" class="form-control" maxlength="45" required="" value="{{$cliente->Correo}}">
                </div>   

            <div class="mb-3">
                <label for="" class="form-label">Telefono</label>
                <input id="telefono" name="telefono" type="text" class="form-control" maxlength="20"required="" value="{{$cliente->Telefono}}">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Direccion</label>
                    <input id="direccion" name="direccion" type="text" class="form-control" maxlength="20" required="" value="{{$cliente->Direccion}}">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Tipo de Documento</label>
                        <select name="tipodocumento" id="tipodocumento">
                    </div> required="">
                            <option value="">Seleccione</option>
                            <?php foreach ($tipodocumento as $td) { ?>
                                <option value="{{$td['id']}}">{{$td['nombre']}}</option>
                            <?php } ?>
                        </select>
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