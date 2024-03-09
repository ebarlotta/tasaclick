<div>
    <h1>Empresas</h1>
    <table class="table table-striped">
        <tr>
            <td>Nombre Comitente</td>
            <td>Cuit</td>
            <td>Direccion</td>
            <td>Telefono</td>
            <td>Email</td>
            <td>CBU</td>
            <td>Usuario</td>
            <td>Opciones</td>
        </tr>
        @foreach($empresas as $empresa)
            <tr>
                <td>{{ $empresa->nombre }} </td>
                <td>{{ $empresa->cuit }} </td>
                <td>{{ $empresa->direccion }} </td>
                <td>{{ $empresa->telefono }} </td>
                <td>{{ $empresa->email }} </td>
                <td>{{ $empresa->CBU }} </td>
                <td>{{ $empresa->usuario->name }} </td>
                <td>Opciones</td>
                </tr>
        @endforeach
    </table>
</div>
