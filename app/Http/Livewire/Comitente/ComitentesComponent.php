<?php

namespace App\Http\Livewire\Comitente;

use App\Models\Comitente;
use Livewire\Component;

class ComitentesComponent extends Component
{
    public $comitentes;
    
    public function render()
    {
        $this->comitentes = Comitente::all();
        return view('livewire.comitente.comitentes-component')->extends('layouts.adminlte');
    }
}
