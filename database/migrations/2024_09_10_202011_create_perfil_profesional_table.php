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
        Schema::create('perfil_profesional', function (Blueprint $table) {
            $table->id();
            $table->foreignId('area_conocimiento_id')->constrained('area_conocimiento')->onDelete('cascade');
            $table->string('perfilProfesional');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perfil_profesional');
    }
};
