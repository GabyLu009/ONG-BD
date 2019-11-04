<?php

namespace App\Http\Controllers;
use App\Models\Sede;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SedeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sede = Sede::orderby('idsede')->get();
        return view('Sede.Index',compact('sede'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Sede.Create');
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
        DB::insert("call INSERT_SEDE('$request->identificaciond','$request->idpais','$request->ciudad','$request->direccion','$request->telefono')");
        return redirect('Sede');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $sed = Sede::find($id);
        return view('Sede/Edit',compact('sed'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        DB::update("call UPDATE_SEDE('$request->idsede','$request->identificaciond','$request->idpais','$request->ciudad','$request->direccion','$request->telefono')");
        return redirect('Sede');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DB::delete("call DELETE_SEDE('$id')");
        return redirect('Sede');
    }
}
