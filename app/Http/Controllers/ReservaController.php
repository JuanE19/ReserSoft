<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservas = Reserva::all();
        return view('reserva.index')->with('reservas', $reservas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reserva.create');
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

        $reservas->cantidadDePersonas = $request->get('cantidadDePersonas');
        $reservas->fechaDeIngreso = $request->get('fechaDeIngreso');
        $reservas->FechaDeSalida = $request->get('FechaDeSalida');
        $reservas->precio = $request->get('precio');
        $reservas->tipoDeHabitacion = $request->get('tipoDeHabitacion');

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
        $reserva = Reserva::find($id);
        return view('reserva.edit')->with('reserva', $reserva);
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
        $reserva= Reserva::find($id);

        $reserva->cantidadDePersonas = $request->get('cantidadDePersonas');
        $reserva->fechaDeIngreso = $request->get('fechaDeIngreso');
        $reserva->fechaDeSalida = $request->get('FechaDeSalida');
        $reserva->precio = $request->get('precio');
        $reserva->tipoDeHabitacion = $request->get('tipoDeHabitacion');

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
