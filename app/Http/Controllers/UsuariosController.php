<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Personas;
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

        $usuarios = User::create([
              'email' => $request->input('correo'),
              'password' =>  bcrypt($request->input('clave')), 
              'usu_tipo_rec_id' => 5,
              'usu_status_rec_id' => 2,
              'usu_per_id' => $personas->per_id,
            ]);

        return view('principal.principal');
    }

    public function auth(Request $request)
    {
        if($request->all()){
            if (Auth::attempt(['email' => $request['correo'], 'password' => $request['clave']])) {
                // Authentication passed...
                return view('principal.principal');
                return redirect()->intended('dashboard');
            }
        }
        return view('login.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
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
