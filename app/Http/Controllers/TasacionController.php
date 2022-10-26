<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTasacionRequest;
use App\Http\Requests\UpdateTasacionRequest;
use App\Models\Tasacion;

use App\Models\Antecedentes;
use App\Models\Coeficientes;
use App\Models\Departamento;
use App\Models\Zona;
use App\Models\Provincia;
use App\Models\Tipoinmueble;

class TasacionController extends Controller
{
    
    public function index()
    {
        $tasaciones = Tasacion::all();
        //dd($tasaciones);
        return view('tasaciones.index', compact('tasaciones'));
    }

    public function create()
    {
        //
    }

    public function store(StoreTasacionRequest $request)
    {
        //
    }

    public function show(Tasacion $tasacion)
    {
        //
    }

    public function edit($tasacion)
    {
        $tasaciones = Tasacion::all();

        $departamentos = Departamento::all();
        $zonas = Zona::all();
        $antecedentes = Antecedentes::find($tasacion);
        $departamentos = Departamento::all();
        $provincias = Provincia::all();
        $tipoinmuebles = TipoInmueble::all();

        //Coeficientes
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
        // $coeficiente = $this->coeficiente;
        //dd($tasaciones->propiedad[0]->domicilio);

        $tasacion = Tasacion::find($tasacion);
        // dd($tasacion->propiedad);
        // dd($tasacion->propiedad->provincia);
        

        return view('tasaciones.edit',compact('departamentos','zonas','antecedentes','coeficiente_esquinas','coeficiente_formas','coeficiente_topografias','coeficiente_pavimentoyservicios','coeficiente_ubicaciones','coeficiente_ofertas','coeficiente_formapagos','coeficiente_fuenteinformantes','coeficiente_actualizaciones','provincias','tipoinmuebles','coeficiente_zonals','tasacion'));

        // return view('tasaciones.edit', compact('tasaciones'));
    }

    public function update(UpdateTasacionRequest $request, Tasacion $tasacion)
    {
        //
    }

    public function destroy(Tasacion $tasacion)
    {
        //
    }
}
