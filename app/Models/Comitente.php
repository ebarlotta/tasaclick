<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comitente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'cuit',
        'domicilio',
        'telefono',
        'email',
        'dni',
        'departamento_id',
    ];
}
