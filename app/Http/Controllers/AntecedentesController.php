<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\Antecendentes as A;
use App\Models\Antecedentes;
use App\Models\Coeficientes;
use App\Models\Departamento;
use App\Models\Zona;

class AntecedentesController extends Controller
{

    public $mensaje='';

    public function index()
    {
        $departamentos = Departamento::all();
        $zonas = Zona::all();
        $antecedentes = Antecedentes::all();

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
        
        // $this->mensaje = '';
        return view('antecedentes.index',compact('departamentos','zonas','antecedentes','coeficiente_esquinas','coeficiente_formas','coeficiente_topografias','coeficiente_pavimentoyservicios','coeficiente_ubicaciones','coeficiente_ofertas','coeficiente_formapagos','coeficiente_fuenteinformantes','coeficiente_actualizaciones'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
    
        $request->validate([
            'direccion' => 'required',
            'precio' => 'required|integer',
            'superficie' => 'required|integer',
            'frente' => 'required|integer',
            'fondo' => 'required|integer',
            'zona_id' => 'required',
            'departamento_id' => 'required',
        ]);
        // PARA HACER Agregar fecha del antecedente
//dd($request);
        // 
        // dd($request);
        $Antecedente = new Antecedentes;
        $Antecedente->direccion = $request->direccion;
        $Antecedente->precio = $request->precio;
        $Antecedente->superficie = $request->superficie;
        $Antecedente->frente = $request->frente;
        $Antecedente->fondo = $request->fondo;
        $Antecedente->zona_id = $request->zona_id;
        $Antecedente->departamento_id = $request->departamento_id;

        $Antecedente->coeficiente_esquinas = $request->coeficiente_esquina;
        $Antecedente->coeficiente_formas = $request->coeficiente_forma;
        $Antecedente->coeficiente_topografias = $request->coeficiente_topografia;
        $Antecedente->coeficiente_pavimentoyservicios = $request->coeficiente_pavimentoyservicio;
        $Antecedente->coeficiente_ubicaciones = $request->coeficiente_ubicacion;
        $Antecedente->coeficiente_ofertas = $request->coeficiente_oferta;
        $Antecedente->coeficiente_formapagos = $request->coeficiente_formapago;
        $Antecedente->coeficiente_fuenteinformantes = $request->coeficiente_fuenteinformante;
        $Antecedente->coeficiente_actualizaciones = $request->coeficiente_actualizacion;
        $Antecedente->ubicaciongps=10;

        $Antecedente->save();
        // $antecedentes = Antecedentes::all();
        return redirect()->route('antecedentes.index')->with('mensaje','Alta Exitosa!');
    }

    public function show(Antecedentes $antecedentes)
    {
        //
    }

    public function edit(Antecedentes $antecedentes)
    {
        //
    }

    public function update(Antecedentes $request, Antecedentes $antecedentes)
    {
        //
    }

    public function destroy(Antecedentes $antecedentes)
    {
        //
    }
}
