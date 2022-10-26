<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePropiedadRequest;
use App\Http\Requests\UpdatePropiedadRequest;
use App\Models\Propiedad;
use App\Models\Coeficientes;
use App\Models\coeficientesfrentefondo as CoeficienteFrenteFondo;
use App\Models\Departamento;
use App\Models\Provincia;
use App\Models\Tipoinmueble;
use App\Models\Zona;


class PropiedadController extends Controller
{
    public $zonas;
    public $departamentos;
    public $provincias;
    public $tipoinmuebles;
    public $coeficiente;
    public $frentesctrl=0;
    public $fondosctrl=0;

    public function index()
    {
        return view('propiedades.index');
    }


    public function create()
    {
        $zonas = Zona::all();
        $departamentos = Departamento::all();
        $provincias = Provincia::all();
        $tipoinmuebles = TipoInmueble::all();
        
        $coeficiente_esquinas            = Coeficientes::where('tabladecoeficiente','CoeficienteDeEsquina')->get();
        $coeficiente_formas              = Coeficientes::where('tabladecoeficiente','Coeficiente De Forma')->get();
        $coeficiente_topografias         = Coeficientes::where('tabladecoeficiente','Coeficiente de Topografía')->get();
        $coeficiente_pavimentoyservicios = Coeficientes::where('tabladecoeficiente','Coeficiente de Pavimento y Sevicio Público')->get();
        $coeficiente_ubicaciones         = Coeficientes::where('tabladecoeficiente','Coeficiente de Ubicación')->get();
        $coeficiente_ofertas             = Coeficientes::where('tabladecoeficiente','Coeficiente de Oferta')->get();
        $coeficiente_formapagos          = Coeficientes::where('tabladecoeficiente','Coeficiente de Forma de Pago')->get();
        $coeficiente_fuenteinformantes   = Coeficientes::where('tabladecoeficiente','Coeficiente de fuente informante')->get();
        $coeficiente_actualizaciones     = Coeficientes::where('tabladecoeficiente','Coeficiente de Actualización')->get();
        $coeficiente_zonals              = Coeficientes::where('tabladecoeficiente','Coeficiente Zonal')->get();
        $frentes     = CoeficienteFrenteFondo::select('columna')->distinct()->get();
        $fondos     = CoeficienteFrenteFondo::select('fila')->distinct()->get();
        

        return view('propiedades.create',compact('departamentos','zonas','tipoinmuebles','provincias','coeficiente_esquinas','coeficiente_formas','coeficiente_topografias','coeficiente_pavimentoyservicios','coeficiente_ubicaciones','coeficiente_ofertas','coeficiente_formapagos','coeficiente_fuenteinformantes','coeficiente_actualizaciones','coeficiente_zonals','frentes','fondos'));
    }

    public function antecedentes()
    {
        $zonas = Zona::all();
        $departamentos = Departamento::all();
        $provincias = Provincia::all();
        $tipoinmuebles = TipoInmueble::all();
        dd($zonas);
        return view('propiedades.antecedentes',compact('provincias','zonas','departamentos','tipoinmuebles'));
    }


    public function store(StorePropiedadRequest $request)
    {
        //
    }


    public function show(Propiedad $propiedad)
    {
        //
    }


    public function edit(Propiedad $propiedad)
    {
        //
    }


    public function update(UpdatePropiedadRequest $request, Propiedad $propiedad)
    {
        //
    }


    public function destroy(Propiedad $propiedad)
    {
        //
    }

    public function caclular()
    {
        return view('propiedades.index');
    }
}
