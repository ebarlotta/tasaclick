<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTasacionRequest;
use App\Http\Requests\UpdateTasacionRequest;
use App\Models\Tasacion;

class TasacionController extends Controller
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
     * @param  \App\Http\Requests\StoreTasacionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTasacionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tasacion  $tasacion
     * @return \Illuminate\Http\Response
     */
    public function show(Tasacion $tasacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tasacion  $tasacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Tasacion $tasacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTasacionRequest  $request
     * @param  \App\Models\Tasacion  $tasacion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTasacionRequest $request, Tasacion $tasacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tasacion  $tasacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tasacion $tasacion)
    {
        //
    }
}
