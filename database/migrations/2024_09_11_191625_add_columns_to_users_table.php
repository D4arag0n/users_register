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
        Schema::table('users', function (Blueprint $table) {
            //
            $table->foreignId('rol_usuario_id')->constrained('rol_usuario');
            $table->bigInteger('entidad_id')->nullable();
            $table->foreignId('estatus_usuario_id')->constrained('estatus_usuario');
            $table->bigInteger('sede_id')->nullable();
            $table->string('primer_apellido');
            $table->string('segundo_apellido');
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
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropForeign('users_rol_usuario_id_foreign');
            $table->dropForeign('users_estatus_usuario_id_foreign');
            
            $table->dropColumn(['rol_usuario_id', 'entidad_id', 'estatus_usuario_id', 'sede_id', 
            'primer_apellido', 'segundo_apellido', 'usuario_create_id', 'usuario_record_id', 
            'rol_usuario_create_id', 'rol_usuario_record_id']);
        });
    }
};
