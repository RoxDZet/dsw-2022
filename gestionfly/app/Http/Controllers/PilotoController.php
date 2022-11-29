<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePilotoRequest;
use App\Http\Requests\UpdatePilotoRequest;
use App\Models\Piloto;

class PilotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pilotos = Piloto::all();
        return view("pilotos.index", compact("pilotos"));
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
     * @param  \App\Http\Requests\StorePilotoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePilotoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Piloto  $piloto
     * @return \Illuminate\Http\Response
     */
    public function show(Piloto $piloto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Piloto  $piloto
     * @return \Illuminate\Http\Response
     */
    public function edit(Piloto $piloto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePilotoRequest  $request
     * @param  \App\Models\Piloto  $piloto
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePilotoRequest $request, Piloto $piloto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Piloto  $piloto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Piloto $piloto)
    {
        //
    }
}
