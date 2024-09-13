<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sustentante', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sexo_id')->constrained('sexo');
            $table->foreignId('entidad_id')->constrained('entidad');
            $table->bigInteger('perfil_profesional_id')->nullable();
            $table->bigInteger('motivo_no_concluyo_id')->nullable();
            $table->foreignId('antecedente_academico_id')->constrained('antecedente_academico');
            $table->foreignId('usuario_id')->constrained('users');
            $table->foreignId('estado_radica_id')->constrained('entidad');
            $table->foreignId('nivel_educativo_id')->constrained('nivel_educativo');
            $table->foreignId('estatus_sustentante_id')->constrained('estatus_sustentante');
            $table->string('numero_control')->nullable();
            $table->decimal('anio_numero_control')->nullable();
            $table->string('consecutivo_numero_control')->nullable();
            $table->string('curp')->min(18);
            $table->date('fecha_nacimiento');
            $table->string('nacionalidad');
            $table->string('lugar_nacimiento');
            $table->string('calle_numero');
            $table->string('colonia');
            $table->string('codigo_postal')->min(5);
            $table->string('municipio');
            $table->string('telfono_casa')->nullable();
            $table->string('telefono_oficina')->nullable();
            $table->string('celular')->nullable();
            $table->string('institucion')->nullable();
            $table->double('porcentaje_creditos_cursados')->nullable();
            $table->string('otro_motivo')->nullable();
            $table->string('licenciatura')->nullable();
            $table->double('porcentaje_creditos_obtenidos')->nullable();
            $table->string('archivo_acta_nacimiento');
            $table->string('archivo_curp');
            $table->string('archivo_ine');
            $table->string('archivo_certificado');
            $table->string('archivo_antecedente_secundaria')->nullable();
            $table->string('archivo_curriculum')->nullable();
            $table->string('archivo_docto_ultimo_grado_estudios')->nullable();
            $table->string('archivo_carta_autorizacion')->nullable();
            $table->text('observaciones')->nullable();
            $table->timestamps();
            $table->integer('usuario_create_id');
            $table->integer('usuario_record_id');
            $table->integer('rol_usuario_create_id');
            $table->integer('rol_usuario_record_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sustentante');
    }
};
