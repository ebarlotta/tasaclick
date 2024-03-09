<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pais;
class Provincia extends Model
{
    use HasFactory;

    protected $fillable=[
        'descripcion',
        'pais_id',
    ];

    public function pais() {
        return $this->hasOne(Pais::class,'id','pais_id');
    }
}
