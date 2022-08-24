<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    use HasFactory;

        //join de la tabla tipo de habitacion
        public function datostipohabitacion()

        {
            return $this->hasOne('App\Models\Tipo', 'id', 'tipoDeHabitacion');
        }
}
