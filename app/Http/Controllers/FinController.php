<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFinRequest;
use App\Http\Requests\UpdateFinRequest;
use App\Models\Fin;

class FinController extends Controller
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
     * @param  \App\Http\Requests\StoreFinRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFinRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fin  $fin
     * @return \Illuminate\Http\Response
     */
    public function show(Fin $fin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fin  $fin
     * @return \Illuminate\Http\Response
     */
    public function edit(Fin $fin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFinRequest  $request
     * @param  \App\Models\Fin  $fin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFinRequest $request, Fin $fin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fin  $fin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fin $fin)
    {
        //
    }
}
