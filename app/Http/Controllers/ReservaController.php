<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;
use App\Models\Habitacion;
use App\Models\Cliente;

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
        $cliente_id = Cliente::all();
        return view('reserva.index', compact('reservas', 'habitacion_id', 'cliente_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cliente_id = Cliente::all();
        $habitacion_id = Habitacion::all();
        return view('reserva.create', compact('habitacion_id', 'cliente_id'));
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

        $reservas->fechaDeIngreso = $request->get('fechaDeIngreso');
        $reservas->fechaDeSalida = $request->get('fechaDeSalida');
        $reservas->habitacion_id = $request->get('habitacion_id');
        $reservas->cliente_id = $request->get('cliente_id');

        $reservas->save();

        return redirect('/reserva')->with('message','Exitoso');
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
        $cliente_id = Cliente::all();
        $habitacion_id = Habitacion::all();
        $reserva = Reserva::find($id);
        return view('reserva.edit', compact('reserva', 'habitacion_id', 'cliente_id'));
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
        $cliente_id = Cliente::all();
        $habitacion_id = Habitacion::all();
        $reserva = Reserva::find($id);

        $reserva->fechaDeIngreso = $request->get('fechaDeIngreso');
        $reserva->fechaDeSalida = $request->get('fechaDeSalida');
        $reserva->habitacion_id = $request->get('habitacion_id');
        $reserva->cliente_id = $request->get('cliente_id');

        $reserva->save();

        return redirect('/reserva')->with('info','Exitoso');
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

    public function actualizarEstadoReserva(Reserva $reserva)
    {

        if ($reserva->estado == 0)
            $reserva->estado = 1;
        else if ($reserva->estado == 1)
            $reserva->estado = 2;
        else
            $reserva->estado = 2;
        $reserva->update();
        
        return redirect('/reserva')->with('estate', 'Estado cambiado');
    }
}
