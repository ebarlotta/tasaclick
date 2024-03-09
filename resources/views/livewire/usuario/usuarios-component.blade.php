<div>
    <h1>Usuarios</h1>    
    <table class="table table-striped">
        <tr>
            <td>Nombre de Usuario</td>
            <td>Email</td>
            <td>Opciones</td>
        </tr>
        @foreach($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->name }} </td>
                <td>{{ $usuario->email }} </td>
                <td>Opciones</td>
                </tr>
        @endforeach
    </table>

</div>
