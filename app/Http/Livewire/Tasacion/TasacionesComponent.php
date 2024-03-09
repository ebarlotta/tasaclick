<?php

namespace App\Http\Livewire\Tasacion;

use Livewire\Component;
use App\Models\Tasacion;

use App\Models\Antecedentes;
use App\Models\Coeficientes;
use App\Models\Departamento;
use App\Models\Zona;
use App\Models\Provincia;
use App\Models\Tipoinmueble;

class TasacionesComponent extends Component
{
    public $tasaciones;

    public function render()
    {
        $this->tasaciones = Tasacion::all();
        // dd($tasaciones);
        return view('livewire.tasacion.tasaciones-component')->extends('layouts.adminlte');
    }
}
