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
  <label for="" class="form-label">Código de la habitación</label>
  <input id="id" name="id" type="text" class="form-control" disabled="disabled" value="{{$habitacion->id}}">    
  </div>
  
  <div class="mb-3">
  <label for="" class="form-label">Características</label><span style="color:red">*</span></label>
  </div>

<?php
$caracteristicas = $habitacion->caracteristicas;
$array = explode(', ', $caracteristicas);

  $cama1 = false;
  for ($i=0; $i < 12; $i++) {
        if (isset($array[$i])) {
          if($array[$i] == "Cama individual"){
            $cama1 = true;
?>
            <div class="form-check">
              <label class="form-check-label">
              <input class="checkbox" name="1" type="checkbox" class="ml-3" value="Cama individual" checked> 
              <span class="badge badge-secondary-btn btn-success"></i> Cama individual </span>
              </label>
            </div>
<?php }}}
  if($cama1 == false) { ?>
    <div class="form-check">
      <label class="form-check-label">
      <input class="checkbox" name="1" type="checkbox" class="ml-3" value="Cama individual"> 
      <span class="badge badge-secondary-btn btn-success"></i> Cama individual </span>
      </label>
    </div>
<?php }

  $cama2 = false;
  for ($i=0; $i < 12; $i++) {
    if (isset($array[$i])) {
      if($array[$i] == "Cama doble"){
        $cama2 = true;
?>
        <div class="form-check">
          <label class="form-check-label">
          <input class="checkbox" name="2" type="checkbox" class="ml-3" value="Cama doble" checked> 
          <span class="badge badge-secondary-btn btn-success"></i> Cama doble </span>
          </label>
        </div>
<?php }}}
  if($cama2 == false) { ?>
    <div class="form-check">
      <label class="form-check-label">
      <input class="checkbox" name="2" type="checkbox" class="ml-3" value="Cama doble"> 
      <span class="badge badge-secondary-btn btn-success"></i> Cama doble </span>
      </label>
    </div>
<?php }

  $quad = false;
  for ($i=0; $i < 12; $i++) {
    if (isset($array[$i])) {
      if($array[$i] == "Quad"){
        $quad = true;
?>                 
        <div class="form-check">
          <label class="form-check-label">
          <input class="checkbox" name="3" type="checkbox" class="ml-3" value="Quad" checked> 
          <span class="badge badge-secondary-btn btn-success"></i> Quad</span>
          </label>
        </div>
<?php }}} 
        if($quad == false) { ?>
          <div class="form-check">
            <label class="form-check-label">
            <input class="checkbox" name="3" type="checkbox" class="ml-3" value="Quad"> 
            <span class="badge badge-secondary-btn btn-success"></i> Quad</span>
            </label>
          </div>
<?php }
  $tv1 = false;
  for ($i=0; $i < 12; $i++) {
    if (isset($array[$i])) {
      if($array[$i] == "1 TV"){
        $tv1 = true;
?>         
        <div class="form-check">
          <label class="form-check-label">
          <input class="checkbox" name="4" type="checkbox" class="ml-3" value="1 TV" checked> 
          <span class="badge badge-secondary-btn btn-success"></i> 1 TV </span>
          </label>
        </div>
<?php }}} 
  if($tv1 == false) { ?>  
          <div class="form-check">
          <label class="form-check-label">
          <input class="checkbox" name="4" type="checkbox" class="ml-3" value="1 TV"> 
          <span class="badge badge-secondary-btn btn-success"></i> 1 TV </span>
          </label>
        </div>
<?php }
  $tv2 = false;
          for ($i=0; $i < 12; $i++) {
            if (isset($array[$i])) {
              if($array[$i] == "2 TV"){
                $tv2 = true;
?>
                <div class="form-check">
                  <label class="form-check-label">
                  <input class="checkbox" name="5" type="checkbox" class="ml-3" value="2 TV" checked> 
                  <span class="badge badge-secondary-btn btn-success"></i> 2 TV </span>
                  </label>
                </div>
<?php }}} 
  if($tv2 == false) { ?>  
            <div class="form-check">
            <label class="form-check-label">
            <input class="checkbox" name="5" type="checkbox" class="ml-3" value="2 TV"> 
            <span class="badge badge-secondary-btn btn-success"></i> 2 TV </span>
            </label>
          </div>   
    
<?php }
  $aguacaliente = false;
          for ($i=0; $i < 12; $i++) {
            if (isset($array[$i])) {
              if($array[$i] == "Agua Caliente"){
                $aguacaliente = true;
?>
                  <div class="form-check">
                    <label class="form-check-label">
                    <input class="checkbox" name="6" type="checkbox" class="ml-3" value="Agua Caliente" checked> 
                    <span class="badge badge-secondary-btn btn-success"></i> Agua Caliente </span>
                    </label>
                  </div>
<?php }}} 
  if($aguacaliente == false) { ?>  
    <div class="form-check">
      <label class="form-check-label">
      <input class="checkbox" name="6" type="checkbox" class="ml-3" value="Agua Caliente"> 
      <span class="badge badge-secondary-btn btn-success"></i> Agua Caliente </span>
      </label>
    </div> 
<?php }

  $aireacondicionado = false;
          for ($i=0; $i < 12; $i++) {
            if (isset($array[$i])) {
              if($array[$i] == "Aire acondicionado"){
                $aireacondicionado = true;
?>
          <div class="form-check">
            <label class="form-check-label">
            <input class="checkbox" name="7" type="checkbox" class="ml-3" value="Aire acondicionado" checked> 
            <span class="badge badge-secondary- btn btn-success"></i> Aire acondicionado </span>
            </label>
          </div>
<?php }}} 
  if($aireacondicionado == false) { ?>  
    <div class="form-check">
      <label class="form-check-label">
      <input class="checkbox" name="7" type="checkbox" class="ml-3" value="Aire acondicionado"> 
      <span class="badge badge-secondary- btn btn-success"></i> Aire acondicionado </span>
      </label>
    </div>
<?php }

  $aireacondicionado = false;
    for ($i=0; $i < 12; $i++) {
      if (isset($array[$i])) {
        if($array[$i] == "Ventilador"){
          $aireacondicionado = true;
?>
          <div class="form-check">
            <label class="form-check-label">
            <input class="checkbox" name="8" type="checkbox" class="ml-3" value="Ventilador" checked> 
            <span class="badge badge-secondary- btn btn-success"></i> Ventilador </span>
            </label>
          </div>
<?php }}} 
  if($aireacondicionado == false) { ?>  
          <div class="form-check">
          <label class="form-check-label">
          <input class="checkbox" name="8" type="checkbox" class="ml-3" value="Ventilador"> 
          <span class="badge badge-secondary- btn btn-success"></i> Ventilador </span>
          </label>
          </div>
<?php }

  $vistamontaña = false;
          for ($i=0; $i < 12; $i++) {
            if (isset($array[$i])) {
              if($array[$i] == "Vista Montaña"){
                $vistamontaña = true;
?>
                <div class="form-check">
                  <label class="form-check-label">
                  <input class="checkbox" name="9" type="checkbox" class="ml-3" value="Vista Montaña" checked> 
                  <span class="badge badge-secondary-btn btn-success"></i> Vista Montaña </span>
                  </label>
                </div>
<?php }}} 
  if($vistamontaña == false) { ?>  
    <div class="form-check">
      <label class="form-check-label">
      <input class="checkbox" name="9" type="checkbox" class="ml-3" value="Vista Montaña"> 
      <span class="badge badge-secondary-btn btn-success"></i> Vista Montaña </span>
      </label>
    </div>
<?php }

  $bañoprivado = false;
    for ($i=0; $i < 12; $i++) {
      if (isset($array[$i])) {
        if($array[$i] == "Baño privado"){
          $bañoprivado = true;
?>
          <div class="form-check">
            <label class="form-check-label">
            <input class="checkbox" name="10" type="checkbox" class="ml-3" value="Baño privado"checked>
            <span class="badge badge-secondary-btn btn-success"></i> Baño privado </span>
            </label>
          </div>
<?php }}} 
  if($bañoprivado == false) { ?>  
            <div class="form-check">
            <label class="form-check-label">
            <input class="checkbox" name="10" type="checkbox" class="ml-3" value="Baño privado">
            <span class="badge badge-secondary-btn btn-success"></i> Baño privado </span>
            </label>
          </div>
<?php }

  $sofa = false;
    for ($i=0; $i < 12; $i++) {
      if (isset($array[$i])) {
        if($array[$i] == "Sofá"){
          $sofa = true;
?>
          <div class="form-check">
            <label class="form-check-label">
            <input class="checkbox" name="11" type="checkbox" class="ml-3" value="Sofá" checked> 
            <span class="badge badge-secondary-btn btn-success"></i> Sofá </span>
            </label>
          </div>
<?php }}} 
  if($sofa == false) { ?>  
    <div class="form-check">
      <label class="form-check-label">
      <input class="checkbox" name="11" type="checkbox" class="ml-3" value="Sofá"> 
      <span class="badge badge-secondary-btn btn-success"></i> Sofá </span>
      </label>
    </div>
<?php }

  $serviciowifi = false;
          for ($i=0; $i < 12; $i++) {
            if (isset($array[$i])) {
              if($array[$i] == "Servicio Wifi"){
                $serviciowifi = true;
?>
                <div class="form-check">
                  <label class="form-check-label">
                  <input class="checkbox" name="12" type="checkbox" class="ml-3" value="Servicio Wifi" checked> 
                  <span class="badge badge-secondary-btn btn-success"></i> Servicio Wifi </span>
                  </label>
                </div>
<?php }}} 
  if($serviciowifi == false) { ?>  
    <div class="form-check">
      <label class="form-check-label">
      <input class="checkbox" name="12" type="checkbox" class="ml-3" value="Servicio Wifi"> 
      <span class="badge badge-secondary-btn btn-success"></i> Servicio Wifi </span>
      </label>
    </div>
<?php
        }
?>


      <br>    

  <div class="mb-3">
  <label for="" class="form-label">Número de la Habitación <span style="color:red">*</span></label>
  <input id="numeroDeHabitacion" name="numeroDeHabitacion" type="number" class="form-control" maxlength="3" required="" value="{{$habitacion->numeroDeHabitacion}}">
  </div>



  <div class="mb-3">
  <label for="" class="form-label">Precio <span style="color:red">*</span></label>
  <input id="precio" name="precio" type="number" class="form-control" maxlength="20" required="" value="{{$habitacion->precio}}">
  </div>



  <div class="mb-3">
    <label for="" class="form-label">Tipo de habitación<span style="color:red">*</span></label>
    <select class="form-select form-select-sm" name="tipodehabitacion" id="tipodehabitacion" required="">
  </div>

        <option value="{{$habitacion->id}}">{{$habitacion->datostipohabitacion->tipohabitacion}}</option>
        <?php foreach ($tipo as $th) { ?>
            <option value="{{$th['id']}}">{{$th['tipohabitacion']}}</option>
        <?php } ?>
    </select>
    </div>
  </div>



  <a href="/habitaciones" class= "btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary-btn btn-success" tabindex="4">Guardar</button>
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

  