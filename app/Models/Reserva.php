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

}

