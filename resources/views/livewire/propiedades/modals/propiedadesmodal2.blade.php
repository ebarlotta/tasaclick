<div class="modal fade show" id="modal-default" style="display: block;" aria-modal="true" role="dialog">
    <div class="modal-dialog">
        {{-- <form action="" class="form-horizontal"> --}}
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Ubicación de la Propiedad</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true" wire:click="openclose2()">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="inputtext3" class="col-sm-6 col-form-label">Provincia</label>
                        <div class="col-sm-6">
                            <select class="form-control" placeholder="Provincia" wire:model="cmbprovincias">
                                <option value="1">-</option>
                                @foreach ($provincias as $provincia)
                                    <option value="{{ $provincia->id }}">{{ $provincia->descripcion }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputtext3" class="col-sm-6 col-form-label">Departamento</label>
                        <div class="col-sm-6">
                            <select class="form-control" placeholder="Departamentos" wire:model="cmbdepartamentos">
                                <option value="1">-</option>
                                @foreach ($departamentos as $departamento)
                                    <option value="{{ $departamento->id }}">{{ $departamento->descripcion }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputtext3" class="col-sm-6 col-form-label">Tipo de Inmueble</label>
                        <div class="col-sm-6">
                            <select class="form-control" placeholder="Tipo de Inmueble" wire:model="cmbtipoinmuebles">
                                <option value="1">-</option>
                                @foreach ($tipoinmuebles as $tipoinmueble)
                                    <option value="{{ $tipoinmueble->id }}">{{ $tipoinmueble->descripcion }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputtext3" class="col-sm-6 col-form-label">Zona</label>
                        <div class="col-sm-6">
                            <select class="form-control" placeholder="Zonas" wire:model="cmbzonas">
                                <option value="1">-</option>
                                @foreach ($zonas as $zona)
                                    <option value="{{ $zona->id }}">{{ $zona->descripcion }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputtext3" class="col-sm-6 col-form-label">Ubicación GPS</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" placeholder="Ubicación GPS" wire:model="cmbubicacion">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputtext3" class="col-sm-6 col-form-label">Frente</label>
                        <div class="col-sm-6">
                            <select class="form-control" placeholder="Frentes" wire:model="cmbfrente" wire:change="calcularsuperficie()">
                                <option value="1">-</option>
                                @foreach ($frentes as $frente)
                                    <option value="{{ $frente->columna }}">{{ $frente->columna }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputtext3" class="col-sm-6 col-form-label">Fondo</label>
                        <div class="col-sm-6">
                            <select class="form-control" placeholder="Fondos" wire:model="cmbfondo"
                                wire:change="calcularsuperficie()">
                                <option value="1">-</option>
                                @foreach ($fondos as $fondo)
                                    <option value="{{ $fondo->fila }}">{{ $fondo->fila }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputtext3" class="col-sm-6 col-form-label">Superficie del terreno</label>
                        <div class="col-sm-6">
                            <input type="text" wire:model="superficie" value="0">
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal"
                        wire:click="openclose2()">Cerrar</button>
                    <button type="button" class="btn btn-primary" wire:click="A2Guardar()">Guardar</button>
                </div>
            </div>
        {{-- </form> --}}
    </div>
</div>

{{-- <div>
    Testo
</div> --}}

<!-- MODAL DATOS PROPIEDAD 2 -->
<!-- =====================  -->

{{-- <div>
    <div class="modal" id="propiedad2" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Datos Ubicación de la Propiedad</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <form action="" class="form-horizontal">
                        <div class="form-group row">
                            <label for="inputtext3" class="col-sm-6 col-form-label">Provincia</label>
                            <div class="col-sm-6">
                                <select class="form-control" placeholder="Provincia">
                                    <option value="1">-</option>
                                    @foreach ($provincias as $provincia)
                                        <option value="{{ $provincia->id }}">{{ $provincia->descripcion }}</option>
                                    @endforeach
                                </select>
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
                            <label for="inputtext3" class="col-sm-6 col-form-label">Tipo de Inmueble</label>
                            <div class="col-sm-6">
                                <select class="form-control" placeholder="Provincia">
                                    <option value="1">-</option>
                                    @foreach ($tipoinmuebles as $tipoinmueble)
                                        <option value="{{ $tipoinmueble->id }}">{{ $tipoinmueble->descripcion }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputtext3" class="col-sm-6 col-form-label">Zona</label>
                            <div class="col-sm-6">
                                <select class="form-control" placeholder="Provincia" wire:modal="zona">
                                    <option value="1">-</option>
                                    @foreach ($zonas as $zona)
                                        <option value="{{ $zona->id }}">{{ $zona->descripcion }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputtext3" class="col-sm-6 col-form-label">Ubicación GPS</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="Ubicación GPS">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputtext3" class="col-sm-6 col-form-label">Frente</label>
                            <div class="col-sm-6">
                                <select class="form-control" placeholder="Frentes" wire:model="frentecmb">
                                    <option value="1">-</option>
                                    @foreach ($frentes as $frente)
                                        <option value="{{ $frente->columna }}">{{ $frente->columna }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputtext3" class="col-sm-6 col-form-label">Fondo</label>
                            <div class="col-sm-6">
                                <select class="form-control" placeholder="Fondos" wire:model="fondocmb">
                                    <option value="1">-</option>
                                    @foreach ($fondos as $fondo)
                                        <option value="{{ $fondo->fila }}">{{ $fondo->fila }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputtext3" class="col-sm-6 col-form-label">Superficie del terreno</label>
                            <div class="col-sm-6">

                                <input type="button" value="Calcular" wire:model="calcularsuperficie()">
                                <input type="text" wire:model="superficie" value="0">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" wire:click="guarda()">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</div> --}}
