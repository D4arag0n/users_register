<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        /*$this->call(AfiliadosSeeder::class);
        $this->call(AreaConocimientoSeeder::class);
        $this->call(EntidadSeeder::class);
        $this->call(EstatusSustentanteSeeder::class);
        $this->call(EstatusUsuarioSeeder::class);
        $this->call(RolUsuarioSeeder::class);
        $this->call(SedeSeeder::class);
        $this->call(SexoSeeder::class);
        $this->call(NivelEducativoSeeder::class);
        $this->call(MotivoNoConcluyoSeeder::class);*/
        $this->call(AntecedenteAcademicoSeeder::class);
    }
}
