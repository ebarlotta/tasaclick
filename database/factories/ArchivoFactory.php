<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Propiedad;

class ArchivoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'url'=>'images/assets/tasaclick.jpg',
            'propiedad_id'=>Propiedad::inRandomOrder()->value('id')
        ];
    }
}
