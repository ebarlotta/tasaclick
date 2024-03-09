<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Departamento;
class Tasador extends Model
{
    use HasFactory;

    protected $fillable=[
        'nombre', 
        'dni', 
        'cuit', 
        'domicilio', 
        'matricula', 
        'telefono', 
        'email', 
        'departamento_id',
    ];

    public function departamento(){
        return $this->hasOne(Departamento::class,'id','departamento_id');
    }
}
