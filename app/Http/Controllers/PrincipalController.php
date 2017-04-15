<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Auth;

class PrincipalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected function index()
    {

        $tipo = $serv = DB::select("SELECT * FROM mudate24bd.recursiva where rec_nemonico = 'SER' or rec_nemonico ='TSE' ORDER BY rec_nemonico, rec_detalle;");
        return view('principal.principal', compact('serv','tipo'));
    }

    protected function lista($id)
    {
        $value =   DB::select("SELECT servicios.*, Ser.rec_detalle AS ser_service, Tipo.rec_detalle AS ser_tipo, 
                    Parroquia.rec_detalle AS ser_parroquia , Estado.rec_detalle AS ser_estado, Municipio.rec_detalle AS ser_municipio , Pais.rec_detalle AS ser_pais
                    FROM servicios 
                    INNER JOIN recursiva AS Ser ON ser_servicio_rec_id = Ser.rec_id 
                    INNER JOIN recursiva AS Tipo ON ser_tipo_rec_id = Tipo.rec_id
                    INNER JOIN recursiva AS Parroquia ON ser_parroquia_rec_id = Parroquia.rec_id
                    INNER JOIN recursiva AS Municipio ON Parroquia.rec_padre = Municipio.rec_id
                    INNER JOIN recursiva AS Estado ON Municipio.rec_padre = Estado.rec_id
                    INNER JOIN recursiva AS Pais ON Estado.rec_padre = Pais.rec_id
                    where ser_id='".$id."';");
        return response()->json(
             $value 
        );    
    }
    protected function detalle()
    {
        return view('listados.detalle');
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
    public function show()
    {
        
        $tipo = $serv = DB::select("SELECT * FROM mudate24bd.recursiva where rec_nemonico = 'SER' or rec_nemonico ='TSE' ORDER BY rec_nemonico, rec_detalle;");
        return view('principal.busqueda', compact('serv','tipo'));
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
