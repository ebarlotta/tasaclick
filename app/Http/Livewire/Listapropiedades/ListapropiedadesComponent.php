<?php

namespace App\Http\Livewire\Listapropiedades;

use Livewire\Component;
use App\Models\Antecedentes;
use App\Models\Coeficientes;
use App\Models\Departamento;
use App\Models\Provincia;
use App\Models\Tipoinmueble;
use App\Models\Zona;
use App\Models\coeficientesfrentefondo as CoeficienteFrenteFondo;
use App\Models\Propiedad;


class ListapropiedadesComponent extends Component
{
    public $provincias;
    public $zonas;
    public $departamentos;
    public $tipoinmuebles;
    public $propiedades;
    public $frentes;
    public $fondos;

    public $fijados=null, $nofijados=null;

    public $isHidden1Open=false;
    public $isModalValoresfijados=false;

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

    public $acumuladoprecio; 
    public $cantidad; 
    public $precionormalizado;
    public $coeficientenormalizado;
    public $promedioprecionormalizado;
    public $promediocoeficientenormalizado;

    public $antecedentes;
    public $propiedad_id;


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
        $this->fondos                          = CoeficienteFrenteFondo::select('id','fila')->distinct()->get();

        $this->propiedades = Propiedad::all();
        // $this->fijados = Antecedentes::where('propiedad_id','=',$this->id)->get();
        // $this->acumuladoprecio=0; $this->cantidad=0; $this->precionormalizado=0; $this->coeficientenormalizado=0; $this->cantidad = 0;
        // foreach($this->fijados as $temp) {
        //     $this->acumuladoprecio = $this->acumuladoprecio + $temp->precio;
        //     $this->cantidad++;
        //     $this->precionormalizado = $this->precionormalizado + $temp->precionormalizado;
        //     $this->coeficientenormalizado = $this->coeficientenormalizado + $temp->coeficientenormalizado;
        // }
        // if($this->cantidad>0) {
        //     $this->promedioprecionormalizado = $this->precionormalizado/$this->cantidad;
        //     $this->promediocoeficientenormalizado = $this->coeficientenormalizado/$this->cantidad;
        // } else {
        //     $this->promedioprecionormalizado = 0;
        //     $this->promediocoeficientenormalizado = 0;
        // }

       // dd($this->fijados->departamento);
       // dd($this->fijados->departamento);
        return view('livewire.listapropiedades.listapropiedades-component')->extends('layouts.adminlte');
    }

    // public function isModalValoresfijados($id) {
    //     $this->id = $id;
    //     $this->isModalValoresfijados = !$this->isModalValoresfijados;
    // }

    public function CargarDatosParaModificarAntecedentes() {
        // $this->propiedad_id = $id;
        $this->fijados = Antecedentes::where('propiedad_id','=',$this->propiedad_id)->get();
        $this->nofijados = Antecedentes::where('propiedad_id','<>',$this->propiedad_id)->get();
        // dd($this->fijados);
        // $this->isHidden1Open = true;
        // $this->isModalValoresfijados = !$this->isModalValoresfijados;
    }

    public function CargaIdPropiedad($id) {
        $this->propiedad_id = $id;
        $this->fijados = Antecedentes::where('propiedad_id','=',$this->propiedad_id)->orderby('created_at')->get();
        $this->nofijados = Antecedentes::where('propiedad_id','<>',$this->propiedad_id)
        ->orWhereNull('propiedad_id')
        ->where('departamento_id','LIKE',5)
        ->orderby('created_at')
        ->get();
        // dd($this->nofijados);
    }

    public function FijarAntecedenteAPropiedad($idPropiedad, $idAntecedente) {
        $antecedente = Antecedentes::where('id','=',$idAntecedente)->get();
        
        if(is_null($antecedente[0]->propiedad_id)) {
            $antecedente[0]->propiedad_id = $this->propiedad_id;
            $antecedente[0]->save();
        } 
        else {
            
            $nuevoantecedente = new Antecedentes;

        $nuevoantecedente->created_at = $antecedente[0]->created_at->format('Y-m-d');
        $nuevoantecedente->domicilio = $antecedente[0]->domicilio;
        $nuevoantecedente->precio = $antecedente[0]->precio ;
        $nuevoantecedente->frente = $antecedente[0]->frente;
        $nuevoantecedente->fondo = $antecedente[0]->fondo;
        $nuevoantecedente->superficie = $antecedente[0]->superficie;
        $nuevoantecedente->ubicaciongps = $antecedente[0]->ubicaciongps;
        $nuevoantecedente->zona_id = $antecedente[0]->zona_id;
        $nuevoantecedente->departamento_id = $antecedente[0]->departamento_id;
        $nuevoantecedente->coeficiente_esquinas = $antecedente[0]->coeficiente_esquinas;
        $nuevoantecedente->coeficiente_formas = $antecedente[0]->coeficiente_formas;
        $nuevoantecedente->coeficiente_topografias = $antecedente[0]->coeficiente_topografias;
        $nuevoantecedente->coeficiente_pavimentoyservicios = $antecedente[0]->coeficiente_pavimentoyservicios;
        $nuevoantecedente->coeficiente_ubicaciones = $antecedente[0]->coeficiente_ubicaciones;
        $nuevoantecedente->coeficiente_ofertas = $antecedente[0]->coeficiente_ofertas;
        $nuevoantecedente->coeficiente_formapagos =  $antecedente[0]->coeficiente_formas;
        $nuevoantecedente->coeficiente_fuenteinformantes = $antecedente[0]->coeficiente_fuenteinformantes;
        $nuevoantecedente->coeficiente_actualizaciones = $antecedente[0]->coeficiente_actualizaciones;
        $nuevoantecedente->coeficientenormalizado=0;
        // $nuevoantecedente->coeficientenormalizado=$this->calcular_coeficiente($antecedente[0]);
        $nuevoantecedente->precionormalizado=0;
        // $nuevoantecedente->precionormalizado=$antecedente[0]->coeficientenormalizado*$antecedente[0]->precio;
        
        $nuevoantecedente->propiedad_id = $idPropiedad;
        $nuevoantecedente->save();

            // $nuevoantecedente = $antecedente;
            // dd($nuevoantecedente);
        }
    }
}
