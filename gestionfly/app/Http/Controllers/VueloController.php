<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVueloRequest;
use App\Http\Requests\UpdateVueloRequest;
use App\Models\Vuelo;

class VueloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vuelos = Vuelo::all();
        return view("vuelos.index", compact("vuelos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("vuelos.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVueloRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVueloRequest $request)
    {
        $datos = $request->all();
        //$datos["f_nacimiento"] = Carbon::createFromFormat("d/m/Y", $datos["f_nacimiento"]);
        Vuelo::create($datos);
        return redirect("/vuelos");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vuelo  $vuelo
     * @return \Illuminate\Http\Response
     */
    public function show(Vuelo $vuelo)
    {
        return view("vuelos.show", compact("vuelo"));
    }

    /**
     * Make a PDF file with the list of all the students.
     *
     * @param  \App\Models\Vuelo  $vuelo
     * @return \Illuminate\Http\Response
     */
    public function listadoPdf(){
        $vuelos = Vuelo::all();
        $pdf = \PDF::loadView("vuelos.listado_pdf",compact("vuelos"));

        return $pdf->stream('listado.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vuelo  $vuelo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vuelo = Vuelo::find($id);
        return view("vuelos.edit", compact("vuelo"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVueloRequest  $request
     * @param  \App\Models\Vuelo  $vuelo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVueloRequest $request, Vuelo $vuelo, $id)
    {
        $vuelo = Vuelo::find($id);
        $vuelo->update($request->all());
        return redirect("/vuelos");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vuelo  $vuelo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vuelo = Vuelo::find($id);
        $vuelo->delete();
    }
}
