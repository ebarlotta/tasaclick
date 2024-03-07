<?php

namespace App\Http\Livewire;

use App\Models\Antecedentes;
use Livewire\Component;
use App\Models\Provincia;
use App\Models\Zona;
use App\Models\Departamento;
use App\Models\Tipoinmueble;
use App\Models\Coeficientes;
use App\Models\coeficientesfrentefondo as CoeficienteFrenteFondo;
use App\Models\Propiedad;

class PropiedadesComponent extends Component
{
    public $provincias;
    public $zonas;
    public $departamentos;
    public $tipoinmuebles;
    

    // public $frentecmb=0;
    // public $fondocmb=0;
    public $propiedadId;
    public $superficie=0;
    public $frentes;
    public $fondos;
    public $precio = 3;
    public $precionormalizado = 2;
    public $preciofinal = 2;
    // public $fondo1;
    
    public $propiedades;    //Utilizadas para el listado de propiedades

    public $isModal1Open,$isModal2Open, $isModal3Open, $isModal4Open;

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


    //A1Guardar Modal
    public $domicilio;
    public $padronterritorial;
    public $padronmunicipal;
    public $titularregistral;
    public $nomenclaturacatastral;
    public $numerodeplano;
    
    //A2Guardar Modal
    public $cmbprovincias;
    public $cmbdepartamentos;
    public $cmbtipoinmuebles;
    public $cmbzonas;
    public $cmbubicacion;
    public $cmbfrente;
    public $cmbfondo;

    //A3Guardar Modal
    public $cmbcoeficiente_esquinas           ;
    public $cmbcoeficiente_formas             ;
    public $cmbcoeficiente_topografias        ;
    public $cmbcoeficiente_pavimentoyservicios;
    public $cmbcoeficiente_ubicaciones        ;
    public $cmbcoeficiente_ofertas            ;
    public $cmbcoeficiente_zonal              ;
    public $cmbcoeficiente_restricciones      ;

    public $cmbcoeficiente_formapagos         ;
    public $cmbcoeficiente_fuenteinformantes  ;
    public $cmbcoeficiente_actualizaciones    ;

    //B1Guardar Modal
    public $txtfecha;
    public $txtdireccion;
    public $txtprecio;
    public $txtvalorunitario;
    public $txtsuperficie;
    public $txtfrente;
    public $txtfondo;
    public $txtubicaciongps;
    public $txtdepartamentos;
    public $txtzonas;
    // Se van a utilizar además los controles de A3

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
        return view('livewire.propiedades.propiedades-component')->extends('layouts.adminlte');
    }

    public function render2()
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
        $propiedades = Propiedad::all();
        return view('livewire.propiedades.propiedades2-component',compact('propiedades'))->extends('layouts.adminlte');
    }

    public function calcularsuperficie() {
        // dd('entro');
        $this->superficie = $this->cmbfondo * $this->cmbfrente;
    }

    // public function modal1() {
        
    //     $this->fondo1=true;
    // }

    public function openclose1() {
        $this->isModal1Open = !$this->isModal1Open;
    }

    public function openclose2() {
        $this->isModal2Open = !$this->isModal2Open;
    }

    public function openclose3() {
        $this->isModal3Open = !$this->isModal3Open;
    }

    public function openclose4() {
        $this->isModal4Open = !$this->isModal4Open;
    }

    public function A1Guardar() {
        $propiedad = new Propiedad;
        $propiedad->domicilio = $this->domicilio;
        $propiedad->padron = $this->padronterritorial;
        $propiedad->padronmunicipal = $this->padronmunicipal;
        $propiedad->titularregistral = $this->titularregistral;
        $propiedad->nomenclaturacatastral = $this->nomenclaturacatastral;
        $propiedad->nroplano = $this->numerodeplano;

        $propiedad->registrodepropiedad = 0;

        $propiedad->save();
        $this->openclose1();
        if ($propiedad->id) { $this->propiedadId = $propiedad->id; }
        
    }

    public function A2Guardar() {
        
        //dd($this->cmbubicacion);

        $propiedad = Propiedad::find($this->propiedadId);

    //$propiedad-> = $cmbprovincias;
        $propiedad->departamento_id = $this->cmbdepartamentos;
        $propiedad->tipoinmueble_id = $this->cmbtipoinmuebles;
        $propiedad->zona_id = $this->cmbzonas;
        $propiedad->ubicaciongps = $this->cmbubicacion;
        $propiedad->frente = $this->cmbfrente;
        $propiedad->fondo = $this->cmbfondo;

        $propiedad->save();
        $this->openclose2();
    }

    public function A3Guardar() {

        $antecedente = new Antecedentes;
        $antecedente->domicilio = $this->domicilio;
        $antecedente->precio = 0 ;
        $antecedente->frente = $this->cmbfrente;
        $antecedente->fondo = $this->cmbfondo;
        $antecedente->superficie = $this->cmbfrente * $this->cmbfondo;
        $antecedente->ubicaciongps = $this->cmbubicacion;
        $antecedente->zona_id = $this->cmbzonas;
        $antecedente->departamento_id = $this->cmbdepartamentos;
       
        $antecedente->propiedad_id = $this->propiedadId;

        $antecedente->coeficiente_esquinas = $this->cmbcoeficiente_esquinas           ;
        $antecedente->coeficiente_formas = $this->cmbcoeficiente_formas             ;
        $antecedente->coeficiente_topografias = $this->cmbcoeficiente_topografias        ;
        $antecedente->coeficiente_pavimentoyservicios = $this->cmbcoeficiente_pavimentoyservicios;
        $antecedente->coeficiente_ubicaciones = $this->cmbcoeficiente_ubicaciones        ;
        $antecedente->coeficiente_ofertas = $this->cmbcoeficiente_ofertas            ;
        $antecedente->coeficiente_formapagos =  $this->cmbcoeficiente_formas         ;
        $antecedente->coeficiente_fuenteinformantes = $this->cmbcoeficiente_fuenteinformantes  ;
        $antecedente->coeficiente_actualizaciones = $this->cmbcoeficiente_actualizaciones    ;
        
        // $antecedente->coeficiente_fuenteinformantes = 0; //$this->cmbcoeficiente_fuenteinformantes  ;
        // $antecedente->coeficiente_actualizaciones = 0; //$this->cmbcoeficiente_actualizaciones    ;

        // $antecedente->precionormalizado = 0;
        // $antecedente->coeficientenormalizado = 0;
        $antecedente->coeficientenormalizado=$this->calcular_coeficiente($antecedente);
        $antecedente->precionormalizado=$antecedente->coeficientenormalizado*$antecedente->precio;
        // dd($antecedente);
        $antecedente->save();
        $this->openclose3();
        //$antecedente-> = $this->cmbcoeficiente_zonal              ;
        //$antecedente-> = $this->cmbcoeficiente_restricciones      ;
    }

    public function calcular_coeficiente(Antecedentes $A) {   
        //Controla si los elementos han sido seleccionados y tienen algún valor
        if( $A->coeficiente_esquinas<>0 and $A->coeficiente_formas<>0 and $A->coeficiente_topografias<>0 and $A->coeficiente_pavimentoyservicios<>0 and $A->coeficiente_ubicaciones<>0 and $A->coeficiente_ofertas<>0 and $A->coeficiente_formapagos<>0 and $A->coeficiente_fuenteinformantes<>0 and $A->coeficiente_actualizaciones<>0 ) {
            // dd($A);
        
        $coeficiente_esquinas            = Coeficientes::find($A->coeficiente_esquinas);
        $coeficiente_formas              = Coeficientes::find($A->coeficiente_formas);
        $coeficiente_topografias         = Coeficientes::find($A->coeficiente_topografias);
        $coeficiente_pavimentoyservicios = Coeficientes::find($A->coeficiente_pavimentoyservicios);
        $coeficiente_ubicaciones         = Coeficientes::find($A->coeficiente_ubicaciones);
        $coeficiente_ofertas             = Coeficientes::find($A->coeficiente_ofertas);
        $coeficiente_formapagos          = Coeficientes::find($A->coeficiente_formapagos);
        $coeficiente_fuenteinformantes   = Coeficientes::find($A->coeficiente_fuenteinformantes);
        $coeficiente_actualizaciones     = Coeficientes::find($A->coeficiente_actualizaciones);

        return $coeficiente_esquinas->coeficiente * $coeficiente_formas->coeficiente * $coeficiente_topografias->coeficiente * $coeficiente_pavimentoyservicios->coeficiente * $coeficiente_ubicaciones->coeficiente * $coeficiente_ofertas->coeficiente * $coeficiente_formapagos->coeficiente * $coeficiente_fuenteinformantes->coeficiente * $coeficiente_actualizaciones->coeficiente;
        }
    }

    public function B1Guardar() {
        $antecedente = new Antecedentes;
        $antecedente->created_at = $this->txtfecha ;
        $antecedente->domicilio = $this->txtdireccion;
        $antecedente->precio = $this->txtprecio ;
        $antecedente->superficie = $this->txtsuperficie;
        $antecedente->frente = $this->txtfrente;
        $antecedente->fondo = $this->txtfondo;
        $antecedente->ubicaciongps = $this->txtubicaciongps;
        $antecedente->departamento_id = $this->txtdepartamentos;
        $antecedente->zona_id = $this->txtzonas;
        
        $antecedente->propiedad_id = $this->propiedadId;

        $antecedente->coeficiente_esquinas = $this->cmbcoeficiente_esquinas           ;
        $antecedente->coeficiente_formas = $this->cmbcoeficiente_formas             ;
        $antecedente->coeficiente_topografias = $this->cmbcoeficiente_topografias        ;
        $antecedente->coeficiente_pavimentoyservicios = $this->cmbcoeficiente_pavimentoyservicios;
        $antecedente->coeficiente_ubicaciones = $this->cmbcoeficiente_ubicaciones        ;
        $antecedente->coeficiente_ofertas = $this->cmbcoeficiente_ofertas            ;
        $antecedente->coeficiente_formapagos =  $this->cmbcoeficiente_formas         ;
        $antecedente->coeficiente_fuenteinformantes = $this->cmbcoeficiente_fuenteinformantes  ;
        $antecedente->coeficiente_actualizaciones = $this->cmbcoeficiente_actualizaciones    ;
        
        $antecedente->coeficientenormalizado=$this->calcular_coeficiente($antecedente);
        $antecedente->precionormalizado=$antecedente->coeficientenormalizado*$antecedente->precio;
        // $antecedente->precionormalizado = 0;
        // $antecedente->coeficientenormalizado = 0;

        // dd($antecedente);
        $antecedente->save();
        $this->openclose4();
    }
}
