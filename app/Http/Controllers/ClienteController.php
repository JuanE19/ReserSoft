<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\TipoDocumento;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $clientes = Cliente::all();
        return view ('cliente.index')->with('clientes', $clientes);
    }

   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipodocumento = TipoDocumento::all();

        return view ('cliente.create')->with('tipodocumento', $tipodocumento);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientes = new Cliente();

        $clientes->nombrecompleto = $request->get('nombrecompleto');
        $clientes->documento = $request->get('documento');
        $clientes->correo = $request->get('correo');
        $clientes->telefono = $request->get('telefono');
        $clientes->direccion = $request->get('direccion');
        $clientes->documento_id = $request->get('tipodocumento');
        

        $clientes->save();

        return redirect('/clientes')->with('info','El cliente se ha Creado correctamente');
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
        $tipodocumento = TipoDocumento::all();
        $cliente = Cliente::find($id);
        return view ('cliente.edit', compact('cliente','tipodocumento'));
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
        $cliente= Cliente::find($id);
        $tipodocumento = TipoDocumento::all();

        $cliente->nombrecompleto = $request->get('nombrecompleto');
        $cliente->documento = $request->get('documento');
        $cliente->correo = $request->get('correo');
        $cliente->telefono = $request->get('telefono');
        $cliente->direccion = $request->get('direccion');
        $cliente->documento_id = $request->get('tipodocumento');
        

        $cliente->save();

        return redirect('/clientes')->with('info','El cliente se ha Actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
     $cliente = Cliente::find($id);
     $cliente->delete();
     return redirect ('/clientes')->with('info','El cliente se ha Eliminado correctamente');

    }
}
