<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Habitacion;

class HabitacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return 'Vista index ()';
        $habitaciones = Habitacion::all();
        return view ('habitacion.index')->with('habitaciones', $habitaciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('habitacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $habitaciones = new Habitacion();

        $habitaciones->id = $request->get('id');
        $habitaciones->numerodehabitacion = $request->get('numerodehabitacion');
        $habitaciones->precio = $request->get('precio');
        $habitaciones->tipodehabitacion = $request->get('tipodehabitacion');

        with('message','se ha creado el registro correctamente.');
        $habitaciones->save();
        

        return redirect('/habitaciones');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
        $habitacion->numerodehabitacion = $request->get('numeroDeHabitacion');
        $habitacion->precio = $request->get('precio');
        $habitacion->tipodehabitacion = $request->get('tipoDeHabitacion');
        
        $habitacion->save();

        return redirect('/habitaciones');
    
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
        return redirect('/habitaciones');
    }
}
