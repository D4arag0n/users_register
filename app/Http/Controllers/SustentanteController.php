<?php

namespace App\Http\Controllers;

use App\Models\Afiliado;
use App\Models\Entidad;
use App\Models\Sustentante;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;

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
        return view('sustentante.index');
    }

    public function getData(){
        $sustentantes = Sustentante::select(['id', 'curp', 'created_at'])->get();
        //dd($sustentantes);
        return DataTables::of($sustentantes)
        ->addColumn('action', function($sustentante){
            return '<a href="/sustentante/edit/' . $sustentante->id . '" class="">Editar</a>';
        })
        ->make(true);
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
            'email' => 'required|unique:users',
            'password' => 'required|confirmed|min:8'
        ]);

        //dd($request);
        $usuario = User::create([
            'name' => $request->nombre, 
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'rol_usuario_id' => 2,
            'entidad_id' => $request->entidad,
            'estatus_usuario_id' => 3,
            'sede_id' => $request->sede,
            'primer_apellido' => $request->primerApellido,
            'segundo_apellido' => $request->segundoApellido,
            'usuario_create_id' => 0,
            'usuario_record_id' => 0,
            'rol_usuario_create_id' => 3,
            'rol_usuario_record_id' => 3
        ]);

        $sustentante = Sustentante::create([
            'sexo_id' => $request->sexo,
            'entidad_id' => $request->entidad,
            'perfil_profesional_id' => $request->perfilProfesional,
            'motivo_no_concluyo_id' => $request->motivoNoConcluyo,
            'antecedente_academico_id' => $request->antecedenteAcademico,
            'usuario_id' => $usuario->id,
            'estado_radica_id' => $request->estadoRadica,
            'nivel_educativo_id' => $request->nivelEducativo,
            'estatus_sustentante_id' => 1,
            'curp' => $request->curp,
            'fecha_nacimiento' => $request->fechaNacimiento,
            'nacionalidad' => $request->nacionalidad,
            'lugar_nacimiento' => $request->lugarNacimiento,
            'calle_numero' => $request->calleNumero,
            'colonia' => $request->colonia,
            'codigo_postal' => $request->codigoPostal,
            'municipio' => $request->municipio,
            'telefono_casa' => $request->telefonoCasa,
            'telefono_oficina' => $request->telefonoOficina,
            'celular' => $request->celular,
            'institucion' => $request->institucion,
            'porcentaje_creditos_cursados' => $request->porcentajeCreditosCursados,
            'otro_motivo' => $request->motivoNoConcluyo,
            'licenciatura' => $request->nombreLicenciatura,
            'porcentaje_creditos_obtenidos' => $request->porcentajeAvanceCreditos,
            'archivo_acta_nacimiento' => '',
            'archivo_curp' => '',
            'archivo_ine' => '',
            'archivo_certificado' => '',
            'archivo_antecedente_secundaria' => '',
            'archivo_curriculum' => '',
            'archivo_docto_ultimo_grado_estudios' => '',
            'archivo_carta_autorizacion' => '',
            'usuario_create_id' => 0,
            'usuario_record_id' => 0,
            'rol_usuario_create_id' => 3,
            'rol_usuario_record_id' => 1
        ]);

        //dd('Se ha registrado ...' . $sustentante);

        ///Para almacenar los archivos
        $files_path = public_path('files');

        $archivoActaUp = $request->file('archivoActa');
        $nombreArchivoActa = $sustentante->id . "_acta_nacimiento" . "." . $archivoActaUp->extension();
        $archivoActaUp->move($files_path, $nombreArchivoActa);

        $archivoCurpUp = $request->file('archivoCurp');
        $nombreArchivoCurp = $sustentante->id . "_curp" . "." . $archivoCurpUp->extension();
        $archivoCurpUp->move($files_path, $nombreArchivoCurp);

        $archivoIneUp = $request->file('archivoIne');
        $nombreArchivoIne = $sustentante->id . "_ine" . "." . $archivoIneUp->extension();
        $archivoIneUp->move($files_path, $nombreArchivoIne);

        $archivoCertificadoUp = $request->file('archivoCertificado');
        $nombreArchivoCertificado = $sustentante->id . "_certificado" . "." . $archivoCertificadoUp->extension();
        $archivoCertificadoUp->move($files_path, $nombreArchivoCertificado);

        $archivoAntecedenteSecundariaUp = $request->file('archivoAntecedentesSecundaria');
        $nombreArchivoAntecedenteSecundaria = $archivoAntecedenteSecundariaUp !== null ? $sustentante->id . "_antecedente_secundaria" . "." . $archivoAntecedenteSecundariaUp->extension() : '';
        !empty($nombreArchivoAntecedenteSecundaria) ? $archivoAntecedenteSecundariaUp->move($files_path, $nombreArchivoAntecedenteSecundaria) : null;

        $archivoCurriculumUp = $request->file('archivoCurriculum');
        $nombreArchivoCurriculum = $archivoCurriculumUp !== null ? $sustentante->id . "_curriculum" . "." . $archivoCurriculumUp->extension() : '';
        !empty($nombreArchivoCurriculum) ? $archivoCurriculumUp->move($files_path, $nombreArchivoCurriculum) : null;

        $archivoDoctoUltimoGradoUp = $request->file('archivoDocumentoUltimoGradoEstudios');
        $nombreArchivoDoctoUltimoGrado = $archivoDoctoUltimoGradoUp !== null ? $sustentante->id . "_docto_ultimo_grado_estudios" . "." . $archivoDoctoUltimoGradoUp->extension() : '';
        !empty($nombreArchivoDoctoUltimoGrado) ? $archivoDoctoUltimoGradoUp->move($files_path, $nombreArchivoDoctoUltimoGrado) : null;

        $archivoCartaAutorizacionUp = $request->file('archivoCartaAutorización');
        $nombreArchivoCartaAutorizacion = $archivoCartaAutorizacionUp !== null ? $sustentante->id . "_carta_autorizacion" . "." . $archivoCartaAutorizacionUp->extension() : '';
        !empty($nombreArchivoCartaAutorizacion) ? $archivoCartaAutorizacionUp->move($files_path, $nombreArchivoCartaAutorizacion) : null;

        $sustentante->archivo_acta_nacimiento = $nombreArchivoActa;
        $sustentante->archivo_curp = $nombreArchivoCurp;
        $sustentante->archivo_ine = $nombreArchivoIne;
        $sustentante->archivo_certificado = $nombreArchivoCertificado;
        $sustentante->archivo_antecedente_secundaria = $nombreArchivoAntecedenteSecundaria;
        $sustentante->archivo_curriculum = $nombreArchivoCurriculum;
        $sustentante->archivo_docto_ultimo_grado_estudios = $nombreArchivoDoctoUltimoGrado;
        $sustentante->archivo_carta_autorizacion = $nombreArchivoCartaAutorizacion;

        $sustentante->save();

        return redirect()->route('afiliado.inicio');
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
