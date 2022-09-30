<?php

namespace Laradex\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ReporteController extends Controller
{
       public function index()
    {  $info = $this->getaData();
        return view("pdf.reporte")->with('info',$info);
    }


    public function getaData(){

        $info = DB::table('pokemon')
        ->where('id_trainer','5');
        return $info;

    }
    function pdf(){
      $pdf =  \App::make('dompdf.wrapper');
    }
}
