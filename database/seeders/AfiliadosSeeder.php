<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AfiliadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('afiliados')->insert([
            'numeroAfiliacion' => Str::random(6),
            'curp' => 'XEXX010101HNEXXXA1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('afiliados')->insert([
            'numeroAfiliacion' => Str::random(6),
            'curp' => 'XEXX010101HNEXXXA2',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('afiliados')->insert([
            'numeroAfiliacion' => Str::random(6),
            'curp' => 'XEXX010101HNEXXXA3',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('afiliados')->insert([
            'numeroAfiliacion' => Str::random(6),
            'curp' => 'XEXX010101HNEXXXA4',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('afiliados')->insert([
            'numeroAfiliacion' => Str::random(6),
            'curp' => 'XEXX010101HNEXXXA5',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
