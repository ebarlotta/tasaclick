<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTasadorRequest;
use App\Http\Requests\UpdateTasadorRequest;
use App\Models\Tasador;

class TasadorController extends Controller
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
     * @param  \App\Http\Requests\StoreTasadorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTasadorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tasador  $tasador
     * @return \Illuminate\Http\Response
     */
    public function show(Tasador $tasador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tasador  $tasador
     * @return \Illuminate\Http\Response
     */
    public function edit(Tasador $tasador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTasadorRequest  $request
     * @param  \App\Models\Tasador  $tasador
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTasadorRequest $request, Tasador $tasador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tasador  $tasador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tasador $tasador)
    {
        //
    }
}
