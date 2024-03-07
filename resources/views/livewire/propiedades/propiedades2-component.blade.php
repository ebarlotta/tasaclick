@extends('layouts.adminlte')
{{-- @extends('layouts.plantilla') --}}


<div>
    @section('content')
    <div class=" col-12">
        <div class="card card-widget widget-user-2 shadow-sm">
            <div class="widget-user-header bg-warning mb-3">
                <div class="widget-user-image">
                    <img class="img-circle elevation-2" src="{{ asset('images/assets/avatar.jpg') }}" alt="User Avatar" style="float: left; height: 65px; width: 65px; border-radius: 50%;">
                </div>

                <h3 class="widget-user-username">Nadia Carmichael</h3>
                <h5 class="widget-user-desc">Lead Developer</h5>
            </div>
    

            <div class="row mx-2">
                <div class="card card-info col-12" >

                    <div class="card-header">
                        <h3 class="card-title">Listado de Propiedades</h3>
                        <span class="float-right badge bg-warning">0 / 3</span>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>

                    <div class="card-body" >
                        <table border="1">
                            <tr>
                                <td>Domicilio</td>
                                <td>Ubicación</td>
                                <td>Frente</td>
                                <td>Fondo</td>
                                <td>Ciudad</td>
                                <td>Opciones</td>
                            </tr>
                            @foreach($propiedades as $propiedad)
                                <tr>
                                    <td>{{ $propiedad->domicilio }}</td>
                                    <td>{{ $propiedad->ubicaciongps}}</td>
                                    <td>{{ $propiedad->frente}}</td>
                                    <td>{{ $propiedad->fondo}}</td>
                                    <td>{{ $propiedad->departamento['descripcion']}}</td>
                                    <td>
                                        <button class="btn-warning">Modificar</button>
                                        <button class="btn-success">Ver Detalle</button>
                                    </td>
                                </tr>
                            @endforeach
                        </table>  
                        {{-- <div class="info-box">
                            <span class="info-box-icon btn btn-default @if($propiedadId) bg-success @endif"  wire:click="openclose1()">
                                <i class="fas fa-home"></i>
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text">
                                    <div class="d-flex flex-wrap">Datos Iniciales de la Propiedad</div>
                                </span>
                            </div>
                        </div>

                        <div class="info-box">
                            <span class="info-box-icon bg-success btn btn-default @if($propiedadId) bg-success @endif" wire:click="openclose2()">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text">
                                    <h5 disabled="disabled">Ubicación de la Propiedad</h5>
                                </span>
                            </div>
                        </div>

                        <div class="info-box">
                            <span class="info-box-icon bg-success btn btn-default" wire:click="openclose3()">
                                <i class="fas fa-percent"></i>
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text">
                                    <h5>Coeficientes</h5>
                                </span>
                            </div>
                        </div> --}}
                    </div>

                </div>

                {{-- <div class="card card-info col-12 col-md-6" data-card-widget="collapse">
                    <div class="card-header">
                        <h3 class="card-title">Antecedentes</h3>
                        <span class="float-right badge bg-warning">0 / 2</span>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i></button>
                        </div>

                    </div>

                    <div class="card-body" >
                        <div class="info-box">
                            <span class="info-box-icon bg-success btn btn-default" wire:click="openclose4()"><i class="far fa-copy"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">
                                    <h5>Agregar Antecedente</h5>
                                </span>
                            </div>

                        </div>
                        <div class="info-box">
                            <span class="info-box-icon bg-success btn btn-default" >
                                <i class="fa fa-balance-scale"></i>
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text">
                                    <h5>Datos de Homogenización</h5>
                                </span>
                            </div>
                        </div>
                    </div>
                </div> --}}

            </div>

            {{-- <div class="row mx-2">

                <div class="info-box col-12 col-md-6">
                    <span class="info-box-icon @if($precio>1) bg-success @else bg-warning @endif"><i class="far fa-copy"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text wrap">Valor unitario del m2 de según antecedentes seleccionados:</span>
                        <span class="info-box-number">
                            <h3>$ {{ $precio }}</h3>
                        </span>
                    </div>
                </div>
                <div class="info-box col-12 col-md-6">
                    <span class="info-box-icon @if($precionormalizado>1) bg-success @else bg-warning @endif"><i class="far fa-copy"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text wrap">Calculo del valor unitario corregido del m2 de tierra:</span>
                        <span class="info-box-number">
                            <h3>$ {{ $precionormalizado }}</h3>
                        </span>
                    </div>
                </div>
                <div class="info-box col-12 col-md-6">
                    <span class="info-box-icon @if($preciofinal>1) bg-success @else bg-warning @endif"><i class="far fa-copy"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text wrap">Valor final del terreno:</span>
                        <span class="info-box-number">
                            <h3>$ {{ $preciofinal }}</h3>
                        </span>
                    </div>
                </div>
                <div class="info-box col-12 col-md-12 @if($preciofinal<1 or $precionormalizado<1 or $precio<1) d-none @endif">
                    <!-- <span class="info-box-icon @if($preciofinal>1) bg-success @else bg-warning @endif"><i class="far fa-copy"></i></span> -->
                    <div class="info-box-content">
                        <input class="btn bg-success" type="button" value="IMPRIMIR INFORME">
                        <!-- <span class="info-box-text wrap">Valor final del terreno:</span>
                        <span class="info-box-number">
                            <h3>$ {{ $preciofinal }}</h3>
                        </span> -->
                    </div>
                </div>
            </div> --}}
        </div>
        
        {{-- @if ($isModal1Open)
            @include('livewire.propiedades.modals.propiedadesmodal1')
        @endif

        @if ($isModal2Open)
            @include('livewire.propiedades.modals.propiedadesmodal2')
        @endif

        @if ($isModal3Open)
            @include('livewire.propiedades.modals.propiedadesmodal3')
        @endif

        @if ($isModal4Open)
            @include('livewire.propiedades.modals.propiedadesmodal4')
        @endif --}}


        <!-- MODAL DATOS ANTECEDENTES 1 -->
        <!-- ========================== -->
        {{-- <div class="modal fade" id="antecedente1" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Agregar Antecedente</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="" class="form-horizontal">
                            <div class="form-group row">
                                <label for="inputtext3" class="col-sm-6 col-form-label">Fecha</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="inputtext3" placeholder="Fecha" wire:model="txtfecha">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext3" class="col-sm-6 col-form-label">Dirección</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="inputtext3" placeholder="Dirección" wire:model="txtdireccion">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext3" class="col-sm-6 col-form-label">Precio</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="inputtext3" placeholder="Precio" wire:model="txtprecio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext3" class="col-sm-6 col-form-label">Valor Unitario</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="inputtext3" placeholder="Valor Unitario" wire:model="txtvalorunitario">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext3" class="col-sm-6 col-form-label">Superficie</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="inputtext3" placeholder="Superficie" wire:model="txtsuperficie">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext3" class="col-sm-6 col-form-label">Frente</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="inputtext3" placeholder="Frente" wire:model="txtfrente">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext3" class="col-sm-6 col-form-label">Fondo</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="inputtext3" placeholder="Fondo" wire:model="txtfondo">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext3" class="col-sm-6 col-form-label">Ubicación GPS</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="inputtext3" placeholder="Ubicación GPS" wire:model="txtubicaciongps">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext3" class="col-sm-6 col-form-label">Departamento</label>
                                <div class="col-sm-6">
                                    <select class="form-control" placeholder="Provincia" wire:model="txtdepartamentos">
                                        <option value="1">-</option>
                                        @foreach ($departamentos as $departamento)
                                            <option value="{{ $departamento->id }}">{{ $departamento->descripcion }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext3" class="col-sm-6 col-form-label">Zona</label>
                                <div class="col-sm-6">
                                    <select class="form-control" placeholder="Provincia" wire:model="txtzonas">
                                        <option value="1">-</option>
                                        @foreach ($zonas as $zona)
                                            <option value="{{ $zona->id }}">{{ $zona->descripcion }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </div>
        </div> --}}

        <!-- MODAL DATOS ANTECEDENTES 2 -->
        <!-- ========================== -->
        {{-- <div class="modal fade" id="antecedente2" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Coeficientes del Antecedente</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar"><span
                                aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="" class="form-horizontal">

                            <h2>Antecedentes Históricos</h2>

            <table class="table-responsive" border="1">
              <tbody><tr>
                <td class="col-1">Fecha</td>
                <td class="col-1">Departamento</td>
                <td style="width: 5%;">Zona</td>
                <td class="col-2">Dirección</td>
                <td class="col-1">Ubicación</td>
                <td class="col-1">Precio</td>
                <td class="col-1">Superficie</td>
                <td class="col-1">Frente</td>
                <td class="col-1">Fondo</td>
                <td class="col-1">Valor Unitario</td>
                <td class="col-1">Valor Unitario corregido</td>
                <td class="col-2">Opciones</td>
              </tr>
                            
            </tbody></table>
                            {{-- <div class="form-group row">
                                <label for="inputtext3" class="col-sm-6 col-form-label">Coeficiente de Esquina</label>
                                <div class="col-sm-6">
                                    <select class="form-control" placeholder="Provincia">
                                        <option value="1">-</option>
                                        @foreach ($coeficiente_esquinas as $coeficiente_esquina)
                                            <option value="{{ $coeficiente_esquina->id }}">
                                                {{ $coeficiente_esquina->descripcion }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext3" class="col-sm-6 col-form-label">Coeficiente de Forma</label>
                                <div class="col-sm-6">
                                    <select class="form-control" placeholder="Provincia">
                                        <option value="1">-</option>
                                        @foreach ($coeficiente_formas as $coeficiente_forma)
                                            <option value="{{ $coeficiente_forma->id }}">
                                                {{ $coeficiente_forma->descripcion }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext3" class="col-sm-6 col-form-label">Coeficiente de
                                    Topografía</label>
                                <div class="col-sm-6">
                                    <select class="form-control" name="coeficiente_topografia">
                                        <option value="1">-</option>
                                        @foreach ($coeficiente_topografias as $coeficiente_topografia)
                                            <option @if ((int) old('coeficiente_topografia') === $coeficiente_topografia->id) selected @endif
                                                value="{{ $coeficiente_topografia->id }}">
                                                {{ $coeficiente_topografia->descripcion }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext3" class="col-sm-6 col-form-label">Coeficiente de Pavimento y
                                    Servivio</label>
                                <div class="col-sm-6">
                                    <select class="form-control" name="coeficiente_pavimentoyservicio">
                                        <option value="1">-</option>
                                        @foreach ($coeficiente_pavimentoyservicios as $coeficiente_pavimentoyservicio)
                                            <option @if ((int) old('coeficiente_pavimentoyservicio') === $coeficiente_pavimentoyservicio->id) selected @endif
                                                value="{{ $coeficiente_pavimentoyservicio->id }}">
                                                {{ $coeficiente_pavimentoyservicio->descripcion }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext3" class="col-sm-6 col-form-label">Coeficiente de
                                    Ubicación</label>
                                <div class="col-sm-6">
                                    <select class="form-control" name="coeficiente_ubicacion">
                                        <option value="1">-</option>
                                        @foreach ($coeficiente_ubicaciones as $coeficiente_ubicacion)
                                            <option @if ((int) old('coeficiente_ubicacion') === $coeficiente_ubicacion->id) selected @endif
                                                value="{{ $coeficiente_ubicacion->id }}">
                                                {{ $coeficiente_ubicacion->descripcion }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext3" class="col-sm-6 col-form-label">Coeficiente de Oferta</label>
                                <div class="col-sm-6">
                                    <select class="form-control" name="coeficiente_oferta">
                                        <option value="1">-</option>
                                        @foreach ($coeficiente_ofertas as $coeficiente_oferta)
                                            <option @if ((int) old('coeficiente_oferta') === $coeficiente_oferta->id) selected @endif
                                                value="{{ $coeficiente_oferta->id }}">
                                                {{ $coeficiente_oferta->descripcion }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext3" class="col-sm-6 col-form-label">Coeficiente de Formas de
                                    Pagos</label>
                                <div class="col-sm-6">
                                    <select class="form-control" name="coeficiente_formapago">
                                        <option value="1">-</option>
                                        @foreach ($coeficiente_formapagos as $coeficiente_formapago)
                                            <option @if ((int) old('coeficiente_formapago') === $coeficiente_formapago->id) selected @endif
                                                value="{{ $coeficiente_formapago->id }}">
                                                {{ $coeficiente_formapago->descripcion }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext3" class="col-sm-6 col-form-label">Coeficiente Fuente
                                    Informante</label>
                                <div class="col-sm-6">
                                    <select class="form-control" name="coeficiente_fuenteinformante">
                                        <option value="1">-</option>
                                        @foreach ($coeficiente_fuenteinformantes as $coeficiente_fuenteinformante)
                                            <option @if ((int) old('coeficiente_fuenteinformante') === $coeficiente_fuenteinformante->id) selected @endif
                                                value="{{ $coeficiente_fuenteinformante->id }}">
                                                {{ $coeficiente_fuenteinformante->descripcion }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext3" class="col-sm-6 col-form-label">Coeficiente de
                                    Actualización</label>
                                <div class="col-sm-6">
                                    <select class="form-control" name="coeficiente_actualizacion">
                                        <option value="1">-</option>
                                        @foreach ($coeficiente_actualizaciones as $coeficiente_actualizacion)
                                            <option @if ((int) old('coeficiente_actualizacion') === $coeficiente_actualizacion->id) selected @endif
                                                value="{{ $coeficiente_actualizacion->id }}">
                                                {{ $coeficiente_actualizacion->descripcion }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div> --}}
                            <h2>Valores Fijados</h2>
            <table border="1" class="table-responsive">
              <tr>
                {{-- <td class="px-2">Id</td> --}}
                <td class="col-1">Departamento</td>
                <td style="width: 5%;">Zona</td>
                <td class="col-2">Dirección</td>
                <td class="col-1">Ubicación</td>
                <td class="col-1">Precio</td>
                <td class="col-1">Superficie</td>
                <td class="col-1">Frente</td>
                <td class="col-1">Fondo</td>
                <td class="col-1">Valor Unitario</td>
                <td class="col-1">Valor Unitario corregido</td>
                <td class="col-2">Opciones</td>
              </tr>
              <tr>
                <td colspan="10">No hay datos fijados</td>
                <td>
                  <button type="button" class="card-text bg-red text-center rounded-md px-3 mr-1 shadow-lg">Eliminar</button>
                </td>
              </tr>
              
            </table>
                            {{-- <table border="1" class="table-responsive">
                                <tr>
                                    <td class="px-2">Id</td>
                                    <td class="col-2">Departamento</td>
                                    <td class="col-2">Zona</td>
                                    <td class="col-2">Dirección</td>
                                    <td class="col-2">Ubicación</td>
                                    <td class="col-1">Precio</td>
                                    <td class="col-1">Superficie</td>
                                    <td class="col-1">Frente</td>
                                    <td class="col-1">Fondo</td>
                                    <td class="col-1">Valor Unitario</td>
                                    <td class="col-1">Opciones</td>
                                </tr> --}}
                                {{-- @foreach ($antecedentes as $antecedente)
                                  <tr>
                                    <td class="text-center">{{ $antecedente->id }}</td>
                                    <td>{{ $antecedente->departamentos['descripcion'] }}</td>
                  
                                    <td>{{ $antecedente->zonas['descripcion'] }}</td>
                                    <td>{{ $antecedente->direccion }}</td>
                                    <td>{{ $antecedente->ubicaciongps }}</td>
                                    <td class="text-right">$ {{ number_format($antecedente->precio, 2) }}</td>
                                    <td class="text-right">{{ number_format($antecedente->superficie, 2) }}</td>
                                    <td class="text-right">{{ number_format($antecedente->frente, 2) }}</td>
                                    <td class="text-right">{{ number_format($antecedente->fondo, 2) }}</td>
                                    <td class="text-right">$ {{ number_format($antecedente->precio / $antecedente->superficie, 2) }}</td>
                                    <td class="text-right"> <a href="{{ route('antecedentes.edit',$antecedente->id) }}"> <button class="btn btn-warning">Modificar</button></a></td>
                                  </tr>
                                @endforeach --}}
                            {{-- </table> --}}
                            <table>
                                <tr>
                                    <td colspan="9" class="text-right">Acumulado</td>
                                    <td class="text-right">$ 100</td>
                                    {{-- <td class="text-right">${{ number_format($Acumulado, 2) }}</td> --}}
                                  </tr>
                                  <tr>
                                    <td colspan="9" class="text-right">Promedio de precio de valor corregido</td>
                                    <td class="text-right">$ 200</td>
                                    {{-- <td class="text-right">${{ number_format($promediopreciovalorcorregido, 2) }}</td> --}}
                                  </tr>
                            </table>
                        </form>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </div>
        </div> --}}

    </div>
    @endsection
</div>
