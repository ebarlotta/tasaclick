<div>
    <h1>Tasadores</h1>
    <table class="table table-striped">
        <tr>
            <td>Nombre Tasador</td>
            <td>Dni</td>
            <td>Cuit</td>
            <td>Domicilio</td>
            <td>Matricula</td>
            <td>Telefono</td>
            <td>Email</td>
            <td>Departamento</td>
            <td>Opciones</td>
        </tr>
        @foreach($tasadores as $tasador)
            <tr>
                <td>{{ $tasador->nombre }} </td>
                <td>{{ $tasador->dni }} </td>
                <td>{{ $tasador->cuit }} </td>
                <td>{{ $tasador->domicilio }} </td>
                <td>{{ $tasador->matricula }} </td>
                <td>{{ $tasador->telefono }} </td>
                <td>{{ $tasador->email }} </td>
                <td>{{ $tasador->departamento->descripcion }} </td>
                <td>Opciones</td>
                </tr>
        @endforeach
    </table>
</div>
