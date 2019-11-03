<?php

namespace App\Http\Controllers;

use App\Models\Poblacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PoblacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $poblacion = Poblacion::orderby('idpoblacion')->get();
        return view('Poblacion.Index',compact('poblacion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Poblacion.Create');
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
       DB::insert("call INSERT_POBLACION('$request->numerohabitantes','$request->nombre','$request->idpais')");
        return redirect('Poblacion');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Poblacion  $poblacion
     * @return \Illuminate\Http\Response
     */
    public function show(Poblacion $poblacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Poblacion  $poblacion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $pob = Poblacion::find($id);
        return view('Poblacion/Edit',compact('pob'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Poblacion  $poblacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Poblacion $poblacion)
    {
        //
        DB::update("call UPDATE_POBLACION('$request->idpoblacion','$request->numerohabitantes','$request->nombre','$request->idpais')");
        return redirect('Poblacion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Poblacion  $poblacion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DB::delete("call DELETE_POBLACION('$id')");
        return redirect('Poblacion');
    }
}
