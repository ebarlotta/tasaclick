<div>
    <div style="display: flex;">
        <h1 style="margin-left: 15px">Antecedentes</h1> 
        <input type="button" value="Agregar" style="padding: 10px 15px 10px 15px; background-color: lightgreen; border-radius: 6px;margin-left: 15px;" wire:click="isModalAlta();">
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
            <td><b>Opciones</td</b>
        </tr>
        @foreach($antecedentes as $antecedente)
            <tr>
                <td>{{ $antecedente->domicilio }} </td>
                <td>{{ $antecedente->precio }} </td>
                <td>{{ $antecedente->superficie }} </td>
                <td>{{ $antecedente->frente }} </td>
                <td>{{ $antecedente->fondo }} </td>
                <td>{{ $antecedente->ubicaciongps }} </td>
                <td>{{ $antecedente->departamento->descripcion }} </td>
                <td>{{ $antecedente->precionormalizado }} </td>
                <td>{{ $antecedente->coeficientenormalizado}} </td>
                <td>Opciones</td>
                </tr>
        @endforeach
    </table>


</div>
