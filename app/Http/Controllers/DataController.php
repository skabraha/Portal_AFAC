<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\DatasExport;
use App\Imports\DatasImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Data;
use PDF;

class DataController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function index()
    {
        $datas = Data::get();
  
        return view('data', compact('datas'));
    }
        
    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new DatasExport, 'AFACNOM_15012022_O_01_1334.csv');
    }
       
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new DatasImport,request()->file('file'));
        return back();
    }
    //sirve
    /*public function imprimir()
    {
        $pdf = \PDF::loadView('nomina_receipt');
        return $pdf->download('ejemplo.pdf');
    }*/

    public function imprimir()
    {
        $pdf = \PDF::loadView('nomina_receipt');
        return $pdf->setPaper('A4','landscape')->download('Recibo de nomina.pdf');
    }
}