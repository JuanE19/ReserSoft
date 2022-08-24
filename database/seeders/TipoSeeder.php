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
        $tipo->nombre="Estandar";
        $tipo->save();

        $tipo2 = new Tipo();
        $tipo2->nombre="Doble";
        $tipo2->save();

        $tipo3 = new Tipo();
        $tipo3->nombre="Cuadruple";
        $tipo3->save();
    }
}
