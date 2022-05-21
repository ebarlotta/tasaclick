<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComitenteRequest;
use App\Http\Requests\UpdateComitenteRequest;
use App\Models\Comitente;

class ComitenteController extends Controller
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
     * @param  \App\Http\Requests\StoreComitenteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComitenteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comitente  $comitente
     * @return \Illuminate\Http\Response
     */
    public function show(Comitente $comitente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comitente  $comitente
     * @return \Illuminate\Http\Response
     */
    public function edit(Comitente $comitente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateComitenteRequest  $request
     * @param  \App\Models\Comitente  $comitente
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComitenteRequest $request, Comitente $comitente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comitente  $comitente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comitente $comitente)
    {
        //
    }
}
