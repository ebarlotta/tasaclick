<div>
    <div class="modal fade show" id="modal-default" style="display: block;" aria-modal="true" role="dialog">
        <!-- MODAL DATOS PROPIEDAD1  -->
        <!-- =====================  -->
        <div class="modal-dialog" style="width: 70%; max-width: 70%">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Datos de la Propiedad</h4>
                    <button type="button" class="btn btn-default" wire:click="isModalValoresfijados(0)"><span
                            aria-hidden="true">×</span></button>
                    {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button> --}}
                </div>
                <div class="modal-body">
                    <h3>Antecedentes Fijados</h3>
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
                            <td>Valor Unitario</td>
                            <td>Valor Unitario corregido</td> --}}
                        </tr>
                        <tr>
                            <td colspan="9" class="text-right">Precio Acumulado:</td>
                            <td class="text-right">$ {{ number_format($acumuladoprecio,2) }}</td>
                            {{-- <td class="text-right">${{ number_format($Acumulado, 2) }}</td> --}}
                        </tr>
                        <tr>
                            <td colspan="9" class="text-right">Precio normalizado Acumulado:</td>
                            <td class="text-right">$ {{ number_format($precionormalizado,2) }}</td>
                            {{-- <td class="text-right">${{ number_format($promediopreciovalorcorregido, 2) }}</td> --}}
                        </tr>
                        <tr>
                            <td colspan="9" class="text-right">Precio de coeficientes Acumulado:</td>
                            <td class="text-right">$ {{ number_format($coeficientenormalizado,2) }}</td>
                            {{-- <td class="text-right">${{ number_format($promediopreciovalorcorregido, 2) }}</td> --}}
                        </tr>
                        <tr>
                            <td colspan="9" class="text-right">Promedio de precios normalizados:</td>
                            <td class="text-right">$ {{ number_format($promedioprecionormalizado,2) }}</td>
                            {{-- <td class="text-right">${{ number_format($promediopreciovalorcorregido, 2) }}</td> --}}
                        </tr>
                        <tr>
                            <td colspan="9" class="text-right">Promedio de ceficientes normalizados:</td>
                            <td class="text-right">$ {{ number_format($promediocoeficientenormalizado,2) }}</td>
                            {{-- <td class="text-right">${{ number_format($promediopreciovalorcorregido, 2) }}</td> --}}
                        </tr>
                    </table>

                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" wire:click="isModalValoresfijados(1)">Cerrar</button>
                    <button type="button" class="btn btn-primary" wire:click="A1Guardar()">Guardar</button>
                </div>
            </div>
        </div>
    </div>
<div>