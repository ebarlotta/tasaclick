<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('zonas')->insert(['descripcion'=>'Urbana']);
        DB::table('zonas')->insert(['descripcion'=>'Suburbana']);
        DB::table('zonas')->insert(['descripcion'=>'Rural']);
        DB::table('zonas')->insert(['descripcion'=>'Industrial']);
    }
}
