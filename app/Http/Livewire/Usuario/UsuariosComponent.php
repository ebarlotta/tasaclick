<?php

namespace App\Http\Livewire\Usuario;

use App\Models\User;
use Livewire\Component;

class UsuariosComponent extends Component
{
    public $usuarios;
    
    public function render()
    {
        $this->usuarios = User::all();
        return view('livewire.usuario.usuarios-component')->extends('layouts.adminlte');
    }
}
