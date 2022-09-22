<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\TipoDocumento;
use PhpParser\Node\Stmt\TryCatch;

class ClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('cliente.index')->with('clientes', $clientes);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipodocumento = TipoDocumento::all();

        return view('cliente.create')->with('tipodocumento', $tipodocumento);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(
            [

                'documento' => 'unique:clientes',
                'correo' => 'unique:clientes',
            ],
            [
                'documento.unique' => 'Este documento ya existe',
                'correo.unique' => 'Este correo ya existe'
            ]

        );




        $clientes = new Cliente();

        $clientes->nombrecompleto = $request->get('nombrecompleto');
        $clientes->documento = $request->get('documento');
        $clientes->correo = $request->get('correo');
        $clientes->telefono = $request->get('telefono');
        $clientes->direccion = $request->get('direccion');
        $clientes->documento_id = $request->get('tipodocumento');


        $clientes->save();

        return redirect('/clientes')->with('message', 'exitoso');
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
        return view('cliente.edit', compact('cliente', 'tipodocumento'));
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

        $cliente = Cliente::find($id);
        $infoClienteActual = Cliente::find($id);

        $cliente->nombrecompleto = $request->get('nombrecompleto');
        $cliente->correo = $request->get('correo');
        $cliente->telefono = $request->get('telefono');
        $cliente->direccion = $request->get('direccion');
        $cliente->documento_id = $request->get('tipodocumento');


        try {
            $cliente->save();

            return redirect('/clientes')->with('info', 'El cliente se ha Actualizado correctamente');
        } catch (\Throwable $th) {
            if ($th->getCode() == 23000) {

                if ($cliente->correo != $infoClienteActual->correo) {
                    $request->validate(
                        [

                            'correo' => 'unique:clientes,correo,'
                        ],
                        [
                            'correo.unique' => 'Este correo ya existe'
                        ]


                    );
               
                }
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }

    public function actualizarEstado(Cliente $cliente)
    {

        if ($cliente->Estado == 1)
            $cliente->Estado = 0;
        else
            $cliente->Estado = 1;
        $cliente->update();
        return redirect('/clientes')->with('estate', 'Estado cambiado');
    }
}