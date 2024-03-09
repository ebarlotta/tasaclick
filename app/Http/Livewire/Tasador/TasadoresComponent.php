<?php

namespace App\Http\Livewire\Tasador;

use App\Models\Tasador;
use Livewire\Component;

class TasadoresComponent extends Component
{
    public $tasadores;

    public function render()
    {
        $this->tasadores = Tasador::all();
        return view('livewire.tasador.tasadores-component')->extends('layouts.adminlte');
    }
}
