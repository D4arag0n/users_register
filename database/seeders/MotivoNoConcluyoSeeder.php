<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MotivoNoConcluyoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('motivo_no_concluyo')->insert([
            'motivoNoConcluyo' => 'Factor económico',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('motivo_no_concluyo')->insert([
            'motivoNoConcluyo' => 'Asuntos familiares',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('motivo_no_concluyo')->insert([
            'motivoNoConcluyo' => 'Motivos de salud',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('motivo_no_concluyo')->insert([
            'motivoNoConcluyo' => 'Cambio de residencia',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('motivo_no_concluyo')->insert([
            'motivoNoConcluyo' => 'Lineamientos de la institución educativa',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('motivo_no_concluyo')->insert([
            'motivoNoConcluyo' => 'Trabajo',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('motivo_no_concluyo')->insert([
            'motivoNoConcluyo' => 'Otros',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
