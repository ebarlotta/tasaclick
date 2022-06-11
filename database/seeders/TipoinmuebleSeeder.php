<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoinmuebleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipoinmuebles')->insert(['descripcion'=>'Residencial']);
        DB::table('tipoinmuebles')->insert(['descripcion'=>'Comercio']);
        DB::table('tipoinmuebles')->insert(['descripcion'=>'Industrial']);
    }
}
