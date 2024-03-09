<?php

namespace App\Http\Livewire\Provincia;

use App\Models\Pais;
use Livewire\Component;
use App\Models\Provincia;


class ProvinciasComponent extends Component
{
    public $provincias, $pais_id, $paises;
    public $isModalAlta;

    public function render()
    {
        $this->provincias= Provincia::all();
        $this->paises= Pais::all();
        return view('livewire.provincia.provincias-component')->extends('layouts.adminlte') ;
    }

    public function isModalAlta() {
        $this->isModalAlta = !$this->isModalAlta;
    }
}
