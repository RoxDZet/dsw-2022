<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVueloRequest;
use App\Http\Requests\UpdateVueloRequest;
use App\Models\Vuelo;
use Illuminate\Http\Request;

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
     ** Show the form for editing the specified resource.
     *Para insertar y editar vuelos usar las siguientes reglas de validación (1 pto)
    *Todos los campos son requeridos
    *La ciudad origen y destino tienen que ser diferentes, y tener un mínimo de 5 caracteres y un máximo de 50.
    *El código de vuelo debe ser exactamente un código de 10 caracteres alfanuméricos.
    *La fecha debe ser mayor que la fecha actual.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $validated = $request->validate([
            'ciudad_origen' => 'required|min:5|max:50|different:ciudad_destino',
            'ciudad_destino' => 'required|min:5|max:50|different:ciudad_origen',
            'codigo_vuelo' => 'required|alpha_num|size:10',
            'fecha' => 'required|date|after:today',
            'hora' => 'required|date_format:H:i',
            'piiloto_id' => 'required|exists:pilotos,id',
        ]);
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
     *Para insertar y editar vuelos usar las siguientes reglas de validación (1 pto)
    *Todos los campos son requeridos
    *La ciudad origen y destino tienen que ser diferentes, y tener un mínimo de 5 caracteres y un máximo de 50.
    *El código de vuelo debe ser exactamente un código de 10 caracteres alfanuméricos.
    *La fecha debe ser mayor que la fecha actual.
     * @param  \App\Models\Vuelo  $vuelo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $validated = $request->validate([
            'ciudad_origen' => 'required|min:5|max:50'|'different:ciudad_destino',
            'ciudad_destino' => 'required|min:5|max:50|different:ciudad_origen',
            'codigo_vuelo' => 'required|regex:/^[a-zA-Z0-9]{10}$/',
            'fecha' => 'required|date|after:today',
            'hora' => 'required|date_format:H:i',
            'piloto_id' => 'required|exists:pilotos,id',
        ]);
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
    public function update(Request $request, $id)
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
