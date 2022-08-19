<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tipo;

class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipo = new Tipo();

        $tipo->tipohabitacion="estandar";
        $tipo->save();

        $tipo2 = new Tipo();

        $tipo2->tipohabitacion="doble";
        $tipo2->save();

    }
}
