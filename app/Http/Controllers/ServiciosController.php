<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Servicios;
use App\Usuarios_has_Servicios;
use Auth;

class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        if ($request->all()) {

           $servicios = Servicios::create([
              'ser_servicio_rec_id' => $request->input('SER'),
              'ser_tipo_rec_id' =>  $request->input('TSE'),
              'ser_titulo' => $request->input('titulo'),
              'ser_descripcion' => $request->input('descripcion'),
              'ser_info_adicional' => $request->input('infoadicional'),
              'ser_parroquia_rec_id' =>  $request->input('PAR'),                          
            ]);
       
            $usuarios = Usuarios_has_Servicios::create([
                  'uhs_usu_id' => Auth::user()->id,
                  'uhs_ser_id' => $servicios->ser_id,
                ]);
    
            $servicios = DB::select("SELECT * FROM servicios");
        
            return view('listados.lista',compact('servicios'));
        }
        return view('servicios.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function solicitaservicio()
    {

        $tipo = $serv = DB::select("SELECT * FROM mudate24bd.recursiva where rec_nemonico = 'SER' or rec_nemonico ='TSE' ORDER BY rec_nemonico, rec_detalle;");
        return view('servicios.solicitaservicio', compact('serv','tipo'));        
    }

    public function serviciousuario(Request $request)
    {   
        if ($request->all()) {

           $servicios = Servicios::create([
              'ser_servicio_rec_id' => $request->input('SER'),
              'ser_tipo_rec_id' =>  $request->input('TSE'),
              'ser_titulo' => $request->input('titulo'),
              'ser_descripcion' => $request->input('descripcion'),
              'ser_info_adicional' => $request->input('infoadicional'),
              'ser_parroquia_rec_id' =>  $request->input('PAR'),                          
            ]);

        $tipo = $serv = DB::select("SELECT * FROM mudate24bd.recursiva where rec_nemonico = 'SER' or rec_nemonico ='TSE' ORDER BY rec_nemonico, rec_detalle;");

            $servicios = DB::select("SELECT * FROM servicios");
        
            return view('listados.lista',compact('servicios','serv','tipo'));
        }
        return view('principal.principal');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function listar(Request $request)
    {   
        
        $servicios = DB::select("SELECT * FROM servicios");
        
        return view('listados.lista',compact('servicios'));
    }


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
