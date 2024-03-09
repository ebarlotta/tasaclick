<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable=[
        'nombre', 
        'cuit', 
        'direccion', 
        'telefono', 
        'email', 
        'CBU', 
        'user_id',
    ];

    public function usuario(){
        return $this->hasOne(User::class,'id','user_id');
    }
}
