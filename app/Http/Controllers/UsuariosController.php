<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Personas;
use App\Servicios;
use App\Curriculos;
use App\User;
use Auth;


class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipo = $serv = DB::select("SELECT * FROM mudate24bd.recursiva where rec_nemonico = 'SER' or rec_nemonico ='TSE' ORDER BY rec_nemonico, rec_detalle;");
                $servicios = DB::select("
                    SELECT servicios.*, Ser.rec_detalle AS ser_service, Tipo.rec_detalle AS ser_tipo, Parroquia.rec_detalle AS ser_parroquia FROM servicios 
                    INNER JOIN recursiva AS Ser ON ser_servicio_rec_id = Ser.rec_id 
                    INNER JOIN recursiva AS Tipo ON ser_tipo_rec_id = Tipo.rec_id
                    INNER JOIN recursiva AS Parroquia ON ser_parroquia_rec_id = Parroquia.rec_id;
                ");//filtrar por el servicio del usuario
                
                return view('usuarios.index',compact('servicios','serv','tipo')); 
                return redirect()->intended('dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $personas = Personas::create([
              'per_nombre' => $request->input('nombre'),
              'per_apellido' =>  $request->input('apellido'),
              'per_ci' => $request->input('documento'),
              'per_telefono' => $request->input('telefono'),
            ]);

        $tipousuario = $request->input('TUS');
        if ($tipousuario == 6){
            $usuarios = User::create([
                  'email' => $request->input('email'),
                  'password' =>  bcrypt($request->input('contrasena')), 
                  'usu_tipo_rec_id' => $request->input('TUS'),
                  'usu_status_rec_id' => 2,
                  'usu_per_id' => $personas->per_id,
                ]);
        }else{
            if ($tipousuario == 501){
                $usuarios = User::create([
                      'email' => $request->input('email'),
                      'password' =>  bcrypt($request->input('contrasena')), 
                      'usu_tipo_rec_id' => $request->input('TUS'),
                      'usu_status_rec_id' => 499,
                      'usu_per_id' => $personas->per_id,
                    ]);
            }            
        }



        return view('login.login');
    }


    public function auth(Request $request)
    {
        $tipo = $serv = DB::select("SELECT * FROM mudate24bd.recursiva where rec_nemonico = 'SER' or rec_nemonico ='TSE' ORDER BY rec_nemonico, rec_detalle;");
        if($request->all()){
            if (Auth::attempt(['email' => $request['correo'], 'password' => $request['clave']])) {
                // Authentication passed...
                $servicios = DB::select("
                    SELECT servicios.*, Ser.rec_detalle AS ser_service, Tipo.rec_detalle AS ser_tipo, Parroquia.rec_detalle AS ser_parroquia FROM servicios 
                        INNER JOIN recursiva AS Ser ON ser_servicio_rec_id = Ser.rec_id 
                        INNER JOIN recursiva AS Tipo ON ser_tipo_rec_id = Tipo.rec_id
                        INNER JOIN recursiva AS Parroquia ON ser_parroquia_rec_id = Parroquia.rec_id;
                ");//filtrar por el servicio del usuario
                
                return view('usuarios.index',compact('serv','tipo','servicios')); 
                return redirect()->intended('dashboard');
            }
        }
        return view('login.login',compact('serv','tipo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function datosadicionales(Request $request)
    {
        if($request->all())
        {
            DB::table('curriculos')
                ->where('cur_id', Auth::user()->id)
                ->update(['cur_direccion' => $request['direccion']],
                        ['cur_telfijo' => $request['telfijo']],
                        ['cur_fecha_nac' => $request['fechanac']],
                        ['cur_parroquia_rec_id' => $request['PAR']],
                        ['cur_sexo_rec_id' => $request['SEX']],
                        ['cur_nacionalidad_rec_id' => $request['NAC']]  
                    );
        }
                    
        $datos = DB::select("
            SELECT * FROM curriculos 
            WHERE cur_id = ".Auth::user()->id.";
             ");
        $tipo = $serv = DB::select("SELECT * FROM mudate24bd.recursiva where rec_nemonico = 'SER' or rec_nemonico ='TSE' ORDER BY rec_nemonico, rec_detalle;");
        return view('usuarios.datosadicionales',compact('datos','serv','tipo')); 
        return redirect()->intended('dashboard');        

    }



    public function datosp(Request $request)
    {
        $datos = DB::select("
            SELECT users.*, personas.* FROM users 
                INNER JOIN personas ON usu_per_id = per_id
            WHERE id = ".Auth::user()->id.";
        ");
        $tipo = $serv = DB::select("SELECT * FROM mudate24bd.recursiva where rec_nemonico = 'SER' or rec_nemonico ='TSE' ORDER BY rec_nemonico, rec_detalle;");        
        return view('usuarios.datosprincipales',compact('datos','serv','tipo')); 
        return redirect()->intended('dashboard');
    }

    public function curriculum(Request $request)
    {
        $datos = DB::select("
            SELECT users.*, personas.*,curriculos.* FROM users 
                INNER JOIN personas ON usu_per_id = per_id
                INNER JOIN curriculos ON id = cur_id
            WHERE id = ".Auth::user()->id.";
        ");
        $tipo = $serv = DB::select("SELECT * FROM mudate24bd.recursiva where rec_nemonico = 'SER' or rec_nemonico ='TSE' ORDER BY rec_nemonico, rec_detalle;");         
        return view('usuarios.curriculum',compact('datos','serv','tipo')); 
        return redirect()->intended('dashboard');
    }

    public function store(Request $request)
    {
        $postulaciones = DB::select("
            SELECT usuarios_has_servicios.*, servicios.*, Ser.rec_detalle AS ser_service, Tipo.rec_detalle AS ser_tipo, Parroquia.rec_detalle AS ser_parroquia  FROM mudate24bd.usuarios_has_servicios
                inner join servicios on uhs_ser_id = ser_id
                INNER JOIN recursiva AS Ser ON ser_servicio_rec_id = Ser.rec_id 
                INNER JOIN recursiva AS Tipo ON ser_tipo_rec_id = Tipo.rec_id
                INNER JOIN recursiva AS Parroquia ON ser_parroquia_rec_id = Parroquia.rec_id
            WHERE uhs_usu_id = ".Auth::user()->id.";
        ");
        $tipo = $serv = DB::select("SELECT * FROM mudate24bd.recursiva where rec_nemonico = 'SER' or rec_nemonico ='TSE' ORDER BY rec_nemonico, rec_detalle;");         
        return view('usuarios.mispostulaciones',compact('postulaciones','serv','tipo')); 
    }

    public function aprousu()
    {
        $tipo = $serv = DB::select("SELECT * FROM mudate24bd.recursiva where rec_nemonico = 'SER' or rec_nemonico ='TSE' ORDER BY rec_nemonico, rec_detalle;");
                
        $usuariosd = DB::select("
            SELECT personas.*, users.*,recursiva.* FROM personas
                INNER JOIN users ON per_id = usu_per_id
                INNER JOIN recursiva ON usu_status_rec_id = rec_id
            WHERE usu_tipo_rec_id = 501;
            ");//filtrar por el servicio del usuario
            
        return view('administrador.apruebausuario',compact('usuariosd','serv','tipo')); 
        return redirect()->intended('dashboard');
    }


}
