<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Provincia;
class Departamento extends Model
{
    use HasFactory;

    protected $fillable=[
        'descripcion',
        'provincia_id',
    ];

    public function provincia() {
        return $this->hasOne(Provincia::class,'id','provincia_id');
    }
}
