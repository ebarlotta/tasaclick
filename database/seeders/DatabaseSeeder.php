<?php

namespace Database\Seeders;

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
        $this->call([PaisSeeder::class]);
        $this->call([ProvinciaSeeder::class]);
        $this->call([DepartamentoSeeder::class]);
        $this->call([ZonaSeeder::class]);
        $this->call([TipoinmuebleSeeder::class]);
        $this->call([CoeficientesSeeder::class]);
        $this->call([CoeficientesFrentefondoSeeder::class]);

        // Empresa::factory()->count(5)->create() comando para ejecutar en Tinker

        \App\Models\User::factory(10)->create();
        \App\Models\Tasador::factory(10)->create();
        \App\Models\Comitente::factory(10)->create();
        \App\Models\Fin::factory(10)->create();
        \App\Models\Empresa::factory(10)->create();
        \App\Models\Propiedad::factory(10)->create();


        \App\Models\Tasacion::factory(10)->create();
        \App\Models\Archivo::factory(10)->create();
    }
}
