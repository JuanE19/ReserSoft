<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tipo;

class TiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $tipo = new Tipo();
        $tipo->tipohabitacion="Estandar";
        $tipo->save();

        $tipo = new Tipo();
        $tipo->tipohabitacion="Doble";
        $tipo->save();
    }
}
