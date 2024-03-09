<div>
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
                        <table border="1" style="width: 100%" class="table table-striped">
                            <tr>
                                {{-- <td>Opc.</td> --}}
                                <td><b>Domicilio</b></td>
                                <td><b>Ubicación</b></td>
                                <td><b>Frente</b></td>
                                <td><b>Fondo</b></td>
                                <td><b>Ciudad</b></td>
                                <td><b>Opciones</b></td>
                            </tr>
                            @foreach ($propiedades as $propiedad)
                                <tr wire:click="isModalValoresfijados({{ $propiedad->id }})">
                                    {{-- <td style="text-align: center"><input type="checkbox" value=" "
                                            wire:change="MostrarValoresFijados({{ $propiedad->id }})"></td> --}}
                                    <td>{{ $propiedad->domicilio }}</td>
                                    <td>{{ $propiedad->ubicaciongps }}</td>
                                    <td style="text-align: right">{{ $propiedad->frente }}</td>
                                    <td style="text-align: right">{{ $propiedad->fondo }}</td>
                                    <td style="text-align: right">{{ $propiedad->departamento->descripcion }}</td>
                                    <td>
                                        <button class="btn-warning transform transition duration-500 hover:scale-105" wire:click="isModalValoresfijados({{ $propiedad->id }});">Modificar</button>
                                        <button type="button" class="btn btn-success" wire:click="isModalValoresfijados({{ $propiedad->id }})">Ver detalle</button>
                                        {{-- <input type="button" class="btn-success" wire:click="isModalValoresfijados({{ $propiedad->id }})" value="Ver Detalle"> --}}
                                    </td>
                                </tr>
                            @endforeach
                        </table>

                        @if($isModalValoresfijados)
                            @include('livewire.listapropiedades.modals.propiedadesmodal1')
                        @endif    
                    </div>
                </div>
            </div>

        {{-- <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary">Guardar</button>
        </div> --}}
    </div>
</div>
