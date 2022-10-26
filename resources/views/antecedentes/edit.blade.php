@extends('layouts.adminlte')

@section('content')
  <div class="container col-md-12">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            {{-- @if ($mensaje)
                <div class="bg-success">{{ $mensaje}}</div>
            @endif --}}
            <form action="{{ route('antecedentes.store') }}" method="POST">
              @csrf
              <h1>Antecedentes 
              {{-- <a class="float-right" href="{{ route('antecedentes.store') }}"> --}}
                <button type="submit" class="card-text bg-success text-center rounded-md px-3 mr-1 shadow-lg">Actualizar</button>
              </h1>
              {{-- </a> --}}
              <div class="row">
                <div class="card-body justify-left">
                  <p>Fecha: <b><input name="descripcion" type="date" value="{{ date('Y-m-d') }}" class="rounded-md pl-2" disabled></b></p>
                  @if ($errors->get('direccion'))
                    <span class="text-danger"> {{ $errors->first('direccion') }} </span>
                  @endif
                  <p>Dirección: <b><input name="direccion" class="rounded-md pl-2" value="{{ $antecedentes->direccion }}"></b></p>
                  @if ($errors->get('precio'))
                    <span class="text-danger"> {{ $errors->first('precio') }} </span>
                  @endif
                  <p>Precio: <b><input name="precio" class="rounded-md pl-2" value="{{ $antecedentes->precio }}"></b></p>
                  @if ($errors->get('valorunitario'))
                    <span class="text-danger"> {{ $errors->first('valorunitario') }} </span>
                  @endif
                  <p>Valor Unitario: <b><input name="valorunitario" class="rounded-md pl-2" disabled></b></p>
                  @if ($errors->get('superficie'))
                    <span class="text-danger"> {{ $errors->first('superficie') }} </span>
                  @endif
                  <p>Superficie: <b><input name="superficie" class="rounded-md pl-2" value="{{ $antecedentes->superficie }}"></b>
                  </p>
                  @if ($errors->get('frente'))
                    <span class="text-danger"> {{ $errors->first('frente') }} </span>
                  @endif
                  <p>Frente: <b><input name="frente" class="rounded-md pl-2" value="{{$antecedentes->frente}}"></b></p>
                  @if ($errors->get('fondo'))
                    <span class="text-danger"> {{ $errors->first('fondo') }} </span>
                  @endif
                  <p>Fondo: <b><input name="fondo" class="rounded-md pl-2" value="{{ $antecedentes->fondo }}"></b></p>
                  @if ($errors->get('ubicaciongps'))
                    <span class="text-danger"> {{ $errors->first('ubicaciongps') }} </span>
                  @endif
                  <p>Ubicación GPS: <b><input name="ubicaciongps" value="" class="rounded-md pl-2" value="{{ $antecedentes->ubicaciongps }}"></b></p>
                  <p>Departamento: <b>
                      @if ($errors->get('departamento_id'))
                        <span class="text-danger"> {{ $errors->first('departamento_id') }} </span>
                      @endif
                      <select name="departamento_id" class="pl-2">
                        <option value="0">-</option>
                        @foreach ($departamentos as $departamento)
                          <option @if ((int) $antecedentes->departamento_id === $departamento->id) selected @endif value="{{ $departamento->id }}">
                            {{ $departamento->descripcion }}
                          </option>
                          @endforeach
                      </select>
                    </b></p>
                  </b></p>
                  @if ($errors->get('zona_id'))
                    <span class="text-danger"> {{ $errors->first('zona_id') }} </span>
                  @endif
                  <p>Zona:
                    <select name="zona_id" class="pl-2">
                      <option>-</option>
                      @foreach ($zonas as $zona)
                        <option @if ((int) $antecedentes->zona_id === $zona->id) selected @endif value="{{ $zona->id }}">{{ $zona->descripcion }}</option>
                      @endforeach
                    </select>
                  </p>
                </div>
                @if ($errors->get('coeficiente_esquina'))
                  <span class="text-danger"> {{ $errors->first('coeficiente_esquina') }} </span>
                @endif
                <div class="card-body justify-left">
                  <p>Coeficiente de Esquina:
                    <select name="coeficiente_esquina" class="pl-2">
                      <option value="0">-</option>
                      @foreach ($coeficiente_esquinas as $coeficiente_esquina)
                        <option @if ((int) $antecedentes->coeficiente_esquina === $coeficiente_esquina->id) selected @endif
                          value="{{ $coeficiente_esquina->id }}">{{ $coeficiente_esquina->descripcion }}</option>
                      @endforeach
                    </select>
                  </p>
                  @if ($errors->get('coeficiente_forma'))
                    <span class="text-danger"> {{ $errors->first('coeficiente_forma') }} </span>
                  @endif
                  <p>Coeficiente de Forma:
                    <select name="coeficiente_forma" class="pl-2">
                      <option>-</option>
                      @foreach ($coeficiente_formas as $coeficiente_forma)
                        <option @if ((int) $antecedentes->coeficiente_forma === $coeficiente_forma->id) selected @endif value="{{ $coeficiente_forma->id }}">
                          {{ $coeficiente_forma->descripcion }}</option>
                      @endforeach

                    </select>
                  </p>
                  @if ($errors->get('coeficiente_topografia'))
                    <span class="text-danger"> {{ $errors->first('coeficiente_topografia') }} </span>
                  @endif
                  <p>Coeficiente de Topografía:
                    <select name="coeficiente_topografia" class="pl-2">
                      <option>-</option>
                      @foreach ($coeficiente_topografias as $coeficiente_topografia)
                        <option @if ((int) $antecedentes->coeficiente_topografia === $coeficiente_topografia->id) selected @endif
                          value="{{ $coeficiente_topografia->id }}">{{ $coeficiente_topografia->descripcion }}
                        </option>
                      @endforeach

                    </select>
                  </p>
                  @if ($errors->get('coeficiente_pavimentoyservicio'))
                    <span class="text-danger"> {{ $errors->first('coeficiente_pavimentoyservicio') }} </span>
                  @endif
                  <p>Coeficiente de Pavimento y Servivio:
                    <select name="coeficiente_pavimentoyservicio" class="pl-2">
                      <option>-</option>
                      @foreach ($coeficiente_pavimentoyservicios as $coeficiente_pavimentoyservicio)
                        <option @if ((int) $antecedentes->coeficiente_pavimentoyservicio === $coeficiente_pavimentoyservicio->id) selected @endif
                          value="{{ $coeficiente_pavimentoyservicio->id }}">
                          {{ $coeficiente_pavimentoyservicio->descripcion }}</option>
                      @endforeach

                    </select>
                  </p>
                  @if ($errors->get('coeficiente_ubicacion'))
                    <span class="text-danger"> {{ $errors->first('coeficiente_ubicacion') }} </span>
                  @endif
                  <p>Coeficiente de Ubicación:
                    <select name="coeficiente_ubicacion" class="pl-2">
                      <option>-</option>
                      @foreach ($coeficiente_ubicaciones as $coeficiente_ubicacion)
                        <option @if ((int) $antecedentes->coeficiente_ubicacion === $coeficiente_ubicacion->id) selected @endif
                          value="{{ $coeficiente_ubicacion->id }}">{{ $coeficiente_ubicacion->descripcion }}
                        </option>
                      @endforeach

                    </select>
                  </p>
                  @if ($errors->get('coeficiente_oferta'))
                    <span class="text-danger"> {{ $errors->first('coeficiente_oferta') }} </span>
                  @endif
                  <p>Coeficiente de Oferta:
                    <select name="coeficiente_oferta" class="pl-2">
                      <option>-</option>
                      @foreach ($coeficiente_ofertas as $coeficiente_oferta)
                        <option @if ((int) $antecedentes->coeficiente_oferta === $coeficiente_oferta->id) selected @endif value="{{ $coeficiente_oferta->id }}">
                          {{ $coeficiente_oferta->descripcion }}</option>
                      @endforeach

                    </select>
                  </p>
                  @if ($errors->get('coeficiente_formapago'))
                    <span class="text-danger"> {{ $errors->first('coeficiente_formapago') }} </span>
                  @endif
                  <p>Coeficiente de Formas de Pagos:
                    <select name="coeficiente_formapago" class="pl-2">
                      <option>-</option>
                      @foreach ($coeficiente_formapagos as $coeficiente_formapago)
                        <option @if ((int) $antecedentes->coeficiente_formapago === $coeficiente_formapago->id) selected @endif
                          value="{{ $coeficiente_formapago->id }}">{{ $coeficiente_formapago->descripcion }}
                        </option>
                      @endforeach

                    </select>
                  </p>
                  @if ($errors->get('coeficiente_fuenteinformante'))
                    <span class="text-danger"> {{ $errors->first('coeficiente_fuenteinformante') }} </span>
                  @endif
                  <p>Coeficiente Fuente Informante:
                    <select name="coeficiente_fuenteinformante" class="pl-2">
                      <option>-</option>
                      @foreach ($coeficiente_fuenteinformantes as $coeficiente_fuenteinformante)
                        <option @if ((int) $antecedentes->coeficiente_fuenteinformante === $coeficiente_fuenteinformante->id) selected @endif
                          value="{{ $coeficiente_fuenteinformante->id }}">
                          {{ $coeficiente_fuenteinformante->descripcion }}</option>
                      @endforeach

                    </select>
                  </p>
                  @if ($errors->get('coeficiente_actualizacion'))
                    <span class="text-danger"> {{ $errors->first('coeficiente_actualizacion') }} </span>
                  @endif
                  <p>Coeficiente de Actualización:
                    <select name="coeficiente_actualizacion" class="pl-2">
                      <option value="">-</option>
                      @foreach ($coeficiente_actualizaciones as $coeficiente_actualizacion)
                        <option @if ((int) $antecedentes->coeficiente_actualizacion === $coeficiente_actualizacion->id) selected @endif
                          value="{{ $coeficiente_actualizacion->id }}">
                          {{ $coeficiente_actualizacion->descripcion }}</option>
                      @endforeach
                    </select>
                  </p>
                </div>
              </div>

            </form>
            {{-- filtro de antecedentes
            <table border="1" class="table-responsive">
              <tr>
                <td class="px-2">Id</td>
                <td class="col-2">Departamento</td>
                <td class="col-2">Zona</td>
                <td class="col-2">Dirección</td>
                <td class="col-2">Ubicación</td>
                <td class="col-1">Precio</td>
                <td class="col-1">Superficie</td>
                <td class="col-1">Frente</td>
                <td class="col-1">Fondo</td>
                <td class="col-1">Valor Unitario</td>
                <td class="col-1">Opciones</td>
              </tr>
              @foreach ($antecedentes as $antecedente)
                <tr>
                  <td class="text-center">{{ $antecedente->id }}</td>
                  <td>{{ $antecedente->departamentos['descripcion'] }}</td>

                  <td>{{ $antecedente->zonas['descripcion'] }}</td>
                  <td>{{ $antecedente->direccion }}</td>
                  <td>{{ $antecedente->ubicaciongps }}</td>
                  <td class="text-right">$ {{ number_format($antecedente->precio, 2) }}</td>
                  <td class="text-right">{{ number_format($antecedente->superficie, 2) }}</td>
                  <td class="text-right">{{ number_format($antecedente->frente, 2) }}</td>
                  <td class="text-right">{{ number_format($antecedente->fondo, 2) }}</td>
                  <td class="text-right">$ {{ number_format($antecedente->precio / $antecedente->superficie, 2) }}</td>
                  <td class="text-right"> <a href="{{ route('antecedentes.edit', $antecedente->id) }}"> <button
                        class="btn btn-warning">Modificar</button></a></td>
                </tr>
              @endforeach
            </table> --}}
          </div>

        </div>
      </div>
    </div>
  </div>
  </div>
@endsection
