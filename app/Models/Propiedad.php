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
        return $this->hasOne(Archivo::class, 'propiedad_id', 'id');
        // return $this->hasMany(Archivo::class, 'propiedad_id', 'id');
        
    }

    public function provincia()
    {
        return $this->hasOne(Provincia::class, 'id','departamento_id');
        // return $this->hasMany(Archivo::class, 'propiedad_id', 'id');
        
    }

    public function inmueble()
    {
        return $this->hasOne(Tipoinmueble::class, 'id','tipoinmueble_id');
        // return $this->hasMany(Archivo::class, 'propiedad_id', 'id');
        
    }

    public function zona()
    {
        return $this->hasOne(Zona::class, 'id','zona_id');
        // return $this->hasMany(Archivo::class, 'propiedad_id', 'id');
        
    }
}

