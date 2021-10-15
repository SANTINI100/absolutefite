<?php

namespace App\Http\Controllers;

use App\Models\Entrenador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class EntrenadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // funcion inderx de calendario
    public function index()
    {
        return view('components.entrenadores');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // funcion para crear una clase
    public function store(Request $request)
    {
        
        $datos =request()->validate([
            'name'=>['required', 'string', 'max:255'],
            'email'=>['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'=>['required', 'string', 'min:8', 'confirmed'],
        ]);
        Entrenador::create ([
            'name' => $datos['name'],
            'email' => $datos['email'],
            'password' => Hash::make($datos['password']),
            'rol'=>'Entrenador',
        ]);
        return redirect('/entrenador');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\clases  $clases
     * @return \Illuminate\Http\Response
     */
    public function show(clases $clases)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\clases  $clases
     * @return \Illuminate\Http\Response
     */
    public function edit(clases $clases)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\clases  $clases
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, clases $clases)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\clases  $clases
     * @return \Illuminate\Http\Response
     */
    // funcion para eliminar clases
    public function destroy($id)
    {
        DB::table('clases')->whereId($id)->delete();
        return redirect('/calendario');
    }
}