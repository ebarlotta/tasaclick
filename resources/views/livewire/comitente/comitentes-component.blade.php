<div>
    <h1>Comitentes</h1>
    <table class="table table-striped">
        <tr>
            <td>Nombre Comitente</td>
            <td>Dni</td>
            <td>Cuit</td>
            <td>Domicilio</td>
            <td>Matricula</td>
            <td>Telefono</td>
            <td>Email</td>
            <td>Departamento</td>
            <td>Opciones</td>
        </tr>
        @foreach($comitentes as $comitente)
            <tr>
                <td>{{ $comitente->nombre }} </td>
                <td>{{ $comitente->dni }} </td>
                <td>{{ $comitente->cuit }} </td>
                <td>{{ $comitente->domicilio }} </td>
                <td>{{ $comitente->matricula }} </td>
                <td>{{ $comitente->telefono }} </td>
                <td>{{ $comitente->email }} </td>
                <td>{{ $comitente->departamento->descripcion }} </td>
                <td>Opciones</td>
                </tr>
        @endforeach
    </table>
</div>
