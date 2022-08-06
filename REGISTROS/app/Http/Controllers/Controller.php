<?php

namespace App\Http\Controllers;

use App\Models\insumos;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function vistageneral(){
        $tablaview = insumos::all();

                return view('vistaInsumo', compact('tablaview'));
    }


    public function ingresoinsumosstock(){

        return view('ingresoInsumos');



    }


   // public function tabla(){

        //$insumos = Insumo::orderBy('id', 'desc')->get();

       // return view('insertInsumos',compact('insumos'));
   
  //  }


}
