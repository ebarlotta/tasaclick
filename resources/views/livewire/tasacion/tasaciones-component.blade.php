<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                        <h1>Tasaciones</h1>
                        {{-- <a class="float-right" href="{{ route('propiedades.create') }}">
                            <button type="button" class="card-text bg-success text-center rounded-md px-3 mr-1 shadow-lg">Nueva Tasación</button>
                            </a> --}}
                        </div>
                        <div class="card-body justify-left">
                            <table class="table table-striped" style="border: 1">
                                <tr style="text-align: center">
                                    <td>Fecha Tasación</td>
                                    <td>Plano</td>
                                    <td>Dirección</td>
                                    <td>Precio</td>
                                    <td>Departamento</td>
                                    <td>Opciones</td>
                                </tr>
                                {{-- {{ $tasaciones }} --}}
                                @if($tasaciones)
                                @foreach ($tasaciones as $tasacion)
                                <tr>
                                    <td style="vertical-align: middle;">{{ substr($tasacion->fechatasacion,5,2).'-'.substr($tasacion->fechatasacion,8,2).'-'.substr($tasacion->fechatasacion,0,4) }}</td>
                                    <td style="vertical-align: middle;">
                                        @if($tasacion->imagenplano->url)
                                            <img src="{{ asset($tasacion->imagenplano->url) }}" style="width: 70px; height: 70px; border-radius: 20px">                                            
                                        @else
                                            <img src="{{ asset('images/assets/sinimagen.jpg') }}" style="width: 70px; height: 70px; border-radius: 20px">
                                        @endif
                                    </td>
                                    <td style="vertical-align: middle;">{{ $tasacion->propiedad->domicilio }}</td>
                                    {{-- <td style="vertical-align: middle;">{{ $tasacion->propiedad->departamento->descripcion }}</td>  --}}
                                    {{-- <td>{{ $tasacion->fines[0]->descripcion }}</td> --}}
                                    <td style="vertical-align: middle;">{{ '$' . number_format($tasacion->preciofinal,2, ',', '.') }}</td>
                                    <td>{{ $tasacion->propiedad->departamento->descripcion }}</td>
                                    <td style="vertical-align: middle; text-align: center;">
                                        <input type="button" class="card-text bg-success text-center rounded-md px-3 mr-1 shadow-lg rounded-lg" value="Descargar">
                                        {{-- <a class="float-right" href="{{ route('tasaciones.destroy',$tasacion->propiedad[0]->id) }}">
                                            <input type="button" class="card-text bg-danger text-center rounded-md px-3 mr-1 shadow-lg" value="Eliminar">
                                        </a>
                                        <a class="float-right" href="{{ route('tasaciones.edit',$tasacion->propiedad[0]->id) }}">
                                            <input type="button" class="card-text bg-warning text-center rounded-md px-3 mr-1 shadow-lg" value="Modificar">
                                        </a> --}}
                                    </td>
                                </tr>
                                @endforeach
                            @endif
                            </table>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>
