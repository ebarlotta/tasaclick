<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Zona;
use App\Models\Departamento;

class Antecedentes extends Model
{
    use HasFactory;

    protected $fillable = [
        'ubicacion',
        'precio',
        'superficie',
        'frente',
        'fondo',
        'zona_id',
        'departamento_id',

        'coeficiente_esquinas',
        'coeficiente_formas',
        'coeficiente_topografias',
        'coeficiente_pavimentoyservicios',
        'coeficiente_ubicaciones',
        'coeficiente_ofertas',
        'coeficiente_formapagos',
        'coeficiente_fuenteinformantes',
        'coeficiente_actualizaciones',

    ];

    // Relación uno a muchos

    public function zonas()
    {
        return $this->hasOne(Zona::class, 'id', 'zona_id');
    }
    public function departamentos()
    {
        return $this->hasOne(Departamento::class, 'id', 'departamento_id');
    }
}
