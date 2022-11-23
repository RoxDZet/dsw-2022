<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePasajeRequest;
use App\Http\Requests\UpdatePasajeRequest;
use App\Models\Pasaje;

class PasajeController extends Controller
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
     * @param  \App\Http\Requests\StorePasajeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePasajeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pasaje  $pasaje
     * @return \Illuminate\Http\Response
     */
    public function show(Pasaje $pasaje)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pasaje  $pasaje
     * @return \Illuminate\Http\Response
     */
    public function edit(Pasaje $pasaje)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePasajeRequest  $request
     * @param  \App\Models\Pasaje  $pasaje
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePasajeRequest $request, Pasaje $pasaje)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pasaje  $pasaje
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pasaje $pasaje)
    {
        //
    }
}
