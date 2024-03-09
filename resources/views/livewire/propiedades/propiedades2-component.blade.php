@extends('layouts.adminlte')
{{-- @extends('layouts.plantilla') --}}


<div>
    @section('content')
        <div class=" col-12">
            <div class="card card-widget widget-user-2 shadow-sm">
                <div class="widget-user-header bg-warning mb-3">
                    <div class="widget-user-image">
                        <img class="img-circle elevation-2" src="{{ asset('images/assets/avatar.jpg') }}" alt="User Avatar"
                            style="float: left; height: 65px; width: 65px; border-radius: 50%;">
                    </div>

                    <h3 class="widget-user-username">Nadia Carmichael</h3>
                    <h5 class="widget-user-desc">Lead Developer</h5>
                </div>


                <div class="row mx-2">
                    <div class="card card-info col-12">

                        <div class="card-header">
                            <h3 class="card-title">Listado de Propiedades</h3>
                            <span class="float-right badge bg-warning">0 / 3</span>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                        class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>

                        <div class="card-body">
                            <table border="1">
                                <tr>
                                    <td>Opc.</td>
                                    <td>Domicilio</td>
                                    <td>Ubicación</td>
                                    <td>Frente</td>
                                    <td>Fondo</td>
                                    <td>Ciudad</td>
                                    <td>Opciones</td>
                                </tr>
                                @foreach ($propiedades as $propiedad)
                                    <tr>
                                        <td style="text-align: center"><input type="checkbox" value=" "
                                                wire:click="MostrarValoresFijados({{ $propiedad->id }})"></td>
                                        <td>{{ $propiedad->domicilio }}</td>
                                        <td>{{ $propiedad->ubicaciongps }}</td>
                                        <td style="text-align: right">{{ $propiedad->frente }}</td>
                                        <td style="text-align: right">{{ $propiedad->fondo }}</td>
                                        <td style="text-align: right">{{ $propiedad->departamento['descripcion'] }}</td>
                                        <td>
                                            <button class="btn-warning">Modificar</button>
                                            <button class="btn-success">Ver Detalle</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>

                        </div>

                    </div>
                </div>
                @if($isHidden1Open)
                    <div class="row mx-2">
                        <div class="card card-info col-12">

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
                                        <button type="button"
                                            class="card-text bg-red text-center rounded-md px-3 mr-1 shadow-lg">Eliminar</button>
                                    </td>
                                </tr>
            
                            </table>
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
            
                        
                    </div>
                @endif

            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
    </div>

    </div>
@endsection
</div>
