<div>
    <div style="display: flex;">
        <h1 style="margin-left: 15px">Provincias</h1> 
        <input type="button" value="Agregar" style="padding: 10px 15px 10px 15px; background-color: lightgreen; border-radius: 6px;margin-left: 15px;" wire:click="isModalAlta();">
    </div>
    <table class="table table-striped">
        <tr>
            <td>Nombre de la Provincia</td>
            <td>Pais</td>
            <td>Opciones</td>
        </tr>
        @foreach ($provincias as $provincia)
            <tr>
                <td>{{ $provincia->descripcion }}</td>
                <td>{{ $provincia->pais->descripcion }}</td>
                <td>opciones</td>
            </tr>
        @endforeach
    </table>

    @if ($isModalAlta)
        @include('livewire.provincia.modals.modal-provincias-alta')
    @endif


</div>
