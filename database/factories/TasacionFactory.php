<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tasador;
use App\Models\Empresa;
use App\Models\Fin;
use App\Models\Comitente;
use App\Models\Propiedad;

class TasacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                'fechatasacion'=>now(),
                'preciofinal'=>1000,
                'propiedad_id'=>Propiedad::inRandomOrder()->value('id'),
                'tasador_id'=>Tasador::inRandomOrder()->value('id'),
                'empresa_id'=>Empresa::inRandomOrder()->value('id'),
                'fin_id'=>Fin::inRandomOrder()->value('id'),
                'comitente_id'=>Comitente::inRandomOrder()->value('id'),
        ];
    }
}
