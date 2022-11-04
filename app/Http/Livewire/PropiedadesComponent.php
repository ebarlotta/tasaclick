<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Provincia;
use App\Models\Zona;
use App\Models\Departamento;
use App\Models\Tipoinmueble;
use App\Models\Coeficientes;
use App\Models\coeficientesfrentefondo as CoeficienteFrenteFondo;

class PropiedadesComponent extends Component
{
    public $provincias;
    public $zonas;
    public $departamentos;
    public $tipoinmuebles;
    
    public $coeficiente_esquinas           ;
    public $coeficiente_formas             ;
    public $coeficiente_topografias        ;
    public $coeficiente_pavimentoyservicios;
    public $coeficiente_ubicaciones        ;
    public $coeficiente_ofertas            ;
    public $coeficiente_formapagos         ;
    public $coeficiente_fuenteinformantes  ;
    public $coeficiente_actualizaciones    ;
    public $frentecmb=0;
    public $fondocmb=0;
    public $superficie=0;
    public $frentes;
    public $fondos;
    // public $fondo1;
    public $zona;
    public $isModal1Open,$isModal2Open;


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
        // dd($this->frentes);
        return view('livewire.propiedades.propiedades-component')->extends('layouts.adminlte');
    }

    public function calcularsuperficie() {
        // dd('entro');
        $this->frente = $this->frente * 2;
    }

    // public function modal1() {
        
    //     $this->fondo1=true;
    // }

    public function openclose1() {
        
        $this->isModal1Open = !$this->isModal1Open;
        // dd($this->isModal2Open);
        // dd($this->frentecmb * $this->fondocmb);
    }

    public function openclose2() {
        
        $this->isModal2Open = !$this->isModal2Open;
        // dd($this->isModal2Open);
        // dd($this->frentecmb * $this->fondocmb);
    }

    public function imprime() {
        $this->superficie = $this->fondocmb * $this->frentecmb;
        // dd($this->fondocmb);
    }
}
