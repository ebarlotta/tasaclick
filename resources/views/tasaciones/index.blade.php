@extends('layouts.adminlte')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h1>Tasaciones</h1>
                        <div class="card-body justify-left">
                           <table class="table table-striped" style="border: 1">
                              <tr>
                                 <td>Plano</td>
                                 <td>Dirección</td>
                                 <td>Departamento</td>
                                 <td>Precio</td>
                                 <td>Fecha</td>
                                 <td>Opciones</td>
                              </tr>
                              @foreach ($tasaciones as $tasacion)
                                 <td style="vertical-align: middle;"><img src="{{ asset('images/planos/'.$tasacion->propiedad[0]->imagenplano[0]->url) }}" style="width: 70px; height: 70px; border-radius: 20px"></td>
                                 <td style="vertical-align: middle;">{{ $tasacion->propiedad[0]->domicilio }}</td>

                                 <td style="vertical-align: middle;">{{ $tasacion->propiedad[0]->departamento[0]->descripcion }}</td>
                                 {{-- <td>{{ $tasacion->fines[0]->descripcion }}</td> --}}
                                 <td style="vertical-align: middle;">{{ '$' . number_format($tasacion->preciofinal,2, ',', '.') }}</td>
                                 <td style="vertical-align: middle;">{{ $tasacion->fechatasacion }}</td>
                                 <td style="vertical-align: middle;">
                                    <input type="button" class="card-text bg-success text-center rounded-md px-3 mr-1 shadow-lg" value="Descargar">
                                    <input type="button" class="card-text bg-warning text-center rounded-md px-3 mr-1 shadow-lg" value="Modificar">
                                    <input type="button" class="card-text bg-danger text-center rounded-md px-3 mr-1 shadow-lg" value="Eliminar">
                                 </td>
                              @endforeach
                           </table>    
                           <a class="float-right" href="{{ route('propiedades.create') }}">
                              <button type="button" class="card-text bg-success text-center rounded-md px-3 mr-1 shadow-lg">Nueva Tasación</button>
                           </a>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
