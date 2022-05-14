<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAntecedentesRequest;
use App\Http\Requests\UpdateAntecedentesRequest;
use App\Models\Antecedentes;

class AntecedentesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAntecedentesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAntecedentesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Antecedentes  $antecedentes
     * @return \Illuminate\Http\Response
     */
    public function show(Antecedentes $antecedentes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Antecedentes  $antecedentes
     * @return \Illuminate\Http\Response
     */
    public function edit(Antecedentes $antecedentes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAntecedentesRequest  $request
     * @param  \App\Models\Antecedentes  $antecedentes
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAntecedentesRequest $request, Antecedentes $antecedentes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Antecedentes  $antecedentes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Antecedentes $antecedentes)
    {
        //
    }
}
