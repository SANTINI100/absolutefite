<?php

namespace App\Http\Controllers;

use App\Models\inscripcion;
use App\Models\clases;
use Illuminate\Http\Request;

class InscripcionController extends Controller
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
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\inscripcion  $inscripcion
     * @return \Illuminate\Http\Response
     */
    public function show(inscripcion $inscripcion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\inscripcion  $inscripcion
     * @return \Illuminate\Http\Response
     */
    public function edit(clases $id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\inscripcion  $inscripcion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $clases = $request->id;

        $clase = clases::findOrFail($clases);

        $claseinscrita = new inscripcion;
        $claseinscrita->fecha = $clase->fecha;
        $claseinscrita->hora = $clase->hora;
        $claseinscrita->email = $clase->email;
        $claseinscrita->clase = $clase->clase;
        $claseinscrita->save();
        return redirect('/calendario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\inscripcion  $inscripcion
     * @return \Illuminate\Http\Response
     */
    public function destroy(inscripcion $inscripcion)
    {
        //
    }
}
