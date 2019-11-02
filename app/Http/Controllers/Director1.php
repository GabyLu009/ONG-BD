<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Director;
use Illuminate\Support\Facades\DB;

class Director1 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $director = Director::orderby('identificacion')->get();
        return view('Director.Index',compact('director'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Director.Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::insert("call INSERT_DIRECTOR('$request->identificacion','$request->nombre','$request->apellido1','$request->apellido2')");
        return redirect('Director');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dir = Director::find($id);
        return view('Director/Edit',compact('dir'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::update("call UPDATE_DIRECTOR('$request->identificacion','$request->nombre','$request->apellido1','$request->apellido2')");
        return redirect('Director');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$dir =Director::find($id);
        //$dir->delete();
       
        DB::delete("call DELETE_DIRECTOR('$id')");
        return redirect('Director');
    }
}
