<?php

namespace App\Http\Controllers;

use App\Models\Afiliado;
use App\Models\Entidad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SustentanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $this->validate($request, [
            'entidad' => 'required',
            'nombre' => 'required',
            'primerApellido' => 'required',
            'segundoApellido' => 'required',
            'curp' => 'required|min:18',
            'fechaNacimiento' => 'required',
            'sexo' => 'required',
            'nacionalidad' => 'required',
            'lugarNacimiento' => 'required',
            'calleNumero' => 'required',
            'colonia' => 'required',
            'codigoPostal' => 'required',
            'municipio' => 'required',
            'estadoRadica' => 'required|min:1',
            'celular' => 'required|numeric', 
            'sede' => 'required',
            'nivelEducativo' => 'required',
            'antecedenteAcademico' => 'required',
            'archivoActa' => 'required|mimes:jpg,png,pdf',
            'archivoCurp' => 'required|mimes:jpg,png,pdf',
            'archivoIne' => 'required|mimes:jpg,png,pdf',
            'archivoCertificado' => 'required|mimes:jpg,png,pdf',
            'usuario' => 'required',
            'password' => 'required|confirmed|min:8'
        ]);

        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($afiliado)
    {
        //
        $estados = DB::table('entidad')->select('*')->get();
        $sexos = DB::table('sexo')->select('*')->get();
        $sedes = DB::table('sede')->select('*')->get();
        $nivelesEducativos = DB::table('nivel_educativo')->select('*')->get();
        $areasConocimiento = DB::table('area_conocimiento')->select('*')->get();
        $motivosNoConcluyo = DB::table('motivo_no_concluyo')->select('*')->get();
        $antecedentes = DB::table('antecedente_academico')->select('*')->get();
        //dd($estados);
        return view('sustentante.registrarse',[
            'estados' => $estados,
            'sexos' => $sexos,
            'sedes' => $sedes,
            'nivelesEducativos' => $nivelesEducativos,
            'areasConocimiento' => $areasConocimiento,
            'motivosNoConcluyo' => $motivosNoConcluyo,
            'antecedentes' => $antecedentes
        ]);
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
