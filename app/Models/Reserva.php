<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reserva
 *
 * @property $id
 * @property $estadoDeReserva
 * @property $created_at
 * @property $updated_at
 *
 * @property DetalleReserva[] $detalleReservas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Reserva extends Model
{
    
    static $rules = [
		'estadoDeReserva' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['estadoDeReserva'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detalleReservas()
    {
        return $this->hasMany('App\Models\DetalleReserva', 'reserva_id', 'id');
    }
    

}
