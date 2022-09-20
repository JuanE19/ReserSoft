@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Reservas</h1>
@stop

@section('content')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Crear reserva -->
<div class="container">
    <form action="/reserva" method="POST">
        @csrf

        <div class="input-group mb-3">
            <span class="input-group-text mx-2">Documento del cliente</span>
            <select class="js-example-basic-single" style="width: 50%" name="cliente_id" id="cliente_id" required="">
                <option value="">Seleccione</option>
                <?php foreach ($cliente_id as $td) { ?>
                    <option value="{{$td['id']}}">{{$td['Documento']}}</option>
                <?php } ?>
            </select>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Ingreso</span>
            <input id="fechaDeIngreso" name="fechaDeIngreso" type="date" class="form-control mx-2" required="">

            <span class="input-group-text">Salida</span>
            <input id="fechaDeSalida" name="fechaDeSalida" type="date" class="form-control mx-2" required="">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text mx-2"># de habitación</span>
            <select class="js-example-basic-single" style="width: 50%" name="habitacion_id" id="habitacion_id" required="">
                <option value="">Seleccione</option>
                <?php foreach ($habitacion_id as $td) { ?>
                    <option value="{{$td['id']}}">{{$td['tipoDeHabitacion']}}</option>
                <?php } ?>
            </select>
            <button type="submit" class="btn btn-success mx-2" tabindex="4">Guardar</button>
        </div>
    </form>
</div>


<!-- tabla -->
<div class="container w-80">
    <table id="dataTableReserva" class="table shadow-lg mt-4">
        <thead class="bg-success">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Documento</th>
                <th scope="col">Fecha de ingreso</th>
                <th scope="col">Acciones</th>
                <th scope="col">Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservas as $reserva)
            <tr>
                <td>{{ $reserva->id}}</td>
                <td>{{ $reserva->traerCliente->NombreCompleto}}</td>
                <td>{{ $reserva->traerCliente->Documento}}</td>
                <td>{{ $reserva->fechaDeIngreso}}</td>
                <td>
                    <form action="{{ route  ('reserva.destroy', $reserva->id)}}" method="POST">
                        <a href="/reserva/{{ $reserva->id}}/edit" class="btn btn-light bi bi-pencil-square border"></a>
                        <button type="button" class="btn btn-light bi bi-eye-fill border" data-bs-toggle="modal" data-bs-target="#reserva{{$reserva->id}}">
                        </button>
                </td>

                <!-- Alertas -->
                @if ( session('message') )
                <script>
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'La reserva se ha registrado exitosamente',
                        showConfirmButton: false,
                        timer: 1500
                    })
                </script>
                @endif

                @if ( session('info') )
                <script>
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'La reserva se ha actualizado exitosamente',
                        showConfirmButton: false,
                        timer: 1500
                    })
                </script>
                @endif

                @if ( session('estate') )
                <script>
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'El estado de la reserva ha sido cambiada con éxito',
                        showConfirmButton: false,
                        timer: 1500
                    })
                </script>
                @endif

                <!-- Estado -->
                <td>
                    <form class="custom-control custom-switch" action="{{ route('estadoReserva', $reserva) }}" method="post">
                        @csrf
                        @if ($reserva->estado == 0)
                        <select style="color:red; " onChange="this.form.submit()" name="estado" aria-label="Default select example">
                            <option style="color:red;" selected value="0">En proceso</option>
                            <option style="color:orange;" value="1">Tomada</option>
                            <option style="color:green;" value="2">Finalizada</option>
                        </select>
                        @else @if ($reserva->estado == 1)
                        <select style="color:orange;" onChange="this.form.submit()" name="Estado" aria-label="Default select example">
                            <option style="color: orange" selected value="1">Tomada</option>
                            <option style="color: green" value="2">Finalizada</option>
                        </select>
                        @else
                        <select style="color:green;" onChange="this.form.submit()" name="estado" aria-label="Default select example">
                            <option style="color: green" selected value="2">Finalizada</option>
                        </select>
                        @endif
                        @endif
                    </form>
                </td>
            </tr>

            <!-- Modal -->
            <div class="modal fade" id="reserva{{$reserva->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-success">
                            <h5 class="modal-title" id="exampleModalLabel">Detalle Reserva</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <strong>Id:</strong> {{ $reserva->id }} <br>
                            <strong>Nombre:</strong> {{ $reserva->traerCliente->NombreCompleto }} <br>
                            <strong>Documento:</strong> {{ $reserva->traerCliente->Documento }} <br>
                            <strong>Telefono:</strong> {{ $reserva->traerCliente->Telefono }} <br>
                            <strong>Tipo de habitacion:</strong> {{ $reserva->traerHabitacion->tipoDeHabitacion}}<br>
                            <strong>Caracteristicas:</strong> {{ $reserva->traerHabitacion->caracteristicas}}<br>
                            <strong>Precio:</strong> {{ $reserva->traerHabitacion->precio}}<br>
                            <strong>Fecha de ingreso:</strong> {{ $reserva->fechaDeIngreso }} <br>
                            <strong>Fecha de salida:</strong> {{ $reserva->fechaDeSalida }} <br>
                        </div>
                    </div>
                </div>
            </div>
        </tbody>
        @endforeach
    </table>
</div>

@stop

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="/css/admin_custom.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">


<!-- datatable -->
<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

<!-- select -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


{{-- Datatable --}}
<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
{{-- Fin --}}

@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

{{-- Datatable --}}
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
{{-- Fin --}}

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

<!-- datatable -->
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#dataTableReserva').DataTable({
            language: {
                "url": "https://cdn.datatables.net/plug-ins/1.12.1/i18n/es-ES.json"
            }
        });
    });
</script>

<!-- select -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
</script>
@stop