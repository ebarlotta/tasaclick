<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePropiedadRequest;
use App\Http\Requests\UpdatePropiedadRequest;
use App\Models\Propiedad;
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
        
        return view('propiedades.create',compact('provincias','zonas','departamentos','tipoinmuebles'));
    }

    public function antecedentes()
    {
        $zonas = Zona::all();
        $departamentos = Departamento::all();
        $provincias = Provincia::all();
        $tipoinmuebles = TipoInmueble::all();
        
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
}
