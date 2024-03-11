<div>
    <div class="row mx-2">
        <div class="card card-info col-12">
            <div class="card-header d-flex" >
                <h1 style="margin-left: 15px">Antecedentes</h1>
                {{-- <h3 class="card-title">Listado de Antecedentes</h3> --}}
                <input type="button" value="Agregar" style="padding: 10px 15px 10px 15px; background-color: lightgreen; border-radius: 6px;margin-left: 15px;" wire:click="isModalAlta();">
                {{-- <span class="float-right badge bg-warning">0 / 3</span>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                    </button>
                </div> --}}
            </div>
            <table class="table table-striped">
                <tr>
                    <td><b>Domicilio</b></td>
                    <td><b>Precio</b></td>
                    <td><b>Superficie</b></td>
                    <td><b>Frente</b></td>
                    <td><b>Fondo</b></td>
                    <td><b>Ubicaciongps</b></td>
                    <td><b>Departamento</b></td>
                    <td><b>Precio Normalizado</b></td>
                    <td><b>Coeficiente Normalizado</b></td>
                    <td><b>Opciones</td< /b>
                </tr>
                @foreach ($antecedentes as $antecedente)
                    <tr>
                        <td>{{ $antecedente->domicilio }} </td>
                        <td>{{ $antecedente->precio }} </td>
                        <td>{{ $antecedente->superficie }} </td>
                        <td>{{ $antecedente->frente }} </td>
                        <td>{{ $antecedente->fondo }} </td>
                        <td>{{ $antecedente->ubicaciongps }} </td>
                        <td>{{ $antecedente->departamento->descripcion }} </td>
                        <td>{{ $antecedente->precionormalizado }} </td>
                        <td>{{ $antecedente->coeficientenormalizado }} </td>
                        <td><input type="button" value="Editar" style="padding: 10px 15px 10px 15px; background-color: lightgreen; border-radius: 6px;margin-left: 15px;" wire:click="isModalEditar({{ $antecedente->id }});"></td>
                    </tr>
                @endforeach
            </table>

            @if($isModalEditar)
                @include('livewire.antecedente.modals.antecedentesEditarModal')
            @endif
            @if($isModalAltashow)
                @include('livewire.antecedente.modals.antecedentesEditarModal')
            @endif
        </div>
    </div>
</div>
