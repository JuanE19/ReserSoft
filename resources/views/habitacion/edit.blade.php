@extends('adminlte::page')

@section('title', 'Editar habitacion')

@section('content_header')
    <h1><b>Editar habitación</b></h1>
@stop
  
@section('content')

<form action="/habitaciones/{{$habitacion->id}}" method="POST">
    @csrf    
    @method('PUT')


  <div class="container m-4 w-50">
  <div class="mb-3">
  <label for="" class="form-label">Código</label>
  <input id="id" name="id" type="text" class="form-control" value="{{$habitacion->id}}">    
  </div>

  <?php
  
      $caracteristicas = $habitacion->caracteristicas;
      $array = explode(', ', $caracteristicas);
      foreach ($array as $a) {
        echo $a."<br>";
      }
  
  ?>

  
  <div class="mb-3">
  <label for="" class="form-label">Caracteristicas</label><span style="color:red">*</span></label>
  </div>

          <div class="form-check">
            <label class="form-check-label">
            <input class="checkbox" name="1" type="checkbox" class="ml-3" value="Cama individual"> 
            <span class="badge badge-secondary-btn btn-success"></i> Cama individual </span>
            </label>
          </div>

          <div class="form-check">
            <label class="form-check-label">
            <input class="checkbox" name="2" type="checkbox" class="ml-3" value="Cama doble"> 
            <span class="badge badge-secondary-btn btn-success"></i> Cama doble </span>
            </label>
          </div>

          <div class="form-check">
            <label class="form-check-label">
            <input class="checkbox" name="3" type="checkbox" class="ml-3" value="Quad"> 
            <span class="badge badge-secondary-btn btn-success"></i> Quad</span>
            </label>
          </div>

          <div class="form-check">
            <label class="form-check-label">
            <input class="checkbox" name="4" type="checkbox" class="ml-3" value="1 TV"> 
            <span class="badge badge-secondary-btn btn-success"></i> 1 TV </span>
            </label>
          </div>

          <div class="form-check">
            <label class="form-check-label">
            <input class="checkbox" name="5" type="checkbox" class="ml-3" value="2 TV"> 
            <span class="badge badge-secondary-btn btn-success"></i> 2 TV </span>
            </label>
          </div>

          <div class="form-check">
            <label class="form-check-label">
            <input class="checkbox" name="6" type="checkbox" class="ml-3" value="Agua Caliente"> 
            <span class="badge badge-secondary-btn btn-success"></i> Agua Caliente </span>
            </label>
          </div>

          <div class="form-check">
          <label class="form-check-label">
          <input class="checkbox" name="7" type="checkbox" class="ml-3" value="Aire acondicionado"> 
          <span class="badge badge-secondary- btn btn-success"></i> Aire acondicionado </span>
          </label>
          </div>

          <div class="form-check">
          <label class="form-check-label">
          <input class="checkbox" name="8" type="checkbox" class="ml-3" value="Ventilador"> 
          <span class="badge badge-secondary- btn btn-success"></i> Ventilador </span>
          </label>
          </div>

          <div class="form-check">
            <label class="form-check-label">
            <input class="checkbox" name="9" type="checkbox" class="ml-3" value="Vista Montaña"> 
            <span class="badge badge-secondary-btn btn-success"></i> Vista Montaña </span>
            </label>
          </div>

          <div class="form-check">
            <label class="form-check-label">
            <input class="checkbox" name="10" type="checkbox" class="ml-3" value="Baño privado">
            <span class="badge badge-secondary-btn btn-success"></i> Baño privado </span>
            </label>
          </div>

          <div class="form-check">
            <label class="form-check-label">
            <input class="checkbox" name="11" type="checkbox" class="ml-3" value="Sofá"> 
            <span class="badge badge-secondary-btn btn-success"></i> Sofá </span>
            </label>
          </div>

          <div class="form-check">
            <label class="form-check-label">
            <input class="checkbox" name="12" type="checkbox" class="ml-3" value="Servicio Wifi"> 
            <span class="badge badge-secondary-btn btn-success"></i> Servicio Wifi </span>
            </label>
          </div>

          

      <br>    

  <div class="mb-3">
  <label for="" class="form-label">Numero de la Habitacion <span style="color:red">*</span></label>
  <input id="numeroDeHabitacion" name="numeroDeHabitacion" type="number" class="form-control" maxlength="3" required="" value="{{$habitacion->numeroDeHabitacion}}">
  </div>



  <div class="mb-3">
  <label for="" class="form-label">Precio <span style="color:red">*</span></label>
  <input id="precio" name="precio" type="number" class="form-control" maxlength="20" required="" value="{{$habitacion->precio}}">
  </div>



  <div class="mb-3">
    <label for="" class="form-label">Tipo de habitacion<span style="color:red">*</span></label>
    <select class="form-select" name="tipodehabitacion" id="tipodehabitacion" required="">
  </div>

        <option value=""> Seleccione </option>
        <?php foreach ($tipo as $th) { ?>
            <option value="{{$th['id']}}">{{$th['tipohabitacion']}}</option>
        <?php } ?>
    </select>
    </div>
  </div>



  <a href="/habitaciones" class= "btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

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

  