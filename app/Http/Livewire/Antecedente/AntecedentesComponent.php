<?php

namespace App\Http\Livewire\Antecedente;

use App\Models\Antecedentes;
use Livewire\Component;

class AntecedentesComponent extends Component
{
    public $antecedentes;

    public function render()
    {
        $this->antecedentes = Antecedentes::all();
        return view('livewire.antecedente.antecedentes-component')->extends('layouts.adminlte');;
    }
}
