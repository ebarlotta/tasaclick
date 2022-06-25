<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Fin;
use App\Models\Comitente;

class Tasacion extends Model
{
    use HasFactory;

    protected $fillable=[
        'fechatasacion',
        'tasador_id',
        'empresa_id',
        'fin_id',
        'comitente_id',
        'propiedad_id',
    ];

    public function fines()
    {
        // return $this->hasMany('App\Models\Tasacion');

        // dd($this->hasMany(Fin::class, 'id', 'descripcion'));
        return $this->hasMany(Fin::class, 'id', 'fin_id');
        
    }

    public function comitente()
    {
        return $this->hasMany(Comitente::class, 'id', 'comitente_id');
        
    }

    public function propiedad()
    {
        return $this->hasMany(Propiedad::class, 'id', 'propiedad_id');
        
    }
}
