<?php

namespace App\Http\Controllers;

use App\Models\Actuacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActuacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $actuacion = Actuacion::orderby('idactuacion')->get();
        return view('Actuacion.Index',compact('actuacion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Actuacion.Create');
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
        DB::insert("call INSERT_ACTUACION('$request->inversion','$request->descripcion','$request->idpoblacion','$request->codigop')");
        return redirect('Actuacion');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Actuacion  $actuacion
     * @return \Illuminate\Http\Response
     */
    public function show(Actuacion $actuacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Actuacion  $actuacion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $act = Actuacion::find($id);
        return view('Actuacion/Edit',compact('act'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Actuacion  $actuacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actuacion $id)
    {
        //
        DB::update("call UPDATE_ACTUACION('$request->idactuacion','$request->inversion','$request->descripcion','$request->idpoblacion','$request->codigop')");
        return redirect('Actuacion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Actuacion  $actuacion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DB::delete("call DELETE_ACTUACION('$id')");
        return redirect('Actuacion');
    }
}
