<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;


    //join de la tabla clientes y tipo documento
    public function datosdocumento()

    {
        return $this->hasOne('App\Models\TipoDocumento', 'id', 'documento_id');
    }

}

