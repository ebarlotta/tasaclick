<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTasacionRequest;
use App\Http\Requests\UpdateTasacionRequest;
use App\Models\Tasacion;

class TasacionController extends Controller
{
    
    public function index()
    {
        $tasaciones = Tasacion::all();
        //dd($tasaciones);
        return view('tasaciones.index', compact('tasaciones'));
    }

    public function create()
    {
        //
    }

    public function store(StoreTasacionRequest $request)
    {
        //
    }

    public function show(Tasacion $tasacion)
    {
        //
    }

    public function edit(Tasacion $tasacion)
    {
        //
    }

    public function update(UpdateTasacionRequest $request, Tasacion $tasacion)
    {
        //
    }

    public function destroy(Tasacion $tasacion)
    {
        //
    }
}
