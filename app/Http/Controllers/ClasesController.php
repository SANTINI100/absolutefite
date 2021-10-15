<?php

namespace App\Http\Controllers;

use App\Models\clases;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class ClasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // funcion inderx de calendario
    public function index(){
        $clases=clases::all();
        return view('components.calendario')->with('clases', $clases);
           
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
            'fecha'=>['required'],
            'hora'=>['required'],
            'email'=>['required'],
            'clase'=>['required', 'string','min:3'],
        ]);
        clases::create ([
            'fecha'=>$datos['fecha'],
            'hora'=>$datos['hora'],
            'email'=>$datos['email'],
            'clase'=> $datos['clase'],
        ]);
        return redirect('/calendario');
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
    public function edit(clases $id)
    {
        $clases=clases::find($id->id);
        return view('modulos.calendario')->with('clases', $clases); //
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\clases  $clases
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $clases[0]=clases::findOrFail($id);

        $clases[0]->fecha = $request->input('fecha');
        $clases[0]->hora=$request->input('hora');
        $clases[0]->email=$request->input('email');
        $clases[0]->clase=$request->input('clase');

        $clases[0]->save();

        return redirect('/calendario');
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
