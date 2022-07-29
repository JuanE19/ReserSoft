<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\TipoDocumento;

class TipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     //Llenamos la tabla tipo Documento
    public function run()
    {

        $tipodocumento = new TipoDocumento();

        $tipodocumento->nombre="Cedula de Ciudadania";
        $tipodocumento->save();

        $tipodocumento2 = new TipoDocumento();

        $tipodocumento2->nombre="Tarjeta de Identidad";
        $tipodocumento2->save();

        $tipodocumento3 = new TipoDocumento();
        $tipodocumento3->nombre="Cedula de Extrajeria";
        $tipodocumento3->save();
    }
}
