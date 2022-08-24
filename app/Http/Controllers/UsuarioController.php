<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
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
        $usuarios = Usuario::all();
        return view ('usuario.index')->with('usuarios', $usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function create()
    {
        return view ('usuario.create');
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
            'correo'=>'unique:usuarios'
        ],

        [
            'correo.unique'=>'El correo ya existe'
        ]

        );

        $usuarios = new Usuario();

        $usuarios->nombre = $request->get('nombre');
        $usuarios->apellido = $request->get('apellido');
        $usuarios->telefono = $request->get('telefono');
        $usuarios->direccion = $request->get('direccion');
        $usuarios->correo = $request->get('correo');
        $usuarios->password = $request->get('password');

        $usuarios->save();

        return redirect('/usuario')->with('message','Exitoso');
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
        $usuario = Usuario::find($id);
        return view('usuario.edit')->with('usuario',$usuario);
        
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
        $usuario = Usuario::find($id);
        $infousuario = Usuario::find($id);

        $usuario->nombre = $request->get('nombre');
        $usuario->apellido = $request->get('apellido');
        $usuario->telefono = $request->get('telefono');
        $usuario->direccion = $request->get('direccion');
        $usuario->correo = $request->get('correo');
        $usuario->password = $request->get('password');;

    
        try{
            $usuario->save();    

            return redirect('/usuario')->with('info','Exitoso');
        } catch (\Throwable $th){
            if($th->getCode()==23000){
            

                if($usuario->correo != $infousuario->correo){
                    $request->validate(
                    [
                        'correo'=> 'unique:usuarios,correo,'
                    ],
                    [
                        'correo.unique'=>'El correo ya existe'
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
        //
    }

    public function actualizarEstado(Usuario $usuario){ 

        if($usuario->estado==0)
            $usuario->estado=1;
        else        
            $usuario->estado=0;
        $usuario->update();
        return redirect('/usuario')->with('estate', 'Estado cambiado');
    }

}
