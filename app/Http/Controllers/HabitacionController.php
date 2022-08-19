<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Habitacion;
use App\Models\Tipo;

class HabitacionController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return 'Vista index ()';
        $habitaciones = Habitacion::all();
        $tipo = Tipo::all();
        return view ('habitacion.index', compact('habitaciones', 'tipo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipod = Tipo::all();
        return view ('habitacion.create')->with('tipo', $tipo);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //$caracteristica = array("1" => $_POST["1"],
        //"2" => $_POST["2"],
        //"3" => $_POST["3"],
        //"4" => $_POST["4"],
        //"5" => $_POST["5"],
        //"6" => $_POST["6"],
        //"7" => $_POST["7"],
        //"8" => $_POST["8"]);

        $caracteristicas = "";

        for ($i=1; $i < 10; $i++) { 
            if (isset($_POST[$i])) {
                $caracteristicas = $caracteristicas."".$_POST[$i].", ";
               }
        }

        $habitaciones = new Habitacion();

        $habitaciones->id = $request->get('id');
        $habitaciones->caracteristicas = $caracteristicas;
        $habitaciones->numerodehabitacion = $request->get('numerodehabitacion');
        $habitaciones->precio = $request->get('precio');
        $habitaciones->tipodehabitacion = $request->get('tipodehabitacion');

        $habitaciones->save();
        

        return redirect('/habitaciones')->with('info','La habitación se ha agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipo = Tipo::all();
        $habitacion = Habitacion::find($id);
        return view('habitacion.edit')->with('habitacion',$habitacion);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $habitacion = Habitacion::find($id);

        $habitacion->id = $request->get('id');
        $habitacion->caracteristicas = $request->get('caracteristicasCategoria');
        $habitacion->numerodehabitacion = $request->get('numeroDeHabitacion');
        $habitacion->precio = $request->get('precio');
        $habitacion->tipodehabitacion = $request->get('tipo');
        
        $habitacion->save();

        return redirect('/habitaciones')->with('info','La habitacion se ha actualizado correctamente');
    
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $habitacion = Habitacion::find($id);        
        $habitacion->delete();
        return redirect ('/habitaciones')->with('info','La habitación se ha eliminado correctamente');
    }
    public function actualizarestado(Habitacion $habitacion){ 

        if($habitacion->estado==1)
            $habitacion->estado=0;
        else        
            $habitacion->estado=1;
        $habitacion->update();

        return redirect('/habitaciones')->with('estado Actualizado', 'estado cambiado');
    }
   
}
