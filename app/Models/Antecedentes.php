<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\Zona;
// use App\Models\Departamento;

class Antecedentes extends Model
{
    use HasFactory;

    protected $fillable = [
        'domicilio',
        'precio',
        'superficie',
        'frente',
        'fondo',
        'ubicaciongps',
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
        'precionormalizado',
        'coheficientenormalizado',
    ];

    // Relación uno a muchos

    public function zona()
    {
        return $this->hasOne(Zona::class, 'id', 'zona_id');
    }

    public function departamento()
    {
        return $this->hasOne(Departamento::class, 'id', 'departamento_id');
    }

}
