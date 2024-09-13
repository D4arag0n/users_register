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
        Schema::create('rol_usuario_permiso', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rol_usuario_id')->constrained('rol_usuario')->onDelete('cascade');
            $table->foreignId('permiso_id')->constrained('permiso')->onDelete('cascade');
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
        Schema::dropIfExists('rol_usuario_permiso');
    }
};
