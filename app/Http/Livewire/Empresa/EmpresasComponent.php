<?php

namespace App\Http\Livewire\Empresa;

use App\Models\Empresa;
use Livewire\Component;

class EmpresasComponent extends Component
{
    public $empresas;
    
    public function render()
    {
        $this->empresas = Empresa::all();
        return view('livewire.empresa.empresas-component')->extends('layouts.adminlte');
    }
}
