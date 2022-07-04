<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Departamento;
use App\Models\Tipoinmueble;
use App\Models\Zona;

class PropiedadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // $langtitude = $this->faker->latitude(
        //     $min = ($this->lang * 10000 - rand(0, 50)) / 10000,
        //     $max = ($this->lang * 10000 + rand(0, 50)) / 10000);
        
        // $longitute = $this->faker->longitude(
        //     $min = ($this->long * 10000 - rand(0, 50)) / 10000,
        //     $max = ($this->long * 10000 + rand(0, 50)) / 10000);
        // $gps = $langtitude.','.$longitude;
        return [
            'domicilio'=>$this->faker->streetAddress(),
            'padron'=>$this->faker->numberBetween(1000000,2000000),  // bardode isbn10         // '4881416324'
            'padronmunicipal'=>$this->faker->numberBetween(1000000,2000000),
            'titularregistral'=>$this->faker->name(),
            'registrodepropiedad'=>$this->faker->numberBetween(1000000,2000000),
            'nomenclaturacatastral'=>$this->faker->numberBetween(1000000,2000000),
            'nroplano'=>$this->faker->numberBetween(1000000,2000000),
            'ubicaciongps'=>'-33.083633362636725, -68.47320552341007',
            'departamento_id'=>Departamento::inRandomOrder()->value('id'),
            'tipoinmueble_id'=>Tipoinmueble::inRandomOrder()->value('id'),
            'zona_id'=>Zona::inRandomOrder()->value('id'),
        ];
    }
}
