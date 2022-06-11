@extends('layouts.adminlte')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h1>Propiedades</h1>
                        <div class="card-body justify-left">
                           Página Antecedentes
                           <a class="float-right" href="{{ route('propiedades.create') }}">
                              <button type="button" class="card-text bg-success text-center rounded-md px-3 mr-1 shadow-lg">Nueva </button>
                           </a>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
