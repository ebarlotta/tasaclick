<?php

namespace App\Http\Livewire\Departamentos;

use App\Models\Departamento;
use Livewire\Component;

class DepartaentosComponent extends Component
{
    public $departamentos; 
    
    public function render()
    {
        $this->departamentos = Departamento::all();
        return view('livewire.departamentos.departaentos-component')->extends('layouts.adminlte') ;
    }
}
