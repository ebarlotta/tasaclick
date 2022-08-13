@extends('layouts.adminlte')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h1>Datos de la Propiedades a Tasar</h1>
                        <div class="card-body justify-left">
                           <p>Domicilio: <b><input name="descripcion" value="" class="rounded-md pl-2"></b></p>
                           <p>Padrón Territorial: <b><input name="descripcion" value="" class="rounded-md pl-2"></b></p>
                           <p>Padrón Municipal: <b><input name="descripcion" value="" class="rounded-md pl-2"></b></p>
                           <p>Titular Registral: <b><input name="descripcion" value="" class="rounded-md pl-2"></b></p>
                           <p>Nomenclatura Catastral: <b><input name="descripcion" value="" class="rounded-md pl-2"></b></p>
                           <p>Número de Plano: <b><input name="descripcion" value="" class="rounded-md pl-2"></b></p>
                           <p>Ubicación GPS: <b><input name="descripcion" value="" class="rounded-md pl-2"></b></p>
                           <p>Frente:<input name="frente" value="" class="rounded-md pl-2"></p>
                          <p>Fondo:<input name="fondo" value="" class="rounded-md pl-2"></p>
                          <p>Superficie del terreno: <b><input disabled name="descripcion" value="" class="rounded-md pl-2"></b></p>
                           <p>Provincia: <b>
                              <select>
                                 <option value="1">-</option>
                                 @foreach ($provincias as $provincia)
                                    <option value="{{ $provincia->id}}">{{ $provincia->descripcion}}</option>    
                                 @endforeach
                              </select></b></p>
                           <p>Departamento: <b>
                              <select>
                                 <option value="1">-</option>
                                 @foreach ($departamentos as $departamento)
                                    <option value="{{ $departamento->id}}">{{ $departamento->descripcion}}</option>    
                                 @endforeach
                              </select></b></p>
                           </b></p>
                           <p>Tipo Inmueble: <b>
                              <select>
                                 <option value="1">-</option>
                                 @foreach ($tipoinmuebles as $tipoinmueble)
                                    <option value="{{ $tipoinmueble->id}}">{{ $tipoinmueble->descripcion}}</option>    
                                 @endforeach
                              </select></b></p>   
                           </b></p>
                           <p>Zona: <b>
                              <select>
                                 <option value="1">-</option>
                                 @foreach ($zonas as $zona)
                                    <option value="{{ $zona->id}}">{{ $zona->descripcion}}</option>    
                                 @endforeach
                              </select>
                           </b></p>
                       
                           @if ($errors->get('coeficiente_esquina'))
                  <span class="text-danger"> {{ $errors->first('coeficiente_esquina') }} </span>
                @endif
                <div class="card-body justify-left">                
                <p>Coeficiente de Esquina: 
                <select name="coeficiente_esquina">
                      <option value="0">-</option>
                    @foreach($coeficiente_esquinas as $coeficiente_esquina)
                        <option @if((int) old('coeficiente_esquina') === $coeficiente_esquina->id) selected @endif value="{{ $coeficiente_esquina->id }}">{{ $coeficiente_esquina->descripcion }}</option>
                    @endforeach
                </select>
                </p>
                @if ($errors->get('coeficiente_forma'))
                  <span class="text-danger"> {{ $errors->first('coeficiente_forma') }} </span>
                @endif
                <p>Coeficiente de Forma:
                    <select name="coeficiente_forma">
                      <option value="1">-</option>
                      @foreach ($coeficiente_formas as $coeficiente_forma)
                        <option @if((int) old('coeficiente_forma') === $coeficiente_forma->id) selected @endif value="{{ $coeficiente_forma->id }}">{{ $coeficiente_forma->descripcion }}</option>
                      @endforeach
                  
                  </select>
                </p>
                @if ($errors->get('coeficiente_topografia'))
                  <span class="text-danger"> {{ $errors->first('coeficiente_topografia') }} </span>
                @endif
                <p>Coeficiente de Topografía:
                    <select name="coeficiente_topografia">
                      <option value="1">-</option>
                      @foreach ($coeficiente_topografias as $coeficiente_topografia)
                        <option @if((int) old('coeficiente_topografia') === $coeficiente_topografia->id) selected @endif value="{{ $coeficiente_topografia->id }}">{{ $coeficiente_topografia->descripcion }}
                        </option>
                      @endforeach
                  
                  </select>
                </p>
                @if ($errors->get('coeficiente_pavimentoyservicio'))
                <span class="text-danger"> {{ $errors->first('coeficiente_pavimentoyservicio') }} </span>
                @endif
                <p>Coeficiente de Pavimento y Servivio:
                    <select name="coeficiente_pavimentoyservicio">
                      <option value="1">-</option>
                      @foreach ($coeficiente_pavimentoyservicios as $coeficiente_pavimentoyservicio)
                        <option @if((int) old('coeficiente_pavimentoyservicio') === $coeficiente_pavimentoyservicio->id) selected @endif value="{{ $coeficiente_pavimentoyservicio->id }}">
                          {{ $coeficiente_pavimentoyservicio->descripcion }}</option>
                      @endforeach
                  
                  </select>
                </p>
                @if ($errors->get('coeficiente_ubicacion'))
                  <span class="text-danger"> {{ $errors->first('coeficiente_ubicacion') }} </span>
                @endif
                <p>Coeficiente de Ubicación:
                    <select name="coeficiente_ubicacion">
                      <option value="1">-</option>
                      @foreach ($coeficiente_ubicaciones as $coeficiente_ubicacion)
                        <option @if((int) old('coeficiente_ubicacion') === $coeficiente_ubicacion->id) selected @endif value="{{ $coeficiente_ubicacion->id }}">{{ $coeficiente_ubicacion->descripcion }}
                        </option>
                      @endforeach
                  
                  </select>
                </p>
                @if ($errors->get('coeficiente_oferta'))
                  <span class="text-danger"> {{ $errors->first('coeficiente_oferta') }} </span>
                @endif
                <p>Coeficiente de Oferta:
                    <select name="coeficiente_oferta">
                      <option value="1">-</option>
                      @foreach ($coeficiente_ofertas as $coeficiente_oferta)
                        <option  @if((int) old('coeficiente_oferta') === $coeficiente_oferta->id) selected @endif value="{{ $coeficiente_oferta->id }}">{{ $coeficiente_oferta->descripcion }}</option>
                      @endforeach
                  
                  </select>
                </p>
                @if ($errors->get('coeficiente_formapago'))
                  <span class="text-danger"> {{ $errors->first('coeficiente_formapago') }} </span>
                @endif
                <p style="display: none">Coeficiente de Formas de Pagos:
                    <select name="coeficiente_formapago">
                      <option value="1">-</option>
                      @foreach ($coeficiente_formapagos as $coeficiente_formapago)
                        <option  @if((int) old('coeficiente_formapago') === $coeficiente_formapago->id) selected @endif value="{{ $coeficiente_formapago->id }}">{{ $coeficiente_formapago->descripcion }}
                        </option>
                      @endforeach
                  
                  </select>
                </p>
                @if ($errors->get('coeficiente_fuenteinformante'))
                  <span class="text-danger"> {{ $errors->first('coeficiente_fuenteinformante') }} </span>
                @endif
                <p style="display: none">Coeficiente Fuente Informante:
                    <select name="coeficiente_fuenteinformante">
                      <option value="1">-</option>
                      @foreach ($coeficiente_fuenteinformantes as $coeficiente_fuenteinformante)
                        <option  @if((int) old('coeficiente_fuenteinformante') === $coeficiente_fuenteinformante->id) selected @endif  value="{{ $coeficiente_fuenteinformante->id }}">
                          {{ $coeficiente_fuenteinformante->descripcion }}</option>
                      @endforeach
                  
                  </select>
                </p>
                @if ($errors->get('coeficiente_actualizacion'))
                <span class="text-danger"> {{ $errors->first('coeficiente_actualizacion') }} </span>
                @endif
                <p style="display: none">Coeficiente de Actualización:
                    <select name="coeficiente_actualizacion">
                     <option value="1">-</option>
                      @foreach ($coeficiente_actualizaciones as $coeficiente_actualizacion)
                        <option  @if((int) old('coeficiente_actualizacion') === $coeficiente_actualizacion->id) selected @endif  value="{{ $coeficiente_actualizacion->id }}">
                          {{ $coeficiente_actualizacion->descripcion }}</option>
                      @endforeach
                    </select>
                </p>



                       
                        </div>


                       <a class="float-right" href="{{route('antecedentes.index')}}">
                        <button type="button" class="card-text bg-success text-center rounded-md px-3 mr-1 shadow-lg">Nueva Antecedente</button>
                     </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
