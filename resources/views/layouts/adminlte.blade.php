@extends('adminlte::page')

@section('title', 'Dashboard')

{{-- @section('content_header')
    <h1>Dashboard</h1>
@stop --}}
<meta name="csrf-token" content="{{ csrf_token() }}">

@livewireScripts
@livewireStyles

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

{{-- @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop --}}
@stack('modals')


@section('js')
    <script> console.log('Haia!'); </script>
@stop