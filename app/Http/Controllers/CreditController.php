<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use App;
use App\Credito;
use App\User;
use App\Cliente;
use App\Plantillacredito;


class CreditController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarioName = auth()->user()->name;
        $creditos = App\Credito::paginate(5);
        return view('creditos.lista',compact('creditos'));
    }
    public function userconfig()
    {
        $usuario =auth()->user();
        
        return view('userconfig',compact('usuario'));
    }
    public function crearniveles()
    {
        return view('configuser.niveles');
    }





        #FUNCIONES DE CREDITO
    public function lista()
    {
        return view('creditos.lista');
    }
    public function plantillascredit()
    {
        $plantillas = App\Plantillacredito::paginate(10);
        return view('creditos.plantillascredit',compact('plantillas'));
    }
    public function crearplantilla()
    {
        return view('creditos.crearplantilla');
    }

    public function guardarplantilla(Request $request)
    {
        $request->validate([
            'nombre_plantilla_credito'=>'required',
            'interes_plantilla'=>'required',
            'plazo_plantilla'=>'required'
        ]);

        $nuevaPlantilla = new App\Plantillacredito;

        $nuevaPlantilla->nombre_plantilla_credito = $request->nombre_plantilla_credito;
        $nuevaPlantilla->interes_plantilla = $request->interes_plantilla;
        $nuevaPlantilla->plazo_plantilla = $request->plazo_plantilla;

        $nuevaPlantilla->save();

        return view('creditos.crearplantilla');
    }


        #FUNCIONES DE CLIENTES
    public function clientes()
    {
        $clientes = App\Cliente::paginate(5);
        return view('clientes.clientes', compact('clientes'));
    }
    public function nuevousuario()
    {
        return view('nuevousuario');
    }

    Public function crearcliente()
    {
        return view('clientes.crearcliente');
    }
    public function guardarcliente(Request $request)
    {
        $request->validate([
            'nombre'=>'required',
            'apellido'=>'required',
            'edad_cliente'=>'required',
            'fecha_nacimiento_cliente'=>'required',
            'genero'=>'required',
            'curp'=>'required',
            'rfc'=>'required',
            'dependencia'=>'required',
            'ingreso_cliente'=>'required',
            'direccion_cliente'=>'required',
            'email_cliente'=>'required',
            'numero_cliente'=>'required'
        ]);
        

        $nuevo_cliente = new App\Cliente;

        $nuevo_cliente->nombre_cliente = $request->nombre.' '.$request->apellido;
        $nuevo_cliente->edad_cliente = $request->edad_cliente;
        $nuevo_cliente->fecha_nacimiento_cliente = $request->fecha_nacimiento_cliente;
        $nuevo_cliente->genero = $request->genero;
        $nuevo_cliente->curp = $request->curp;
        $nuevo_cliente->rfc = $request->rfc;
        $nuevo_cliente->email_cliente = $request->email_cliente;
        $nuevo_cliente->dependencia = $request->dependencia;
        $nuevo_cliente->ingreso_cliente = $request->ingreso_cliente;
        $nuevo_cliente->direccion_cliente = $request->direccion_cliente;
        $nuevo_cliente->codigo_postal = $request->codigo_postal;
        $nuevo_cliente->numero_cliente = $request->numero_cliente;
        $nuevo_cliente->estado_civil = $request->estado_civil;
        $nuevo_cliente->nombre_conyugue = $request->nombre_conyugue;
        $nuevo_cliente->numero_conyugue = $request->numero_conyugue;
        $nuevo_cliente->nombre_referencia_uno = $request->nombre_referencia_uno;
        $nuevo_cliente->numero_referencia_uno = $request->numero_referencia_uno;
        $nuevo_cliente->nombre_referencia_dos = $request->nombre_referencia_dos;
        $nuevo_cliente->numero_referencia_dos = $request->numero_referencia_dos;
        $nuevo_cliente->credito_vigente = 'No';
        $nuevo_cliente->save();
        
        return back()->with('mensaje','Cliente agregado con exito!');
    }
    function deletecliente($id)
    {
        $deleteCliente = App\Cliente::FindOrFail($id);
        $deleteCliente->delete();

        return back()->with('mensaje','Cliente Eliminado Con Exito');
    }
    function editarcliente($id)
    {
        $cliente = App\Cliente::findOrFail($id);

        return view('clientes.editarcliente',compact('cliente'));
    }

    function actualizarcliente(Request $request, $id)
    {
        $clientes = App\Cliente::findOrFail($id);

        
        $clientes->nombre_cliente = $request->nombre;
        $clientes->edad_cliente = $request->edad_cliente;
        $clientes->fecha_nacimiento_cliente = $request->fecha_nacimiento_cliente;
        $clientes->genero = $request->genero;
        $clientes->curp = $request->curp;
        $clientes->rfc = $request->rfc;
        $clientes->email_cliente = $request->email_cliente;
        $clientes->dependencia = $request->dependencia;
        $clientes->ingreso_cliente = $request->ingreso_cliente;
        $clientes->direccion_cliente = $request->direccion_cliente;
        $clientes->codigo_postal = $request->codigo_postal;
        $clientes->numero_cliente = $request->numero_cliente;
        $clientes->estado_civil = $request->estado_civil;
        $clientes->nombre_conyugue = $request->nombre_conyugue;
        $clientes->numero_conyugue = $request->numero_conyugue;
        $clientes->nombre_referencia_uno = $request->nombre_referencia_uno;
        $clientes->numero_referencia_uno = $request->numero_referencia_uno;
        $clientes->nombre_referencia_dos = $request->nombre_referencia_dos;
        $clientes->numero_referencia_dos = $request->numero_referencia_dos;

        $clientes->save();

        return back()->with('mensaje','Cliente actualizado con exito!');
    }
    public function actualizarusuario(Request $request, $id)
    {
        $usuarioActualizar = App\User::findOrFail($id);
        $usuarioActualizar->name = $request->name;
        $usuarioActualizar->email = $request->email;
        $usuarioActualizar->password = $request->password;

        $usaurioActualizar->save();

        return back()->with('mensaje','Datos guardados');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
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
}
