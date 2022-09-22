<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    public function traerHabitacion()
    {
        return $this->hasOne('App\Models\Habitacion', 'id', 'habitacion_id');
    }

    public function traerCliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id', 'cliente_id');
    }

    public function traerTipoDeHabitacion()
    {
        return $this->hasOne('App\Models\Tipo', 'id', 'tipoHabitacion_id');
    }

}

