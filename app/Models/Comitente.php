<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Departamento;
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

    public function departamento() {
        return $this->hasOne(Departamento::class,'id','departamento_id');
    }
}
