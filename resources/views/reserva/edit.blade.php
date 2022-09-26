@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Editar Reserva</h1>
@stop

@section('content')
<form action="/reserva/{{$reserva->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="container">

        <div class="input-group mb-3">
            <span class="input-group-text mx-2">Documento del cliente</span>
            <input name="cliente_id" id="cliente_id" readonly placeholder="{{ $reserva->traerCliente->Documento }}">
            </input>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text mx-2">Fecha de ingreso</span>
            <input id="fechaDeIngreso" type="text" name="fechaDeIngreso" placeholder="{{ $reserva->fechaDeIngreso }}" autocomplete="off" required="">

            <span class="input-group-text mx-2">Fecha de salida</span>
            <input id="fechaDeSalida" type="text" name="fechaDeSalida" placeholder="{{ $reserva->fechaDeSalida }}" utocomplete="off" required="">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text mx-2">Habitaciones</span>
            <select class="js-example-basic-single" style="width: 50%" name="habitacion_id" id="habitacion_id" required="" autocomplete="off">
                <option value="">{{$reserva->traerHabitacion->numeroDeHabitacion}}</option>
                <?php foreach ($habitacion_id as $td) { ?>
                    <option value="{{$td['id']}}">Habitación #{{$td['numeroDeHabitacion']}}</option>
                <?php } ?>
            </select>
        </div>

        <a href="/reserva" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-success" tabindex="4">Guardar</button>
    </div>

</form>
@stop

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="/css/admin_custom.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">

<!-- calendar -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- calendar -->
<!-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script> -->
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script>
    $(function() {
        var dateFormat = "mm/dd/yy",
            from = $("#fechaDeIngreso")
            .datepicker({
                defaultDate: "+1w",
                changeMonth: true,
                numberOfMonths: 1
            })
            .on("change", function() {
                to.datepicker("option", "minDate", getDate(this));
            }),
            to = $("#fechaDeSalida").datepicker({
                defaultDate: "+1w",
                changeMonth: true,
                numberOfMonths: 1
            })
            .on("change", function() {
                from.datepicker("option", "maxDate", getDate(this));
            });

        function getDate(element) {
            var date;
            try {
                date = $.datepicker.parseDate(dateFormat, element.value);
            } catch (error) {
                date = null;
            }

            return date;
        }
    });
</script>
@stop