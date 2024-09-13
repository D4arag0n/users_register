<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SedeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('sede')->insert([
            'entidad_id' => 15,
            'sede' => 'Atizapán de Zaragoza',
            'domicilio' => 'CALLE JALAPA 1205 FRACCIONAMIENTO VERACRUZ, BAJA CALIFORNIA',
            'nombreContacto' => 'Lic. Isaac Diaz.',
            'telefonoContacto' => '5517894867',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('sede')->insert([
            'entidad_id' => 15,
            'sede' => 'Cuautitlán Izcalli',
            'domicilio' => 'CALLE PLAYA MIRADOR 353 COLONIA IZTACIHUATL CP. 08810 CDMX. IZTACALCO',
            'nombreContacto' => 'Lic. Isaac Diaz.',
            'telefonoContacto' => '5517894867',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('sede')->insert([
            'entidad_id' => 15,
            'sede' => 'Metepec',
            'domicilio' => 'AVENIDA SANTA PRISCA LOTE 3 MANZANA 78 COLONIA NUEVO PASEO DE SAN AGUSTIN ECATEPEC DE MORELOS EDO. MEX.',
            'nombreContacto' => 'Lic. Isaac Diaz.',
            'telefonoContacto' => '5517894867',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('sede')->insert([
            'entidad_id' => 15,
            'sede' => 'Naucalpan de Juárez',
            'domicilio' => 'CALLE COSTA RICA 220 FRECCIONAMIENTO LAS AMÉRICAS CP. 20230 AGUASCALIENTES, AGUSCALIENTES',
            'nombreContacto' => 'Lic. Isaac Diaz.',
            'telefonoContacto' => '5517894867',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('sede')->insert([
            'entidad_id' => 15,
            'sede' => 'Tlalnepantla de Baz',
            'domicilio' => 'CALLE ABASOLO 57 INTERIOR 2 PISO CHILPANCINGO GUERRERO',
            'nombreContacto' => 'Lic. Isaac Diaz.',
            'telefonoContacto' => '5517894867',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('sede')->insert([
            'entidad_id' => 15,
            'sede' => 'Toluca de Lerdo',
            'domicilio' => 'CALLE REFORMA 341 COLONIA PROYECTO RIO SONORA HERMOSILLO SONORA',
            'nombreContacto' => 'Lic. Isaac Diaz.',
            'telefonoContacto' => '5517894867',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
