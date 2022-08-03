@extends('adminlte::page')

@section('title', 'CLIENTES')

@section('content_header')
<h1><b>LISTADO DE CLIENTES</b></h1>
@stop

@section('content')

<!--Alertas Personalizadas-->
@include('components.flash_alerts')

<a href="clientes/create" class="bi bi-person-plus-fill btn btn-success "><b> Crear Nuevo</b></a>
<table id="clientes" class="table table-striped table-bordered shadow-lg mt-1" style="width:100%">
    <br>
    <br>
    <thead class="bg-green text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre Completo</th>
            <th scope="col">Documento</th>
            <th scope="col">Correo</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Dirección</th>
            <th scope="col">Tipo de Documento</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clientes as $cliente)
        <tr>
            <td>{{ $cliente->id }}</td>
            <td>{{ $cliente->NombreCompleto }}</td>
            <td>{{ $cliente->Documento }}</td>
            <td>{{ $cliente->Correo }}</td>
            <td>{{ $cliente->Telefono }}</td>
            <td>{{ $cliente->Direccion }}</td>
            <td>{{ $cliente->datosdocumento->nombre}}</td>

            <td>

                <form action="{{ route ('clientes.destroy', $cliente->id)}}" method="POST">

                     
                            <!-- Boton Modal Detalle -->
                            <button type="button" class="btn btn-success bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#cliente">
                            </button>
                            <!-- Modal Detalle -->
                            <div class="modal fade" id="cliente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-green text-white">
                                            <h5 class="modal-title" id="exampleModalLabel"><strong>Información del Cliente</strong></h5>

                                    </div>
                                        <div class="modal-body">
                                    
                                        <strong>ID:</strong> <br>
                                        <strong>Nombre Completo:</strong> <br>                        
                                        <strong>Correo:</strong><br>
                                        <strong>Teléfono:</strong><br>
                                        <strong>Dirección:</strong><br>     
                                        <strong>Tipo de Documento:</strong>

                                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
            </div>
            </div>
            </div> 


        <a href="/clientes/{{ $cliente->id}}/edit" class="btn btn-info fas fa-edit"></a>

        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">
            <i class="fas fa-trash"></i>
        </button>
        </form>
        </td>
        </tr>
        
        @endforeach

    </tbody>

</table>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        $('#clientes').DataTable({
            language: {
                "url": "https://cdn.datatables.net/plug-ins/1.12.1/i18n/es-ES.json"

            }

        });
    });
</script>


@stop