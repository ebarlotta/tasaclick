<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\Antecendentes as A;
use App\Models\Antecedentes;
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
        // $this->mensaje = '';
        return view('antecedentes.index',compact('departamentos','zonas','antecedentes'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
    
        $request->validate([
            'ubicacion' => 'required',
            'precio' => 'required|integer',
            'superficie' => 'required|integer',
            'frente' => 'required|integer',
            'fondo' => 'required|integer',
            'zona_id' => 'required',
            'departamento_id' => 'required',
        ]);
        // PARA HACER Agregar fecha del antecedente

        // 
        // dd($request);
        $Antecedente = new Antecedentes;
        $Antecedente->ubicacion = $request->ubicacion;
        $Antecedente->precio = $request->precio;
        $Antecedente->superficie = $request->superficie;
        $Antecedente->frente = $request->frente;
        $Antecedente->fondo = $request->fondo;
        $Antecedente->zona_id = $request->zona_id;
        $Antecedente->departamento_id = $request->departamento_id;
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
