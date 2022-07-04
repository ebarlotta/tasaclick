<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Departamento;
class TasadorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    { //tasadors 
        return [
            'nombre'=>$this->faker->name(),
            'dni'=>$this->faker->numberBetween(5000000,60000000),
            'cuit'=>$this->faker->numberBetween(20000000000,39000000000), 
            'domicilio'=>$this->faker->streetAddress(), 
            'matricula'=>$this->faker->numberBetween(5000000,60000000),
            'telefono'=>$this->faker->phoneNumber(),
            'email'=>$this->faker->email(),
            'departamento_id'=>Departamento::inRandomOrder()->value('id'),
        ];
    }
}
