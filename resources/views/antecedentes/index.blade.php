@extends('layouts.adminlte')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        {{-- @if($mensaje)
                            <div class="bg-success">{{ $mensaje}}</div>
                        @endif --}}
                        <form action="{{ route('antecedentes.store') }}" method="POST">
                            @csrf
                            <h1>Antecedentes</h1>
                            {{-- <a class="float-right" href="{{ route('antecedentes.store') }}"> --}}
                                <button type="submit" class="card-text bg-success text-center rounded-md px-3 mr-1 shadow-lg">Agregar</button>
                            {{-- </a> --}}
                            <div class="card-body justify-left">
                                <p>Fecha: <b><input name="descripcion" value="" class="rounded-md pl-2" disabled></b></p>
                                <p>Dirección: <b><input name="ubicacion"  class="rounded-md pl-2"></b></p>
                                @if ($errors->get('ubicacion'))
                                    <span class="text-danger"> {{ $errors->first('ubicacion') }} </span>
                                @endif
                                <p>Precio: <b><input name="precio"  class="rounded-md pl-2"></b></p>
                                @if ($errors->get('precio'))
                                    <span class="text-danger"> {{ $errors->first('precio') }} </span>
                                @endif
                                <p>Valor Unitario: <b><input name="valorunitario" class="rounded-md pl-2" disabled></b></p>
                                @if ($errors->get('valorunitario'))
                                    <span class="text-danger"> {{ $errors->first('valorunitario') }} </span>
                                @endif
                                <p>Superficie: <b><input name="superficie"  class="rounded-md pl-2"></b></p>
                                @if ($errors->get('superficie'))
                                    <span class="text-danger"> {{ $errors->first('superficie') }} </span>
                                @endif
                                <p>Frente: <b><input name="frente"  class="rounded-md pl-2"></b></p>
                                @if ($errors->get('frente'))
                                    <span class="text-danger"> {{ $errors->first('frente') }} </span>
                                @endif
                                <p>Fondo: <b><input name="fondo"  class="rounded-md pl-2"></b></p>
                                @if ($errors->get('fondo'))
                                    <span class="text-danger"> {{ $errors->first('fondo') }} </span>
                                @endif
                                <p>Ubicación GPS: <b><input name="descripcion" value="" class="rounded-md pl-2"></b></p>
                                <p>Departamento: <b>
                                        <select name="departamento_id">
                                            <option>-</option>
                                            @foreach ($departamentos as $departamento)
                                                <option value="{{ $departamento->id }}">{{ $departamento->descripcion }}
                                                </option>
                                            @endforeach
                                        </select></b></p>
                                </b></p>
                                <p>Zona: <b>
                                        <select name="zona_id">
                                            <option>-</option>
                                            @foreach ($zonas as $zona)
                                                <option value="{{ $zona->id }}">{{ $zona->descripcion }}</option>
                                            @endforeach
                                        </select>
                                    </b></p>
                            </div>

                            <div>
                        </form>
                        filtro de antecedentes
                        <table border="1" class="table-responsive">
                            <tr>
                                <td class="px-2">Id</td>
                                <td class="col-2">Departamento</td>
                                <td class="col-2">Zona</td>
                                <td class="col-2">Ubicación</td>
                                <td class="col-1">Precio</td>
                                <td class="col-1">Superficie</td>
                                <td class="col-1">Frente</td>
                                <td class="col-1">Fondo</td>
                                <td class="col-1">Valor Unitario</td>
                                <td class="col-1">Opciones</td>
                            </tr>
                            @foreach($antecedentes as $antecedente)
                                <tr>
                                    <td class="text-center">{{ $antecedente->id }}</td>
                                    <td>{{$antecedente->departamentos['descripcion']}}</td>

                                    <td>{{$antecedente->zonas['descripcion']}}</td>
                                    <td>{{$antecedente->ubicacion}}</td>
                                    <td class="text-right">$ {{ number_format($antecedente->precio,2)}}</td>
                                    <td class="text-right">{{ number_format($antecedente->superficie,2)}}</td>
                                    <td class="text-right">{{ number_format($antecedente->frente,2)}}</td>
                                    <td class="text-right">{{ number_format($antecedente->fondo,2)}}</td>
                                    <td class="text-right">$ {{ number_format($antecedente->precio/$antecedente->superficie,2)}}</td>
                                    <td class="text-right"> <button class="btn btn-warning">Modificar</button></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
