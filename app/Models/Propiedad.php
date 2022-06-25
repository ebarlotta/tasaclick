<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Departamento;

class Propiedad extends Model
{
    use HasFactory;

    protected $fillable=[
        'domicilio',
        'padron',
        'padronmunicipal',
        'titularregistral',
        'registrodepropiedad',
        'nomebclaturacatastral',
        'nroplano',
        'ubicaciongps',
        'departamento_id',
        'tipoinmueble_id',
        'zona_id',
    ];

    public function departamento()
    {
        return $this->hasMany(Departamento::class, 'id', 'departamento_id');
        
    }

    public function imagenplano()
    {
        return $this->hasMany(Archivo::class, 'propiedad_id', 'id');
        
    }
}

