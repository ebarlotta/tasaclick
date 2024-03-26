<div>
    <div class=" col-12">
        <div class="card card-widget widget-user-2 shadow-sm">
            <div class="widget-user-header bg-warning mb-3">
                <div class="widget-user-image">
                    <img class="img-circle elevation-2" src="{{ asset('images/assets/avatar.jpg') }}" alt="User Avatar"
                        style="float: left; height: 65px; width: 65px; border-radius: 50%;">
                </div>

                <h3 class="widget-user-username">Nadia Carmichaelss</h3>
                <h5 class="widget-user-desc">Lead Developer</h5>
            </div>

            <div class="row mx-2">
                <div class="card card-info col-12">
                    <div class="card-header">
                        <div class="d-flex">
                            <h3 class="card-title col-2">Listado de Propiedades</h3>
                            <div class="col-2 ml-2">
                                Ciudades
                                <select wire:model="ciudad_id_filtro" class="form-control col-12">
                                    <option value="">Filtrar por ciudad</option>
                                    @foreach ($ciudades as $ciudad)
                                        <option value="{{ $ciudad->id}}">{{ $ciudad->descripcion}}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{-- <div class="col-8">
                                <span class="float-right badge bg-warning">1 / 1</span>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i></button>
                                </div>
                            </div> --}}
                        </div>
                    </div>

                    <div class="card-body">
                        <table border="1" style="width: 100%" class="table table-striped">
                            <tr>
                                {{-- <td>Opc.</td> --}}
                                <td><b>Domicilio</b></td>
                                <td><b>Ubicación</b></td>
                                <td><b>Frente</b></td>
                                <td><b>Fondo</b></td>
                                <td><b>Ciudad</b></td>
                                {{-- <td><b>Opciones</b></td> --}}
                            </tr>
                            @foreach ($propiedades as $propiedad)
                                <tr wire:click="isModalValoresfijados({{ $propiedad->id }})">
                                    {{-- <td style="text-align: center"><input type="checkbox" value=" "
                                            wire:change="MostrarValoresFijados({{ $propiedad->id }})"></td> --}}
                                    <td>{{ $propiedad->domicilio }}</td>
                                    <td>{{ $propiedad->ubicaciongps }}
                                        <div class="mapouter">
                                            <div class="gmap_canvas">
                                                <iframe width="400" height="100" id="gmap_canvas" src="https://maps.google.com/maps?q={{ $propiedad->ubicaciongps }}&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                                                </iframe>
                                                {{-- <a href="https://timenowin.net/">online clock</a><br><a href="https://www.analarmclock.com/"></a>
                                                <br>
                                                <style>.mapouter{position: relative;text-align: right;height: 560px;width: 820px;}</style>
                                                <a href="https://www.mapembed.net">google maps embed</a>
                                                    <style>.gmap_canvas{overflow: hidden;background: none !important;height: 560px;width: 820px;}</style> --}}
                                            </div>
                                    </td>
                                    <td style="text-align: right">{{ $propiedad->frente }}</td>
                                    <td style="text-align: right">{{ $propiedad->fondo }}</td>
                                    <td style="text-align: right">{{ $propiedad->departamento->descripcion }}</td>
                                    {{-- <td> --}}
                                        
                                        {{-- <a href=""   > --}}

                                            {{-- <input wire:click="isModalValoresfijados({{ $propiedad->id }})" type="submit" class="form-control col-12" value="Modificar">  --}}
                                        {{-- </a> --}}
                                        {{-- <button  wire:click="isModalValoresfijados({{ $propiedad->id }})" type="button" class="btn btn-success">Ver detalle</button> --}}
                                        {{-- <button  wire:click="isModalValoresfijados({{ $propiedad->id }})" type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">Ver detalle</button> --}}
                                        {{-- <input type="button" class="btn-success" wire:click="isModalValoresfijados({{ $propiedad->id }})" value="Ver Detalle"> --}}
                                    {{-- </td> --}}
                                </tr>
                            @endforeach
                        </table>

                        @if ($isModalValoresfijados)
                            @include('livewire.listapropiedades.modals.propiedadesmodal1')
                            {{-- @include('livewire.antecedente.modals.antecedentesEditarModal') --}}
                        @endif   
                        {{-- @if ($isHidden1Open) 
                            @include('livewire.listapropiedades.modals.createactores')
                        @endif --}}
                    </div>
                </div>
            </div>


            <!-- Modal -->
            <!-- ===== -->

            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
                <div class="modal-dialog modal-dialog-centered" role="document" style="width: 70%; max-width: 70%">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Datos de la Propiedad</h4>
                            <button type="button" class="btn btn-default" wire:click="isModalValoresfijados(0)"><span
                                    aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="d-flex"><h3>Antecedentes Fijados</h3>
                                <button  wire:click="isModalValoresfijados({{ $propiedad->id }})" type="button" class="btn btn-success" data-toggle="modal" data-target="#AgregarAntecedentes">Agregar Antecedentes</button>
                            </div>
                            <table border="1" class="table-responsive">
                                <tr>
                                    <td class="col-1">Departamento</td>
                                    <td style="width: 5%;">Zona</td>
                                    <td class="col-2">Domicilio</td>
                                    <td class="col-1">Ubicación</td>
                                    <td class="col-1">Precio</td>
                                    <td class="col-1">Superficie</td>
                                    <td class="col-1">Frente</td>
                                    <td class="col-1">Fondo</td>
                                    <td class="col-1">Valor Unitario</td>
                                    <td class="col-1">Valor Unitario corregido</td>
                                    <td class="col-2">Opciones</td>
                                </tr>
                                @if ($fijados)
                                    @foreach ($fijados as $fijado)
                                        <tr>
                                            <td class="col-1">{{ $fijado->departamento->descripcion }}</td>
                                            <td style="width: 5%;">{{ $fijado->zona->descripcion }}</td>
                                            <td class="col-2">{{ $fijado->domicilio }}</td>
                                            <td class="col-1">{{ $fijado->ubicaciongps }}</td>
                                            <td class="col-1">{{ $fijado->precio }}</td>
                                            <td class="col-1">{{ $fijado->superficie }}</td>
                                            <td class="col-1">{{ $fijado->frente }}</td>
                                            <td class="col-1">{{ $fijado->fondo }}</td>
                                            <td class="col-1">{{ $fijado->precionormalizado }}</td>
                                            <td class="col-1">{{ $fijado->coeficientenormalizado }}</td>
                                            <td class="col-2">Opciones</td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="10">No hay datos fijados</td>
                                        <td>
                                            <button type="button"
                                                class="card-text bg-red text-center rounded-md px-3 mr-1 shadow-lg"
                                                style="hover:transform: scale(2,3);">Eliminar</button>
                                        </td>
                                    </tr>
                                @endif
                            </table>
                            <table>
                                <tr>
                                    <td colspan="9" class="text-right">Cantidad de Antecedentes: </td>
                                    <td class="text-right">{{ $cantidad }}</td>
                                    {{-- <td class="text-right">${{ number_format($Acumulado, 2) }}</td> --}}
                                    {{-- <td>Precios</td>
                                </tr>
                                <tr>
                                    <td colspan="9" class="text-right">Precio Acumulado:</td>
                                    <td class="text-right">$ {{ number_format($acumuladoprecio, 2) }}</td>
                                    {{-- <td class="text-right">${{ number_format($Acumulado, 2) }}</td> --}}
                                </tr>
                                <tr>
                                    <td colspan="9" class="text-right">Precio normalizado Acumulado:</td>
                                    <td class="text-right">$ {{ number_format($precionormalizado, 2) }}</td>
                                    {{-- <td class="text-right">${{ number_format($promediopreciovalorcorregido, 2) }}</td> --}}
                                </tr>
                                <tr>
                                    <td colspan="9" class="text-right">Precio de coeficientes Acumulado:</td>
                                    <td class="text-right">$ {{ number_format($coeficientenormalizado, 2) }}</td>
                                    {{-- <td class="text-right">${{ number_format($promediopreciovalorcorregido, 2) }}</td> --}}
                                </tr>
                                <tr>
                                    <td colspan="9" class="text-right">Promedio de precios normalizados:</td>
                                    <td class="text-right">$ {{ number_format($promedioprecionormalizado, 2) }}</td>
                                    {{-- <td class="text-right">${{ number_format($promediopreciovalorcorregido, 2) }}</td> --}}
                                </tr>
                                <tr>
                                    <td colspan="9" class="text-right">Promedio de ceficientes normalizados:</td>
                                    <td class="text-right">$ {{ number_format($promediocoeficientenormalizado, 2) }}
                                    </td>
                                    {{-- <td class="text-right">${{ number_format($promediopreciovalorcorregido, 2) }}</td> --}}
                                </tr>
                            </table>

                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default"
                                wire:click="isModalValoresfijados(1)">Cerrar</button>
                            <button type="button" class="btn btn-primary" wire:click="A1Guardar()">Guardar</button>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Agregar Antecedentes -->
            <!-- ========================== -->

            <div class="modal fade" id="AgregarAntecedentes" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
                <div class="modal-dialog modal-dialog-centered" role="document" style="width: 70%; max-width: 70%">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Datos de la Propiedad</h4>
                            <button type="button" class="btn btn-default" wire:click="isModalValoresfijados(0)"><span
                                    aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="d-flex"><h3>Antecedentes Fijados</h3>
                                <button  wire:click="isModalValoresfijados({{ $propiedad->id }})" type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">Agregar Antecedentes</button>
                            </div>
                            {{-- <table border="1" class="table-responsive">
                                <tr>
                                    <td class="col-1">Departamento</td>
                                    <td style="width: 5%;">Zona</td>
                                    <td class="col-2">Domicilio</td>
                                    <td class="col-1">Ubicación</td>
                                    <td class="col-1">Precio</td>
                                    <td class="col-1">Superficie</td>
                                    <td class="col-1">Frente</td>
                                    <td class="col-1">Fondo</td>
                                    <td class="col-1">Valor Unitario</td>
                                    <td class="col-1">Valor Unitario corregido</td>
                                    <td class="col-2">Opciones</td>
                                </tr>
                                @if ($fijados)
                                    @foreach ($fijados as $fijado)
                                        <tr>
                                            <td class="col-1">{{ $fijado->departamento->descripcion }}</td>
                                            <td style="width: 5%;">{{ $fijado->zona->descripcion }}</td>
                                            <td class="col-2">{{ $fijado->domicilio }}</td>
                                            <td class="col-1">{{ $fijado->ubicaciongps }}</td>
                                            <td class="col-1">{{ $fijado->precio }}</td>
                                            <td class="col-1">{{ $fijado->superficie }}</td>
                                            <td class="col-1">{{ $fijado->frente }}</td>
                                            <td class="col-1">{{ $fijado->fondo }}</td>
                                            <td class="col-1">{{ $fijado->precionormalizado }}</td>
                                            <td class="col-1">{{ $fijado->coeficientenormalizado }}</td>
                                            <td class="col-2">Opciones</td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="10">No hay datos fijados</td>
                                        <td>
                                            <button type="button"
                                                class="card-text bg-red text-center rounded-md px-3 mr-1 shadow-lg"
                                                style="hover:transform: scale(2,3);">Eliminar</button>
                                        </td>
                                    </tr>
                                @endif
                            </table> --}}
                            <table>
                                <tr>
                                    <td colspan="9" class="text-right">Cantidad de Antecedentes: </td>
                                    <td class="text-right">{{ $cantidad }}</td>
                                    {{-- <td class="text-right">${{ number_format($Acumulado, 2) }}</td> --}}
                                    {{-- <td>Precios</td>
                                </tr>
                                <tr>
                                    <td colspan="9" class="text-right">Precio Acumulado:</td>
                                    <td class="text-right">$ {{ number_format($acumuladoprecio, 2) }}</td>
                                    {{-- <td class="text-right">${{ number_format($Acumulado, 2) }}</td> --}}
                                </tr>
                                <tr>
                                    <td colspan="9" class="text-right">Precio normalizado Acumulado:</td>
                                    <td class="text-right">$ {{ number_format($precionormalizado, 2) }}</td>
                                    {{-- <td class="text-right">${{ number_format($promediopreciovalorcorregido, 2) }}</td> --}}
                                </tr>
                                <tr>
                                    <td colspan="9" class="text-right">Precio de coeficientes Acumulado:</td>
                                    <td class="text-right">$ {{ number_format($coeficientenormalizado, 2) }}</td>
                                    {{-- <td class="text-right">${{ number_format($promediopreciovalorcorregido, 2) }}</td> --}}
                                </tr>
                                <tr>
                                    <td colspan="9" class="text-right">Promedio de precios normalizados:</td>
                                    <td class="text-right">$ {{ number_format($promedioprecionormalizado, 2) }}</td>
                                    {{-- <td class="text-right">${{ number_format($promediopreciovalorcorregido, 2) }}</td> --}}
                                </tr>
                                <tr>
                                    <td colspan="9" class="text-right">Promedio de ceficientes normalizados:</td>
                                    <td class="text-right">$ {{ number_format($promediocoeficientenormalizado, 2) }}
                                    </td>
                                    {{-- <td class="text-right">${{ number_format($promediopreciovalorcorregido, 2) }}</td> --}}
                                </tr>
                            </table>

                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default"
                                wire:click="isModalValoresfijados(1)">Cerrar</button>
                            <button type="button" class="btn btn-primary" wire:click="A1Guardar()">Guardar</button>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Guardar</button>
            </div> --}}
        </div>
    </div>
</div>
