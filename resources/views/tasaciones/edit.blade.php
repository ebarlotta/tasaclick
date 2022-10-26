@extends('layouts.adminlte')

@section('content')
  <div class="container col-md-12">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div style="display: flex; justify-content: space-between;">
          <h1 class="ml-5">Datos Tasación a editar</h1>
          <div style="display: flex; align-items: center; justify-content: center;">
            <a href="{{ route('antecedentes.index') }}">
              <button type="button" class="card-text bg-success text-center rounded-md px-3 mr-1 shadow-lg">Nuevo Antecedente</button>
            </a>
            <a href="{{ route('antecedentes.index') }}">
              {{-- <button type="button" class="card-text bg-success text-center rounded-md px-3 mr-1 shadow-lg">Agregar Propiedad</button> --}}
            </a>
          </div>
        </div>
        <div class="d-flex flex-row col-12">
          <div class="card-body col-md-12">
            <div class="card-body justify-left">
              <p>Domicilio: <b><input name="descripcion" value="{{ $tasacion->propiedad[0]->domicilio }}" class="rounded-md pl-2" disabled></b></p>
              <p>Padrón Territorial: <b><input name="descripcion" value="{{ $tasacion->propiedad[0]->padron }}" class="rounded-md pl-2" disabled></b></p>
              <p>Padrón Municipal: <b><input name="descripcion" value="{{ $tasacion->propiedad[0]->padronmunicipal }}" class="rounded-md pl-2" disabled></b></p>
              <p>Titular Registral: <b><input name="descripcion" value="{{ $tasacion->propiedad[0]->titularregistral}}" class="rounded-md pl-2" disabled></b></p>
              <p>Nomenclatura Catastral: <b><input name="descripcion" value="{{ $tasacion->propiedad[0]->nomenclaturacatastral}}" class="rounded-md pl-2" disabled></b></p>
              <p>Número de Plano: <b><input name="descripcion" value="{{ $tasacion->propiedad[0]->nroplano }}" class="rounded-md pl-2" disabled></b></p>
              <p>Ubicación GPS: <b><input name="descripcion" value="{{ $tasacion->propiedad[0]->ubicaciongps }}" class="rounded-md pl-2" disabled></b></p>
              {{-- <p>Frente según mensura:
                <input class="rounded-md pl-2 col-md-3" type="text" value="">
                <select name="frentes" wire:model="frentes" class="pl-2">
                  <option value="0">-</option>
                  @foreach ($frentes as $frente)
                    <option value="{{ $frente->id }}">{{ $frente->columna }}</option>
                  @endforeach
                </select> --}}
                {{-- <input name="frente" value="" class="rounded-md pl-2"></p> --}}
              {{-- <p>Fondo según mensura:
                <input class="rounded-md pl-2 col-md-3" type="text" value="">
                <select name="fondos" wire:model="fondos" wire:click="calcular" class="pl-2">
                  <option value="0">-</option>
                  @foreach ($fondos as $fondo)
                    <option value="{{ $fondo->id }}">{{ $fondo->fila }}</option>
                  @endforeach
                </select> --}}

                {{-- <input name="fondo" value="" class="rounded-md pl-2"></p> --}}
              <p>Superficie del terreno: <b><input disabled name="descripcion" value="" class="rounded-md pl-2"></b>
              </p>
              Provincia: <b>
                  <select class="pl-2" disabled>
                    <option value="0">-</option>
                    @foreach ($provincias as $provincia)
                     @if($provincia->id === $tasacion->propiedad[0]->departamento[0]->provincia_id)
                      <option value="{{ $provincia->id }}" selected>{{ $provincia->descripcion }}</option>
                     @else
                      <option value="{{ $provincia->id }}">{{ $provincia->descripcion }}</option>
                     @endif
                    @endforeach
                  </select></b>
              Departamento: <b>
                  <select class="col-md-3 pl-2" disabled>
                    <option value="0">-</option>
                    @foreach ($departamentos as $departamento)
                     @if($departamento->id === $tasacion->propiedad[0]->departamento[0]->id)
                      <option value="{{ $departamento->id }}" selected>{{ $departamento->descripcion }}</option>
                     @else
                     <option value="{{ $departamento->id }}">{{ $departamento->descripcion }}</option>
                     @endif
                    @endforeach
                  </select></b></p>
              </b></p>
              Tipo Inmueble: <b>
                  <select class="pl-2" disabled>
                    <option value="0">-</option>
                    @foreach ($tipoinmuebles as $tipoinmueble)
                     @if($tipoinmueble->id === $tasacion->propiedad[0]->inmueble->id)
                        <option value="{{ $tipoinmueble->id }}" selected>{{ $tipoinmueble->descripcion }}</option>
                     @else
                        <option value="{{ $tipoinmueble->id }}">{{ $tipoinmueble->descripcion }}</option>
                     @endif
                    @endforeach
                  </select></b>
              
              Zona: <b>
                  <select class="pl-2" disabled>
                    <option value="0">-</option>
                    @foreach ($zonas as $zona)
                     @if($zona->id === $tasacion->propiedad[0]->zona->id)
                        <option value="{{ $zona->id }}" selected>{{ $zona->descripcion }}</option>
                     @else
                        <option value="{{ $zona->id }}">{{ $zona->descripcion }}</option>
                     @endif
                    @endforeach
                  </select>
                </b></p>
              
              @if ($errors->get('coeficiente_esquina'))
                <span class="text-danger"> {{ $errors->first('coeficiente_esquina') }} </span>
              @endif
            </div>
          </div>
          <div class="card-body justify-left col-md-12">
            <br>
            <p>Valor unitario del m<sup>2</sup> de según antecedentes seleccionados: <input type="text" size="10" value="{{ $tasacion->precioantecedente }}" disabled></p>

            <p><br><b>Coeficientes Correctivos</b></p>
            <p>Coeficiente de Esquina:
              <select name="coeficiente_esquina" class="pl-2">
                <option value="0" selected>-</option>
                @foreach ($coeficiente_esquinas as $coeficiente_esquina)
                  <option @if ((int) old('coeficiente_esquina') === $coeficiente_esquina->id) selected @endif value="{{ $coeficiente_esquina->id }}">
                    {{ $coeficiente_esquina->descripcion }}</option>
                @endforeach
              </select>
            </p>
            @if ($errors->get('coeficiente_forma'))
              <span class="text-danger"> {{ $errors->first('coeficiente_forma') }} </span>
            @endif
            <p>Coeficiente de Forma:
              <select name="coeficiente_forma" class="pl-2">
                <option value="1">-</option>
                @foreach ($coeficiente_formas as $coeficiente_forma)
                  <option @if ((int) old('coeficiente_forma') === $coeficiente_forma->id) selected @endif value="{{ $coeficiente_forma->id }}">
                    {{ $coeficiente_forma->descripcion }}</option>
                @endforeach

              </select>
            </p>
            @if ($errors->get('coeficiente_topografia'))
              <span class="text-danger"> {{ $errors->first('coeficiente_topografia') }} </span>
            @endif
            <p>Coeficiente de Topografía:
              <select name="coeficiente_topografia" class="col-md-6 pl-2">
                <option value="1">-</option>
                @foreach ($coeficiente_topografias as $coeficiente_topografia)
                  <option @if ((int) old('coeficiente_topografia') === $coeficiente_topografia->id) selected @endif value="{{ $coeficiente_topografia->id }}">
                    {{ $coeficiente_topografia->descripcion }}
                  </option>
                @endforeach

              </select>
            </p>
            @if ($errors->get('coeficiente_pavimentoyservicio'))
              <span class="text-danger"> {{ $errors->first('coeficiente_pavimentoyservicio') }} </span>
            @endif
            <p>Coeficiente de Pavimento y Servivio:
              <select name="coeficiente_pavimentoyservicio" class="col-md-6 pl-2">
                <option value="1">-</option>
                @foreach ($coeficiente_pavimentoyservicios as $coeficiente_pavimentoyservicio)
                  <option @if ((int) old('coeficiente_pavimentoyservicio') === $coeficiente_pavimentoyservicio->id) selected @endif
                    value="{{ $coeficiente_pavimentoyservicio->id }}">
                    {{ $coeficiente_pavimentoyservicio->descripcion }}</option>
                @endforeach

              </select>
            </p>
            @if ($errors->get('coeficiente_ubicacion'))
              <span class="text-danger"> {{ $errors->first('coeficiente_ubicacion') }} </span>
            @endif
            <p>Coeficiente Zonal:
              <select name="coeficiente_ubicacion" class="pl-2">
                <option value="1">-</option>
                @foreach ($coeficiente_zonals as $coeficiente_zonal)
                  <option @if ((int) old('coeficiente_zonal') === $coeficiente_zonal->id) selected @endif value="{{ $coeficiente_zonal->id }}">
                    {{ $coeficiente_zonal->descripcion }}
                  </option>
                @endforeach

              </select>
            </p>
            @if ($errors->get('coeficiente_oferta'))
              <span class="text-danger"> {{ $errors->first('coeficiente_oferta') }} </span>
            @endif
            <p>Coeficiente de Oferta:
              <select name="coeficiente_oferta" class="pl-2">
                <option value="1">-</option>
                @foreach ($coeficiente_ofertas as $coeficiente_oferta)
                  <option @if ((int) old('coeficiente_oferta') === $coeficiente_oferta->id) selected @endif value="{{ $coeficiente_oferta->id }}">
                    {{ $coeficiente_oferta->descripcion }}</option>
                @endforeach

              </select>
            </p>
            @if ($errors->get('coeficiente_formapago'))
              <span class="text-danger"> {{ $errors->first('coeficiente_formapago') }} </span>
            @endif
            <p style="display: none">Coeficiente de Formas de Pagos:
              <select name="coeficiente_formapago" class="pl-2">
                <option value="1">-</option>
                @foreach ($coeficiente_formapagos as $coeficiente_formapago)
                  <option @if ((int) old('coeficiente_formapago') === $coeficiente_formapago->id) selected @endif value="{{ $coeficiente_formapago->id }}">
                    {{ $coeficiente_formapago->descripcion }}
                  </option>
                @endforeach

              </select>
            </p>
            @if ($errors->get('coeficiente_fuenteinformante'))
              <span class="text-danger"> {{ $errors->first('coeficiente_fuenteinformante') }} </span>
            @endif
            <p style="display: none">Coeficiente Fuente Informante:
              <select name="coeficiente_fuenteinformante" class="pl-2">
                <option value="1">-</option>
                @foreach ($coeficiente_fuenteinformantes as $coeficiente_fuenteinformante)
                  <option @if ((int) old('coeficiente_fuenteinformante') === $coeficiente_fuenteinformante->id) selected @endif
                    value="{{ $coeficiente_fuenteinformante->id }}">
                    {{ $coeficiente_fuenteinformante->descripcion }}</option>
                @endforeach

              </select>
            </p>
            @if ($errors->get('coeficiente_actualizacion'))
              <span class="text-danger"> {{ $errors->first('coeficiente_actualizacion') }} </span>
            @endif
            <p style="display: none">Coeficiente de Actualización:
              <select name="coeficiente_actualizacion" class="pl-2">
                <option value="1">-</option>
                @foreach ($coeficiente_actualizaciones as $coeficiente_actualizacion)
                  <option @if ((int) old('coeficiente_actualizacion') === $coeficiente_actualizacion->id) selected @endif
                    value="{{ $coeficiente_actualizacion->id }}">
                    {{ $coeficiente_actualizacion->descripcion }}</option>
                @endforeach
              </select>
            </p>

            <p>Coeficiente de Rescticciones o afectaciones desvalorizantes:
              <select name="coeficiente_restricciones" class="pl-2">
                <option value="1">-</option>
                {{-- @foreach ($coeficiente_actualizaciones as $coeficiente_actualizacion)
                            <option  @if ((int) old('coeficiente_actualizacion') === $coeficiente_actualizacion->id) selected @endif  value="{{ $coeficiente_actualizacion->id }}">
                              {{ $coeficiente_actualizacion->descripcion }}</option>
                          @endforeach --}}
              </select>
            </p>
            <button type="button" class="col-12 card-text bg-success text-center rounded-md px-3 mr-1 shadow-lg">Aplicar coeficientes correctivos</button>
          
            <div class="mt-3">
              <p>Calculo del valor unitario corregido del m<sup>2</sup> de tierra: <input type="text"></p>
              <p>Valor final del terreno: <input type="text" value="{{ $tasacion->preciofinal }}"></p>
            </div>
            <div style="display: flex; justify-content: space-between;">
              <button type="button" class="col-6 card-text bg-success text-center rounded-md px-3 mr-1 shadow-lg">Generar Informe</button>
              <button type="button" class="col-6 card-text bg-success text-center rounded-md px-3 mr-1 shadow-lg" disabled>Agregar Mejoras</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
