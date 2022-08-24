@extends('adminlte::page')

@section('title', 'Habitaciones')

@section('content_header')
    <h1><b>HABITACIONES</b></h1>
@stop

@section('content')

<!-- Button trigger modal -->
<button type="button" href="habitaciones/create" class="bi bi-person-plus-fill btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
  + Agregar habitacion
</button>
<br><br>  

<!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
   <h5 class="modal-title" id="exampleModalLabel"> Agregar habitación</h5>
   </div>


   <div class="modal-body">
   <form action ="/habitaciones" method="POST">
   @csrf


   <label for="" class="form-label">Caracteristicas mi fafa</label>
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
   <label for="" class="form-label">Numero de la Habitacion</label>
   <input id="numerodehabitacion" name="numerodehabitacion" placeholder="Ingresa el numero de la habitación" type="number" class="form-control" tabindex="1" maxlength="45" required="">
   </div>    

   <div class="mb-3">
   <label for="" class="form-label">Precio</label>
   <input id="precio" name="precio" placeholder="Ingresa el precio de la habitación" type="number" class="form-control" tabindex="1" maxlength="20"required="">
   </div>   

   <div class="mb-3">
                       <label for="" class="form-label">Tipo de habitacion</label>
                       <select class="form-select" name="tipodehabitacion" id="tipodehabitacion" required="">
                           <option value="">Seleccione</option>
                           <?php foreach ($tipo as $th) { ?>
                               <option value="{{$th['id']}}">{{$th['tipohabitacion']}}</option>
                           <?php } ?>
                       </select>
                       </div>
           </div>
             
   <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
   <button type="submit" class="btn btn-primary-btn btn-success" tabindex="4">Guardar</button>
   
                       
   </form>
   </div>
   <div class="modal-footer">
   </div>
   </div>
   </div>
   </div>

<table id="habitaciones" class="table table-hover shadow-lg mt-1"  style="width:90%">  
 <thead class="bg-green text-white">

   <tr>
    <th scope="col">Código</th>
    <th scope="col">Caracteristicas</th>
    <th scope="col">Numero de habitación</th>
    <th scope="col">Precio</th>
    <th scope="col">Tipo de habitación</th>
    <th scope="col">Estado</th>
    <th scope="col">Acciones</th>
  </tr>
 </thead>
<tbody>

    @foreach($habitaciones as $habitacion)
    <tr>
    <td>{{ $habitacion->id }}</td>
    <td>{{ $habitacion->caracteristicas }}</td>
    <td>{{ $habitacion->numeroDeHabitacion }}</td>
    <td>{{ $habitacion->precio }}</td>
    <td>{{ $habitacion->datostipohabitacion->tipohabitacion}}</td>

    <td> @if ($habitacion->estado == 1)

        <h6 style="color: green"><strong style="color: black"></strong><b>Activo</b></h6>
        @else
        <h6 style="color: red"><strong style="color: black"></strong><b>Inactivo</b></h6>
        @endif
                              
    <form class="custom-control custom-switch" action="{{ route('habitacionestado', $habitacion) }}" method="post">
        @csrf
        @if ($habitacion->estado == 1)
        <input type="checkbox" onChange="this.form.submit()" class="custom-control-input" 
        id="customSwitch{{$habitacion->id}}" checked>
        <label class="custom-control-label" for="customSwitch{{$habitacion->id}}"></label>
        @else
        <input type="checkbox" onChange="this.form.submit()" class="custom-control-input" 
        id="customSwitch{{$habitacion->id}}">
        <label class="custom-control-label" for="customSwitch{{$habitacion->id}}"></label>
        @endif
    </form>
</td>

        <td>
        <form action="{{ route ('habitaciones.destroy', $habitacion->id) }}" method="POST">

</div>
</div>
</div>
</div> 
        <button type="button" class="btn btn-light border bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#habitacion{{$habitacion->id}}">
        </button>
                            
        <a href="/habitaciones/{{$habitacion->id}}/edit" class="btn btn-light border fas fa-edit"></a>  

          @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">
            <i class="fas fa-trash"></i>
        </button>
        </form>
        </td>
        </tr>    
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

<script>
$(document).ready(function () {
    $('#habitaciones').DataTable({
    language:{
        "url": "https://cdn.datatables.net/plug-ins/1.12.1/i18n/es-ES.json"
    }
   
});
});
 </script>


@stop
