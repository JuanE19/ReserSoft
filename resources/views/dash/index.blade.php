@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
<br>
<h1 class="mb-5 text-center">Centro Recreativo<span class="text-success"> Barbosa</span>.</h1>
<section>
    <div class="container w-50 m-auto text-center">
        <p class="fs-4 ">Somos un espacio familiar para el descanso y la diversión.</p>
    </div>

    <div class="mt-2 text-center">
        <img src="../img/centro.jpg" alt="Centro Recreativo Barbosa" width="750px" height="350px" style="margin-bottom: 40px;">
    </div>

    <div id="local" class="border-top border-2">
        <div>
            <div>
                <b class="mb-5 fs-4"> Ubicados en el km 62, Barbosa, Colombia.</b>
                <p class="fs-6 text-body"><span class="text-success">Celular:</span> 323 5077500</p>
                <p class="fs-6 text-body"><span class="text-success">Correo:</span> centrorecreativobarbosa@gmail.com</p>
            </div>
        </div>
    </div>

</section>
@stop

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="/css/admin_custom.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop