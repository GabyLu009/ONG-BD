<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;

class reportes extends Controller
{
    public function index()
    {
        return view('Reportes.index');
    }

    public function generar()
    {
        
        $rep1 = \DB::select('select * from actuacion_pob');
        $view = view ('Reportes.Reporte1', compact('rep1'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('Reporte1'.'.pdf');
    }
    public function generar2()
    {
        
        $rep2 = \DB::select('select * from maximopresupuesto');
        $view = view ('Reportes.Reporte2', compact('rep2'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('Reporte2'.'.pdf');
    }
    public function generar3()
    {
        
        $rep2 = \DB::select('select * from minimopresupuesto');
        $view = view ('Reportes.Reporte2', compact('rep2'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('Reporte2'.'.pdf');
    }
    public function generar4()
    {
        $rep2 = \DB::select('select * from maxinversion');
        $view = view ('Reportes.Reporte3', compact('rep2'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('Reporte3'.'.pdf');
    }
    public function generar5()
    {
        $rep2 = \DB::select('select * from mininversion');
        $view = view ('Reportes.Reporte3', compact('rep2'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('Reporte3'.'.pdf');
    }
    public function generar6()
    {
        $rep22 = \DB::select('select * from proyectos_sede');
        $view = view ('Reportes.Reporte4', compact('rep22'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('Reporte4'.'.pdf');
    }
    public function generar7()
    {
        $rep7 = \DB::select('select * from sedes_dir');
        $view = view ('Reportes.Reporte5', compact('rep7'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('Reporte5'.'.pdf');
    }
}
