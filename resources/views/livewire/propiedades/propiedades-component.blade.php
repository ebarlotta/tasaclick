{{-- @extends('layouts.plantilla') --}}
<div>
    <div class="col-md-4">
        <div class="card card-widget widget-user-2 shadow-sm">
            <div class="widget-user-header bg-warning mb-3">
                <div class="widget-user-image">
                    <img class="img-circle elevation-2" src="{{ asset('images/assets/avatar.jpg') }}" alt="User Avatar" style="float: left; height: 65px; width: 65px; border-radius: 50%;">
                </div>

                <h3 class="widget-user-username">Nadia Carmichael</h3>
                <h5 class="widget-user-desc">Lead Developer</h5>
            </div>
    


            <div class="card card-info" data-card-widget="collapse">

                <div class="card-header">
                    <h3 class="card-title">Datos Iniciales</h3>
                    <span class="float-right badge bg-warning">0 / 3</span>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>

                <div class="card-body" style="display: none;">

                    <div class="info-box">
                        {{-- <span class="info-box-icon bg-success btn btn-default" data-toggle="modal"
                            data-target="#propiedad1"><i class="far fa-copy"></i></span> --}}
                            <span class="info-box-icon bg-success btn btn-default" wire:click="openclose1()">
                                <i class="far fa-copy"></i>
                            </span>
                        <div class="info-box-content">
                            <span class="info-box-text">
                                <h5>Datos de Iniciales de la Propiedad</h5>
                            </span>
                        </div>
                    </div>

                    <div class="info-box">
                        {{-- <span class="info-box-icon bg-success btn btn-default" data-toggle="modal"
                            data-target="#propiedad2"><i class="far fa-copy"></i></span> --}}
                            <span class="info-box-icon bg-success btn btn-default" wire:click="openclose2()">
                                <i class="far fa-copy"></i>
                            </span>
                        <div class="info-box-content">
                            <span class="info-box-text">
                                <h5>Ubicación de la Propiedad</h5>
                                {{-- <button wire:click="modal1()">Click</button> --}}
                                {{-- @if ($fondo1)
                                    @include('livewire.propiedadescreate')
                                @endif --}}
                            </span>
                        </div>
                    </div>

                    <div class="info-box">
                        <span class="info-box-icon bg-success btn btn-default" data-toggle="modal"
                            data-target="#propiedad3"><i class="far fa-copy"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">
                                <h5>Coeficientes</h5>
                            </span>
                        </div>
                    </div>
                </div>

            </div>

            <div class="card card-info" data-card-widget="collapse">
                <div class="card-header">
                    <h3 class="card-title">Antecedentes</h3>
                    <span class="float-right badge bg-warning">0 / 2</span>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                class="fas fa-plus"></i>
                        </button>
                    </div>

                </div>

                <div class="card-body" style="display: none;">
                    <div class="info-box">
                        <span class="info-box-icon bg-success btn btn-default" data-toggle="modal"
                            data-target="#antecedente1"><i class="far fa-copy"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">
                                <h5>Agregar Antecedente</h5>
                            </span>
                        </div>

                    </div>
                    <div class="info-box">
                        <span class="info-box-icon bg-success btn btn-default" data-toggle="modal"
                            data-target="#antecedente2"><i class="far fa-copy"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">
                                <h5>Datos de Homogenización</h5>
                            </span>
                        </div>

                    </div>
                </div>
            </div>

            <div class="info-box">
                <span class="info-box-icon bg-success"><i class="far fa-copy"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Cálculo</span>
                    <span class="info-box-number">
                        <h3>$ 13,648</h3>
                    </span>
                </div>
            </div>
        </div>

        @if ($isModal1Open)
            @include('livewire.propiedades.modals.propiedadesmodal1')
        @endif

        @if ($isModal2Open)
            @include('livewire.propiedades.modals.propiedadesmodal2')
        @endif

        <!-- MODAL DATOS PROPIEDAD 3 -->
        <!-- =====================  -->
        <div class="modal fade" id="propiedad3" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Coeficientes</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="" class="form-horizontal">
                            <div class="form-group row">
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
                                    <select class="form-control" placeholder="Provincia">
                                        <option value="1">-</option>
                                        @foreach ($coeficiente_topografias as $coeficiente_topografia)
                                            <option value="{{ $coeficiente_topografia->id }}">
                                                {{ $coeficiente_topografia->descripcion }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext3" class="col-sm-6 col-form-label">Coeficiente de Pavimento y
                                    Servivio</label>
                                <div class="col-sm-6">
                                    <select class="form-control" placeholder="Provincia">
                                        <option value="1">-</option>
                                        @foreach ($coeficiente_pavimentoyservicios as $coeficiente_pavimentoyservicio)
                                            <option value="{{ $coeficiente_pavimentoyservicio->id }}">
                                                {{ $coeficiente_pavimentoyservicio->descripcion }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext3" class="col-sm-6 col-form-label">Coeficiente de
                                    Ubicación</label>
                                <div class="col-sm-6">
                                    <select class="form-control" placeholder="Provincia">
                                        <option value="1">-</option>
                                        @foreach ($coeficiente_ubicaciones as $coeficiente_ubicacione)
                                            <option value="{{ $coeficiente_ubicacione->id }}">
                                                {{ $coeficiente_ubicacione->descripcion }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext3" class="col-sm-6 col-form-label">Coeficiente de Oferta</label>
                                <div class="col-sm-6">
                                    <select class="form-control" placeholder="Provincia">
                                        <option value="1">-</option>
                                        @foreach ($coeficiente_ofertas as $coeficiente_oferta)
                                            <option value="{{ $coeficiente_oferta->id }}">
                                                {{ $coeficiente_oferta->descripcion }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputtext3" class="col-sm-6 col-form-label">Coeficiente de Oferta</label>
                                <div class="col-sm-6">
                                    <select class="form-control" placeholder="Provincia">
                                        <option value="1">-</option>
                                        @foreach ($coeficiente_ofertas as $coeficiente_oferta)
                                            <option value="{{ $coeficiente_oferta->id }}">
                                                {{ $coeficiente_oferta->descripcion }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputtext3" class="col-sm-6 col-form-label">Coeficiente de Oferta</label>
                                <div class="col-sm-6">
                                    <select class="form-control" placeholder="Provincia">
                                        <option value="1">-</option>
                                        @foreach ($coeficiente_ofertas as $coeficiente_oferta)
                                            <option value="{{ $coeficiente_oferta->id }}">
                                                {{ $coeficiente_oferta->descripcion }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputtext3" class="col-sm-6 col-form-label">Coeficiente de Oferta</label>
                                <div class="col-sm-6">
                                    <select class="form-control" placeholder="Provincia">
                                        <option value="1">-</option>
                                        @foreach ($coeficiente_ofertas as $coeficiente_oferta)
                                            <option value="{{ $coeficiente_oferta->id }}">
                                                {{ $coeficiente_oferta->descripcion }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputtext3" class="col-sm-6 col-form-label">Coeficiente de Oferta</label>
                                <div class="col-sm-6">
                                    <select class="form-control" placeholder="Provincia">
                                        <option value="1">-</option>
                                        @foreach ($coeficiente_ofertas as $coeficiente_oferta)
                                            <option value="{{ $coeficiente_oferta->id }}">
                                                {{ $coeficiente_oferta->descripcion }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputtext3" class="col-sm-6 col-form-label">Coeficiente de Oferta</label>
                                <div class="col-sm-6">
                                    <select class="form-control" placeholder="Provincia">
                                        <option value="1">-</option>
                                        @foreach ($coeficiente_ofertas as $coeficiente_oferta)
                                            <option value="{{ $coeficiente_oferta->id }}">
                                                {{ $coeficiente_oferta->descripcion }}</option>
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
        </div>

        <!-- MODAL DATOS ANTECEDENTES 1 -->
        <!-- ========================== -->
        <div class="modal fade" id="antecedente1" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Agregar Antecedente</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="" class="form-horizontal">
                            <div class="form-group row">
                                <label for="inputtext3" class="col-sm-6 col-form-label">Fecha</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="inputtext3" placeholder="Fecha">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext3" class="col-sm-6 col-form-label">Dirección</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="inputtext3"
                                        placeholder="Dirección">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext3" class="col-sm-6 col-form-label">Precio</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="inputtext3" placeholder="Precio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext3" class="col-sm-6 col-form-label">Valor Unitario</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="inputtext3"
                                        placeholder="Valor Unitario">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext3" class="col-sm-6 col-form-label">Superficie</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="inputtext3"
                                        placeholder="Superficie">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext3" class="col-sm-6 col-form-label">Frente</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="inputtext3" placeholder="Frente">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext3" class="col-sm-6 col-form-label">Fondo</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="inputtext3" placeholder="Fondo">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext3" class="col-sm-6 col-form-label">Ubicación GPS</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="inputtext3"
                                        placeholder="Ubicación GPS">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext3" class="col-sm-6 col-form-label">Departamento</label>
                                <div class="col-sm-6">
                                    <select class="form-control" placeholder="Provincia">
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
                                    <select class="form-control" placeholder="Provincia">
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
        </div>

        <!-- MODAL DATOS ANTECEDENTES 2 -->
        <!-- ========================== -->
        <div class="modal fade" id="antecedente2" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Coeficientes del Antecedente</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="" class="form-horizontal">
                            <div class="form-group row">
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
                            </div>
                            <table border="1" class="table-responsive">
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
                                </tr>
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
                            </table>
                        </form>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
