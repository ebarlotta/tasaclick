<?php

namespace App\Http\Livewire\Listadopropiedades;

use App\Models\Antecedentes;
use App\Models\Coeficientes;
use App\Models\Departamento;
use Livewire\Component;
use App\Models\Provincia;
use App\Models\Tipoinmueble;
use App\Models\Zona;
use App\Models\coeficientesfrentefondo as CoeficienteFrenteFondo;
use App\Models\Propiedad;



class ListadopropiedadesComponent extends Component
{
    public $provincias;
    public $zonas;
    public $departamentos;
    public $tipoinmuebles;
    public $propiedades;
    public $frentes;
    public $fondos;

    public $fijados=null;

    public $isHidden1Open=true;

    public $coeficiente_esquinas           ;
    public $coeficiente_formas             ;
    public $coeficiente_topografias        ;
    public $coeficiente_pavimentoyservicios;
    public $coeficiente_ubicaciones        ;
    public $coeficiente_ofertas            ;
    public $coeficiente_zonal              ;
    public $coeficiente_restricciones      ;
    public $coeficiente_formapagos         ;
    public $coeficiente_fuenteinformantes  ;
    public $coeficiente_actualizaciones    ;

    public function render()
    {
         //Datos2
         $this->provincias = Provincia::all();
         $this->zonas = Zona::all();
         $this->departamentos = Departamento::orderby('descripcion')->get();
         $this->tipoinmuebles = TipoInmueble::all();
         //Datos3
         $this->coeficiente_esquinas            = Coeficientes::where('tabladecoeficiente','CoeficienteDeEsquina')->get();
         $this->coeficiente_formas              = Coeficientes::where('tabladecoeficiente','Coeficiente De Forma')->get();
         $this->coeficiente_topografias         = Coeficientes::where('tabladecoeficiente','Coeficiente de Topografía')->get();
         $this->coeficiente_pavimentoyservicios = Coeficientes::where('tabladecoeficiente','Coeficiente de Pavimento y Sevicio Público')->get();
         $this->coeficiente_ubicaciones         = Coeficientes::where('tabladecoeficiente','Coeficiente de Ubicación')->get();
         $this->coeficiente_ofertas             = Coeficientes::where('tabladecoeficiente','Coeficiente de Oferta')->get();
         $this->coeficiente_formapagos          = Coeficientes::where('tabladecoeficiente','Coeficiente de Forma de Pago')->get();
         $this->coeficiente_fuenteinformantes   = Coeficientes::where('tabladecoeficiente','Coeficiente de fuente informante')->get();
         $this->coeficiente_actualizaciones     = Coeficientes::where('tabladecoeficiente','Coeficiente de Actualización')->get();
         // $this->frentes                         = CoeficienteFrenteFondo::select('id,columna')->distinct('columna')->get();
         $this->frentes                         = CoeficienteFrenteFondo::select('columna')->distinct()->get();
         // $this->frentes = CoeficienteFrenteFondo::groupby('columna')->get();
 
         $this->fondos                          = CoeficienteFrenteFondo::select('id','fila')->distinct()->get();
         // dd($this->coeficiente_fuenteinformantes);
         $this->propiedades = Propiedad::all();
        //  return view('livewire.propiedades.propiedades2-component',
        $this->fijados = Antecedentes::where('id','>',1)->get();
        // dd($this->fijados->departamento);
        // dd($this->fijados->departamento);
        return view('livewire.listadopropiedades.listadopropiedades-component')->extends('layouts.adminlte')    ;
    }

    public function MostrarValoresFijados($id) {
        dd('entró en MostrarValoresFijados');
        $valorefijados = Antecedentes::where('propiedad_id','=',$id)->get();
        $this->isHidden1Open = !$this->isHidden1Open;
    }
}