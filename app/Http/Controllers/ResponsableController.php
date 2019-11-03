<?php

namespace App\Http\Controllers;

use App\Models\Responsable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResponsableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $responsable = Responsable::orderby('identificacion')->get();
        return view('Responsable.Index',compact('responsable'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Responsable.Create');
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
        DB::insert("call INSERT_RESPONSABLE('$request->identificacion','$request->nombre','$request->apellido1','$request->apellido2')");
        return redirect('Responsable');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Responsable  $responsable
     * @return \Illuminate\Http\Response
     */
    public function show(Responsable $responsable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Responsable  $responsable
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $res = Responsable::find($id);
        return view('Responsable/Edit',compact('res'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Responsable  $responsable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Responsable $responsable)
    {
        //
       DB::update("call UPDATE_RESPONSABLE('$request->identificacion','$request->nombre','$request->apellido1','$request->apellido2')");
        return redirect('Responsable');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Responsable  $responsable
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DB::delete("call DELETE_RESPONSABLE('$id')");
        return redirect('Responsable');
    }
}
