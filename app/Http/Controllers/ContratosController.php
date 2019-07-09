<?php

namespace App\Http\Controllers;

use App\Contratos;
use Illuminate\Http\Request;

class ContratosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $contratos=Contratos::all();
        return view("contratos.index",compact('contratos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("contratos.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Contratos::create($request->all());
        return redirect("contratos");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contratos  $contratos
     * @return \Illuminate\Http\Response
     */
    public function show(Contratos $contratos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contratos  $contratos
     * @return \Illuminate\Http\Response
     */
    public function edit(Contratos $contratos)
    {
        //
        return view("contratos.edit",compact('contratos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contratos  $contratos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contratos $contratos)
    {
        //
        $contratos->update($request->all());
        return redirect("contratos");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contratos  $contratos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contratos $contratos)
    {
        //
        $contratos>delete();
        return redirect("contratos");
    }
}
