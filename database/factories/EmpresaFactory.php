<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
class EmpresaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->company(),
            'cuit'=>$this->faker->numberBetween(20000000000,39000000000), 
            'direccion'=>$this->faker->streetAddress(),
            'telefono'=>$this->faker->phoneNumber(),
            'email'=>$this->faker->email(),
            'CBU'=>$this->faker->numberBetween(1000000000000000000000,9000000000000000000000),
            'user_id'=>User::inRandomOrder()->value('id'),
        ];
    }
}
