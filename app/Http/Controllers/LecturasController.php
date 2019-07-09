<?php

namespace App\Http\Controllers;

use App\Lecturas;
use Illuminate\Http\Request;

class LecturasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $lecturas=Lecturas::all();
        return view("lecturas.index",compact('lecturas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("lecturas.create");
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
        $lectura=array("descripcion_f"=>$request->,
        );
        Formatos::create($formato);
        return redirect("formatos");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lecturas  $lecturas
     * @return \Illuminate\Http\Response
     */
    public function show(Lecturas $lecturas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lecturas  $lecturas
     * @return \Illuminate\Http\Response
     */
    public function edit(Lecturas $lecturas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lecturas  $lecturas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lecturas $lecturas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lecturas  $lecturas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lecturas $lecturas)
    {
        //
    }
}
