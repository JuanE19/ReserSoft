@extends('adminlte::page')

@section('title', 'USUARIOS')

@section('content_header')
<h1><b>LISTADO DE USUARIOS</b></h1>
@stop

@section('content')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<a href="usuario/create" class="bi bi-person-plus-fill btn btn-success "><b> Crear Nuevo</b></a>

<table id="usuarios" class="table shadow-lg mt-4" style="width:100%">
<br>
    <br>
    <thead class="bg-success">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Dirección</th>
            <th scope="col">Correo</th>
            <th scope="col">Estado</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($usuarios as $usuario)
        <tr>
            <td>{{ $usuario->id }}</td>
            <td>{{ $usuario->nombre }}</td>
            <td>{{ $usuario->telefono }}</td>
            <td>{{ $usuario->direccion }}</td>
            <td>{{ $usuario->correo }}</td>
            
            
            <td> @if ($usuario->estado == 1)
            <h6 style="color: green"><strong style="color: black"></strong>Activo</h6>
                @else
                <h6 style="color: red"><strong style="color: black"></strong>Inactivo</h6>
                @endif

                <form class="custom-control custom-switch" action="{{ route('usuarioEstado', $usuario) }}" method="post">
                    @csrf
                    @if ($usuario->estado == 1)
                    <input type="checkbox" onChange="this.form.submit()" class="custom-control-input" id="customSwitch{{$usuario->id}}" checked>
                    <label class="custom-control-label" for="customSwitch{{$usuario->id}}"></label>
                    @else
                    <input type="checkbox" onChange="this.form.submit()" class="custom-control-input" id="customSwitch{{$usuario->id}}">
                    <label class="custom-control-label" for="customSwitch{{$usuario->id}}"></label>
                    @endif
                </form>

            </td>
            
            
            <td>
            <a href="/usuario/{{ $usuario->id}}/edit" class="btn btn-light border fas fa-edit"></a>


            <button type="button" class="btn btn-light border bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#usuario{{$usuario->id}}">
            </button>

            <div class="modal fade" id="usuario{{$usuario->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-green text-white">
                                            <h5 class="modal-title" id="exampleModalLabel"><strong>Información del Usuario</strong></h5>

                                    </div>
                                        <div class="modal-body">
                                    
                                        <strong>ID:</strong> {{$usuario->id}} <br>
                                        <strong>Nombre Completo:</strong> {{$usuario->nombre}}<br>
                                        <strong>Teléfono:</strong> {{$usuario->telefono}} <br>
                                        <strong>Dirección:</strong> {{$usuario->direccion}} <br>     
                                        <strong>Correo:</strong> {{$usuario->correo}}

                                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
            
            @if ( session('message') )        
                <script>
                Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'El usuario ha sido registrado',
                showConfirmButton: false,
                timer: 1500 })
                </script>
            @endif

            @if ( session('info') )        
                <script>
                Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'El usuario ha sido actualizado correctamente',
                showConfirmButton: false,
                timer: 1500 })
                </script>
            @endif

            @if ( session('estate') )        
                <script>
                Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'El estado de usuario ha sido cambiado con éxito',
                showConfirmButton: false,
                timer: 1500 })
                </script>
            @endif

            </div>
            </div>
            </div> 
            </td>
            

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
        $('#usuarios').DataTable({
            language: {
                "url": "https://cdn.datatables.net/plug-ins/1.12.1/i18n/es-ES.json"
            }
        });
    });
</script>
@stop