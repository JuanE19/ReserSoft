<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;
use App\Models\Habitacion;

class ReservaController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservas = Reserva::all();
        $habitacion_id = Habitacion::all();
        return view('reserva.index', compact('reservas', 'habitacion_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $habitacion_id = Habitacion::all();
        return view('reserva.create')->with('habitacion_id', $habitacion_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reservas = new Reserva();

        $reservas->nombre = $request->get('nombre');
        $reservas->apellido = $request->get('apellido');
        $reservas->cantidadDePersonas = $request->get('cantidadDePersonas');
        $reservas->fechaDeIngreso = $request->get('fechaDeIngreso');
        $reservas->fechaDeSalida = $request->get('fechaDeSalida');
        $reservas->habitacion_id = $request->get('habitacion_id');

        $reservas->save();

        return redirect('/reserva');
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
        $habitacion_id = Habitacion::all();
        $reserva = Reserva::find($id);
        return view('reserva.edit', compact('reserva','habitacion_id'));
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
        $habitacion_id = Habitacion::all();
        $reserva= Reserva::find($id);

        $reserva->nombre = $request->get('nombre');
        $reserva->apellido = $request->get('apellido');
        $reserva->cantidadDePersonas = $request->get('cantidadDePersonas');
        $reserva->fechaDeIngreso = $request->get('fechaDeIngreso');
        $reserva->fechaDeSalida = $request->get('fechaDeSalida');
        $reserva->habitacion_id = $request->get('habitacion_id');

        $reserva->save();

        return redirect('/reserva');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reserva = Reserva::find($id);
        $reserva->delete();
        return redirect('/reserva');
    }
}
