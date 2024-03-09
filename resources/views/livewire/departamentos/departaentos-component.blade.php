<div>
    <h1>Departamentos</h1>
    <table class="table table-striped">
        <tr>
            <td>Nombre del departamento</td>
            <td>Provincia</td>
            <td>Opciones</td>
        </tr>
        @foreach($departamentos as $departamento)
            <tr>
                <td>{{ $departamento->descripcion}}</td>
                <td>{{ $departamento->provincia->descripcion}}</td>
                <td>opciones</td>
            </tr>
        @endforeach
    </table>
</div>
