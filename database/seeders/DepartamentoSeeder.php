<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departamentos')->insert(['cp'=>'5570','descripcion'=>'San Martín','provincia_id'=>'1']);
        DB::table('departamentos')->insert(['cp'=>'5570','descripcion'=>'Junín','provincia_id'=>'1']);
        DB::table('departamentos')->insert(['cp'=>'5570','descripcion'=>'Rivadavia','provincia_id'=>'1']);
        DB::table('departamentos')->insert(['cp'=>'5570','descripcion'=>'Maipú','provincia_id'=>'1']);
        DB::table('departamentos')->insert(['cp'=>'5570','descripcion'=>'Mendoza - Ciudad','provincia_id'=>'1']);
    }
}
