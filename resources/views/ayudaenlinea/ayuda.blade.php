@extends('adminlte::page')

@section('title', 'AYUDA EN LÍNEA')

@section('content_header')
    <h1><strong> Ayuda en línea</strong></h1>
    <br>

@stop

@section('content')
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="row">
                        <!--tarjeta 1-->
                        <div class="col-lg-4 col-md-12 mb-4">
                            <div class="card-section  border rounded border-dark">
                              <div class="card-header bg-success border-dark ">
                                      <h2 class="card-header-title text-white pt-1">USUARIOS</h2>
                                  </div>
                                <div class="card-body text-center">
                                    <p><a href="#">¿Cómo crear un usuario?</a></p>
                                    <p><a href="#">¿Cómo editar un usuario?</a></p>
                                    <p><a href="#">¿Cómo ver detalle un usuario?</a></p>
                                    <p><a href="#">¿Cómo cambiar el estado de un usuario?</a></p>


                                </div>
                              </div>
                        </div>
                        <!--tarjeta 2-->
                        
                         <div class="col-lg-4 col-md-12 mb-4">
                            
                            <div class="card-section  border rounded border-dark">
                              <div class="card-header bg-success border-dark">
                                    <h2 class="card-header-title text-white pt-1">CLIENTES</h2>
                                </div>
                              <div class="card-body text-center">
                                <p><a href="#">¿Cómo crear un cliente?</a></p>
                                <p><a href="#">¿Cómo editar un cliente?</a></p>
                                <p><a href="#">¿Cómo ver detalle un cliente?</a></p>
                                <p><a href="#">¿Cómo cambiar el estado de un cliente?</a></p>
                              </div>
                            </div>
                      </div>
                      
                        <!--tarjeta 3-->
                            
                        <div class="col-lg-4 col-md-12 mb-4">
                            <div class="card-section border rounded border-dark">
                              <div class="card-header bg-success  border-dark">
                                    <h2 class="card-header-title text-white pt-1">RESERVAS</h2>
                                </div>
                              <div class="card-body text-center">

                                <p><a href="https://youtu.be/9NszrQLvfzs" target="_blank">¿Cómo crear una reserva?</a></p>
                                <p><a href="https://youtu.be/D69gFWNMmwI" target="_blank">¿Cómo editar una reserva?</a></p>
                                <p><a href="https://youtu.be/us7wtdNre7s" target="_blank">¿Cómo ver detalle una reserva?</a></p>
                                <p><a href="https://youtu.be/EsToZ2wgklU" target="_blank">¿Cómo cambiar el estado de una reserva?</a></p>

                              </div>
                            </div>
                      </div>

                      <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <div class="row">
                                    <!--tarjeta 4-->
                                    <div class="col-lg-4 col-md-12 mb-4">
                                        <div class="card-section  border rounded border-dark">
                                          <div class="card-header bg-success border-dark">
                                                  <h2 class="card-header-title text-white pt-1">HABITACIONES</h2>
                                              </div>
                                            <div class="card-body text-center">
                                                <p><a href="#">¿Cómo crear una habitacion?</a></p>
                                                <p><a href="#">¿Cómo editar una habitacion?</a></p>
                                                <p><a href="#">¿Cómo ver detalle una habitacion?</a></p>
                                                <p><a href="#">¿Cómo cambiar el estado de una habitacion?</a></p>
                                            </div>
                                          </div>
                                    </div>
                                    <!--tarjeta 5-->
                                    
                                     <div class="col-lg-4 col-md-12 mb-4">
                                        
                                        <div class="card-section  border rounded border-dark">
                                          <div class="card-header bg-success  border-dark">
                                                <h2 class="card-header-title text-white pt-1">PERFIL</h2>
                                            </div>
                                          <div class="card-body text-center">
                                            <p><a href="#">¿Cómo actualizar información del perfil?</a></p>
                                            <p><a href="#">¿Cómo actualizar contraseña?</a></p>
                                            <p><a href="#">¿Cómo cerrar sesiónes activas en otros navegadores?</a></p>
                                            <p><a href="#">¿Cómo eliminar cuenta permanentemente?</a></p>
                                          </div>
                                        </div>
                                  </div>
                                  
                                  
                                   

                    </div>
                </div>
            </div>
        </div>

</body>
</html>

@stop

@section('css')
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@stop