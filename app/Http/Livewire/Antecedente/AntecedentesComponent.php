<?php

namespace App\Http\Livewire\Antecedente;

use App\Models\Antecedentes;
use App\Models\Coeficientes;
use App\Models\Departamento;
use App\Models\Provincia;
use App\Models\Tipoinmueble;
use App\Models\Zona;
use Livewire\Component;
use App\Models\coeficientesfrentefondo as CoeficienteFrenteFondo;

class AntecedentesComponent extends Component
{

    public $antecedente_id; 

    public $txtfecha, $txtdomicilio, $txtprecio, $txtfrente, $txtfondo, $txtsuperficie, $txtubicaciongps, $txtzonas, $txtdepartamentos, $txtcoeficientenormalizado, $txtprecionormalizado;
    public $antecedentes;

    public $isModalAlta, $isModalEditar;
    public $isModalAltashow=false, $isModalEditarshow=false;

    public $provincias, $zonas, $departamentos, $tipoinmuebles;
    public $cmbcoeficiente_esquinas, $cmbcoeficiente_formas, $cmbcoeficiente_topografias, $cmbcoeficiente_pavimentoyservicios, $cmbcoeficiente_ubicaciones, $cmbcoeficiente_ofertas, $cmbcoeficiente_formapagos, $cmbcoeficiente_fuenteinformantes, $cmbcoeficiente_actualizaciones, $cmbfrentes, $cmbfondos;

    public $coeficiente_esquinas, $coeficiente_formas, $coeficiente_topografias, $coeficiente_pavimentoyservicios, $coeficiente_ubicaciones, $coeficiente_ofertas, $coeficiente_formapagos, $coeficiente_fuenteinformantes, $coeficiente_actualizaciones, $frentes, $fondos;


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
        $this->frentes                         = CoeficienteFrenteFondo::select('columna')->distinct()->get();
        $this->fondos = CoeficienteFrenteFondo::select('id','fila')->distinct()->get();

        $this->antecedentes = Antecedentes::all();

        return view('livewire.antecedente.antecedentes-component')->extends('layouts.adminlte');;
    }
    
    public function isModalEditar($id) {
        $antecedente = Antecedentes::where('id','=',$id)->get();
        $this->txtfecha = $antecedente[0]->created_at->format('Y-m-d');
        $this->txtdomicilio = $antecedente[0]->domicilio;
        $this->txtprecio = $antecedente[0]->precio ;
        $this->txtfrente = $antecedente[0]->frente;
        $this->txtfondo = $antecedente[0]->fondo;
        $this->txtsuperficie = $antecedente[0]->superficie;
        $this->txtubicaciongps = $antecedente[0]->ubicaciongps;
        $this->txtzonas = $antecedente[0]->zona_id;
        $this->txtdepartamentos = $antecedente[0]->departamento_id;
        $this->cmbcoeficiente_esquinas = $antecedente[0]->coeficiente_esquinas;
        $this->cmbcoeficiente_formas = $antecedente[0]->coeficiente_formas;
        $this->cmbcoeficiente_topografias = $antecedente[0]->coeficiente_topografias;
        $this->cmbcoeficiente_pavimentoyservicios = $antecedente[0]->coeficiente_pavimentoyservicios;
        $this->cmbcoeficiente_ubicaciones = $antecedente[0]->coeficiente_ubicaciones;
        $this->cmbcoeficiente_ofertas = $antecedente[0]->coeficiente_ofertas;
        $this->cmbcoeficiente_formapagos =  $antecedente[0]->coeficiente_formas;
        $this->cmbcoeficiente_fuenteinformantes = $antecedente[0]->coeficiente_fuenteinformantes;
        $this->cmbcoeficiente_actualizaciones = $antecedente[0]->coeficiente_actualizaciones;
        $this->txtcoeficientenormalizado=$this->calcular_coeficiente($antecedente[0]);
        $this->txtprecionormalizado=$antecedente[0]->coeficientenormalizado*$antecedente[0]->precio;
        $this->antecedente_id = $antecedente[0]->id;

        $this->isModalEditar = !$this->isModalEditar;
        
    }

    public function isModalAlta() {
        $this->antecedente_id =null;
        $this->reset('txtfecha','txtdomicilio','txtprecio','txtfrente','txtfondo','txtsuperficie','txtubicaciongps','txtzonas','txtdepartamentos','cmbcoeficiente_esquinas','cmbcoeficiente_formas','cmbcoeficiente_topografias','cmbcoeficiente_pavimentoyservicios','cmbcoeficiente_ubicaciones','cmbcoeficiente_ofertas','cmbcoeficiente_formas','cmbcoeficiente_fuenteinformantes','cmbcoeficiente_actualizaciones','txtprecionormalizado','txtcoeficientenormalizado');
        $this->isModalAltashow = !$this->isModalAltashow;
        // dd($this->isModalAltashow);
    }

    public function Alta($id) {
        if($id>0) {
            $antecedente = Antecedentes::where('id','=',$id)->get();
            $this->antecedente_id = $antecedente[0]->id;
        }
        $this->isModalEditar = !$this->isModalEditar;

        $this->validate([
            'txtfecha' => 'required',
            'txtdomicilio' => 'required',
            'txtprecio'  =>'required',
            'txtfrente' => 'required',
            'txtfondo' => 'required',
            'txtsuperficie' => 'required',
            'txtubicaciongps' => 'required',
            'txtzonas' => 'required',
            'txtdepartamentos' => 'required',
            'cmbcoeficiente_esquinas' => 'required',
            'cmbcoeficiente_formas' => 'required',
            'cmbcoeficiente_topografias' => 'required',
            'cmbcoeficiente_pavimentoyservicios' => 'required',
            'cmbcoeficiente_ubicaciones' => 'required',
            'cmbcoeficiente_ofertas' => 'required',
            'cmbcoeficiente_formas' => 'required',
            'cmbcoeficiente_fuenteinformantes' => 'required',
            'cmbcoeficiente_actualizaciones' => 'required',
            'txtprecionormalizado' => 'required',
            'txtcoeficientenormalizado' => 'required',
        ]);

        Antecedentes::updateOrCreate(['id' => $this->antecedente_id], [
            'created_at' => $this->txtfecha,
            'domicilio' => $this->txtdomicilio,
            'precio'  => $this->txtprecio,
            'frente' => $this->txtfrente,
            'fondo' => $this->txtfondo,
            'superficie' => $this->txtsuperficie,
            'ubicaciongps' => $this->txtubicaciongps,
            'zona_id' => $this->txtzonas,
            'departamento_id' => $this->txtdepartamentos,
            'coeficiente_esquinas' => $this->cmbcoeficiente_esquinas,
            'coeficiente_formas' => $this->cmbcoeficiente_formas,
            'coeficiente_topografias' => $this->cmbcoeficiente_topografias,
            'coeficiente_pavimentoyservicios' => $this->cmbcoeficiente_pavimentoyservicios,
            'coeficiente_ubicaciones' => $this->cmbcoeficiente_ubicaciones,
            'coeficiente_ofertas' => $this->cmbcoeficiente_ofertas,
            'coeficiente_formas' => $this->cmbcoeficiente_formapagos,
            'coeficiente_fuenteinformantes' => $this->cmbcoeficiente_fuenteinformantes,
            'coeficiente_actualizaciones' => $this->cmbcoeficiente_actualizaciones,
            'precionormalizado' => $this->txtprecionormalizado,
            'coeficientenormalizado' => $this->txtprecio * $this->txtprecionormalizado,        
        ]);
        
        session()->flash('message', 'Se guardaron los datos');
        $this->antecedente_id =null;
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
}
