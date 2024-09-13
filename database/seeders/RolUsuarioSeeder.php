<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('rol_usuario')->insert([
            'rolUsuario' => 'Administrador',
            'created_at' => date('Y-m_d H:i:s'),
            'updated_at' => date('Y-m_d H:i:s'),
            'idUsuarioCreate' => 1,
            'idUsuarioRecord' => 1,
            'idRolUsuarioCreate' => 1,
            'idRolUsuarioRecord' => 1

        ]);
        DB::table('rol_usuario')->insert([
            'rolUsuario' => 'Sustentante',
            'created_at' => date('Y-m_d H:i:s'),
            'updated_at' => date('Y-m_d H:i:s'),
            'idUsuarioCreate' => 1,
            'idUsuarioRecord' => 1,
            'idRolUsuarioCreate' => 1,
            'idRolUsuarioRecord' => 1

        ]);
        DB::table('rol_usuario')->insert([
            'rolUsuario' => 'Sede',
            'created_at' => date('Y-m_d H:i:s'),
            'updated_at' => date('Y-m_d H:i:s'),
            'idUsuarioCreate' => 1,
            'idUsuarioRecord' => 1,
            'idRolUsuarioCreate' => 1,
            'idRolUsuarioRecord' => 1

        ]);
        DB::table('rol_usuario')->insert([
            'rolUsuario' => 'Anónimo',
            'created_at' => date('Y-m_d H:i:s'),
            'updated_at' => date('Y-m_d H:i:s'),
            'idUsuarioCreate' => 1,
            'idUsuarioRecord' => 1,
            'idRolUsuarioCreate' => 1,
            'idRolUsuarioRecord' => 1

        ]);
    }
}
