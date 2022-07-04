<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Departamento;

class ComitenteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                'nombre'=>$this->faker->name(),
                'cuit'=>$this->faker->numberBetween(20000000000,39000000000), 
                'domicilio'=>$this->faker->streetAddress(), 
                'telefono'=>$this->faker->phoneNumber(),
                'email'=>$this->faker->email(),
                'dni'=>$this->faker->numberBetween(5000000,60000000),
                'departamento_id'=>Departamento::inRandomOrder()->value('id')
        ];
    }
}
