<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sustentante extends Model
{
    use HasFactory;

    protected $fillable = [
        'sexo_id',
        'entidad_id',
        'perfil_profesional_id',
        'motivo_no_concluyo_id',
        'antecedente_academico_id',
        'usuario_id',
        'estado_radica_id',
        'nivel_educativo_id',
        'estatus_sustentante_id',
        'numero_control',
        'anio_numero_control',
        'consecutivo_numero_control',
        'curp',
        'fecha_nacimiento',
        'nacionalidad',
        'lugar_nacimiento',
        'calle_numero',
        'colonia',
        'codigo_postal',
        'municipio',
        'telefono_casa',
        'telefono_oficina',
        'celular',
        'institucion',
        'porcentaje_creditos_cursados',
        'otro_motivo',
        'licenciatura',
        'porcentaje_creditos_obtenidos',
        'archivo_acta_nacimiento',
        'archivo_curp',
        'archivo_ine',
        'archivo_certificado',
        'archivo_antecedente_secundaria',
        'archivo_curriculm',
        'archivo_docto_ultimo_grado_estudios',
        'archivo_carta_autorizacion',
        'observaciones',
        'usuario_create_id',
        'usuario_record_id',
        'rol_usuario_create_id',
        'rol_usuario_record_id'
    ];
}
