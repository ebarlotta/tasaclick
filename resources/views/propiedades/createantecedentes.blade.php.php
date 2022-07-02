@extends('layouts.adminlte')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                      <img id="icono" src="{{ asset ('/images/assets/icono.png')}}"><h1>Propiedades</h1>
                        <div class="card-body justify-left">
                           <p>Domicilio: <b><input name="descripcion" value="" class="rounded-md pl-2"></b></p>
                           <p>Padrón Territorial: <b><input name="descripcion" value="" class="rounded-md pl-2"></b></p>
                           <p>Padrón Municipal: <b><input name="descripcion" value="" class="rounded-md pl-2"></b></p>
                           <p>Titular Registral: <b><input name="descripcion" value="" class="rounded-md pl-2"></b></p>
                           <p>Nomenclatura Catastral: <b><input name="descripcion" value="" class="rounded-md pl-2"></b></p>
                           <p>Número de Plano: <b><input name="descripcion" value="" class="rounded-md pl-2"></b></p>
                           <p>Ubicación GPS: <b><input name="descripcion" value="" class="rounded-md pl-2"></b></p>
                           <p>Provincia: <b>
                              <select>
                                 <option>-</option>
                                 @foreach ($provincias as $provincia)
                                    <option value="{{ $provincia->id}}">{{ $provincia->descripcion}}</option>    
                                 @endforeach
                              </select></b></p>
                           <p>Departamento: <b>
                              <select>
                                 <option>-</option>
                                 @foreach ($departamentos as $departamento)
                                    <option value="{{ $departamento->id}}">{{ $departamento->descripcion}}</option>    
                                 @endforeach
                              </select></b></p>
                           </b></p>
                           <p>Tipo Inmueble: <b>
                              <select>
                                 <option>-</option>
                                 @foreach ($tipoinmuebles as $tipoinmueble)
                                    <option value="{{ $tipoinmueble->id}}">{{ $tipoinmueble->descripcion}}</option>    
                                 @endforeach
                              </select></b></p>   
                           </b></p>
                           <p>Zona: <b>
                              <select>
                                 <option>-</option>
                                 @foreach ($zonas as $zona)
                                    <option value="{{ $zona->id}}">{{ $zona->descripcion}}</option>    
                                 @endforeach
                              </select>
                           </b></p>
                       </div>
                       <a class="float-right" href="#">
                        <button type="button" class="card-text bg-success text-center rounded-md px-3 mr-1 shadow-lg">Nueva Antecedente</button>
                     </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
