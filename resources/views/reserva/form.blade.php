<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('estadoDeReserva') }}
            {{ Form::text('estadoDeReserva', $reserva->estadoDeReserva, ['class' => 'form-control' . ($errors->has('estadoDeReserva') ? ' is-invalid' : ''), 'placeholder' => 'Estadodereserva']) }}
            {!! $errors->first('estadoDeReserva', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>