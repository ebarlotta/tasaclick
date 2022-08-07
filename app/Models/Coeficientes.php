<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coeficientes extends Model
{
    use HasFactory;

    protected $fillable=[
        'tabladecoeficiente',
        'descripcion',
        'coeficiente',
    ];
}
