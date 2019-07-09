<?php

namespace App\Http\Controllers;

use App\TipoM;
use Illuminate\Http\Request;

class TipoMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tipom=TipoM::all();
        return view("tipom.index",compact('tipom'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view("Tipom.create");
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
        TipoM::create($request->all());
        return redirect("tipom");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TipoM  $tipoM
     * @return \Illuminate\Http\Response
     */
    public function show(TipoM $tipom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TipoM  $tipoM
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoM $tipom)
    {
        //
        return view("tipom.edit",compact('tipom'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TipoM  $tipoM
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoM $tipom)
    {
        //
        $tipom->update($request->all());
        return redirect("tipom");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipoM  $tipoM
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoM $tipom)
    {
        //
        $tipom->delete();
        return redirect("tipom");
    }
}
