<?php

namespace App\Http\Controllers;

use App\Models\coordinador;
use App\Models\fichaDato;
use App\Models\Infome;
use App\Models\tecnico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Ramsey\Uuid\v1;

class pagesController extends Controller
{
    


    public function crear(){
        $tecnicos = tecnico::all();
        $coordinador = coordinador::all();

        return view('crearInforme', compact('tecnicos','coordinador'));

    }


    public function store(Request $request){

      if (isset($request->imagen)) {

        // ------------- Introduce imagen individual en tabla BD ------- 
            if( $imagen=$request->file('imagen')){
               $nombreimg=time().'_'.$imagen->getClientOriginalName();
                $imagen->move('imagenes/imgsubidas', $nombreimg);
            }
            
            $incidente=$request->Ticket;
            $incidente_m = strtoupper($incidente);
            


        $datos = new fichaDato;
        $datos->fecha=$request->fechaInforme;
        $datos->usuario_afectado=$request->nombre_apellido;
        $datos->ubicacion_user_afectado=$request->ubicacion;
        $datos->n_incidente=$incidente_m;
        $datos->tipo_disposotivo=$request->tipo_didpositivo;
        $datos->marca_dipositivo=$request->Marca;
        $datos->tipo_disco=$request->disco;
        $datos->tipo_memoria=$request->memoria;
        $datos->n_serial=$request->sarial_number;
        $datos->modelo_dispositivo=$request->modelo;
        $datos->tipo_procesador=$request->procesador;
        $datos->CAS=$request->cas;
        $datos->mantecion_logica=$request->ml;
        $datos->mantecion_fisica=$request->mf;
        $datos->cambio_HDD=$request->ch;
        $datos->aumento_memoria=$request->am;
        $datos->descripcion_falla=$request->falla;
        $datos->accion_inmediata=$request->inmediata;
        $datos->diagnostico=$request->diagnostico;
        $datos->solucion_propuesta=$request->propuesta;
        $datos->otros=$request->otros;
        $datos->tecnico_terreno=$request->tecnicot;
        $datos->supervisor_cargo=$request->coordinadort;
        $datos->nombre_imag=$nombreimg;

        $datos->save();


      /*  $inf = new Infome;
        $inf->nombre=$request->Ticket;
        $inf->save();*/

        return back()->with('mensaje','Informacion agregada');
    }else{

        $incidente=$request->Ticket;
            $incidente_m1 = strtoupper($incidente);


        $datos = new fichaDato;
        $datos->fecha=$request->fechaInforme;
        $datos->usuario_afectado=$request->nombre_apellido;
        $datos->ubicacion_user_afectado=$request->ubicacion;
        $datos->n_incidente=$incidente_m1;
        $datos->tipo_disposotivo=$request->tipo_didpositivo;
        $datos->marca_dipositivo=$request->Marca;
        $datos->tipo_disco=$request->disco;
        $datos->tipo_memoria=$request->memoria;
        $datos->n_serial=$request->sarial_number;
        $datos->modelo_dispositivo=$request->modelo;
        $datos->tipo_procesador=$request->procesador;
        $datos->CAS=$request->cas;
        $datos->mantecion_logica=$request->ml;
        $datos->mantecion_fisica=$request->mf;
        $datos->cambio_HDD=$request->ch;
        $datos->aumento_memoria=$request->am;
        $datos->descripcion_falla=$request->falla;
        $datos->accion_inmediata=$request->inmediata;
        $datos->diagnostico=$request->diagnostico;
        $datos->solucion_propuesta=$request->propuesta;
        $datos->otros=$request->otros;
        $datos->tecnico_terreno=$request->tecnicot;
        $datos->supervisor_cargo=$request->coordinadort;

        $datos->save();

        return back()->with('mensaje','Informacion agregada');
    }
        
        //return redirect()->action([pagesController::class,'imprimir']); Redireciona al contolador.
        


    }


    public function ver(){

        $visualizar = fichaDato::select('*')->orderBy('id','desc')->paginate(10);

        return view('verInformes',compact('visualizar'));

    }


    public function verinfpdf($id){
        $detalle = fichaDato::findOrFail($id);
        return view('detalles', compact('detalle'));
       
       //return redirect()->back();
    
    }

    public function pdfdescargar($id){
        $descargar = fichaDato::findOrFail($id);
        $pdf = \PDF::loadView('descargarPdf',compact('descargar'));
        
        //return $pdf->download('ejemplo.pdf'); //descargar
       return $pdf->stream('Informe_Tecnico_'.$descargar->n_incidente.'.pdf'); //ver
        
 
       // return redirect()->action([pagesController::class,'ver']);
    }



    public function imprimir(){
       $datos = fichaDato::all();
       $pdf = \PDF::loadView('ejemplo',compact('datos'));
       
       return $pdf->download('ejemplo.pdf'); //descargar
      // return $pdf->stream('ejemplo.pdf'); //ver
       

       //return redirect()->action([pagesController::class,'crear']);
   }


   public function updateinf($id){
    $update = fichaDato::findOrFail($id);
    $tecnicos = tecnico::all();
    $coordinador = coordinador::all();
    return view('formUpdate', compact('update','tecnicos','coordinador'));

   }


   public function update(Request $request, $id){
    $updatedato = fichaDato::findOrFail($id);

    $incidente=$request->Ticket;
    $incidente_m = strtoupper($incidente);

        $updatedato->fecha=$request->fechaInforme;
        $updatedato->usuario_afectado=$request->nombre_apellido;
        $updatedato->ubicacion_user_afectado=$request->ubicacion;
        $updatedato->n_incidente=$incidente_m;
        $updatedato->tipo_disposotivo=$request->tipo_didpositivo;
        $updatedato->marca_dipositivo=$request->Marca;
        $updatedato->tipo_disco=$request->disco;
        $updatedato->tipo_memoria=$request->memoria;
        $updatedato->n_serial=$request->sarial_number;
        $updatedato->modelo_dispositivo=$request->modelo;
        $updatedato->tipo_procesador=$request->procesador;
        $updatedato->CAS=$request->cas;
        $updatedato->descripcion_falla=$request->falla;
        $updatedato->accion_inmediata=$request->inmediata;
        $updatedato->diagnostico=$request->diagnostico;
        $updatedato->solucion_propuesta=$request->propuesta;
        $updatedato->otros=$request->otros;
        $updatedato->tecnico_terreno=$request->tecnicot;
        $updatedato->supervisor_cargo=$request->coordinadort;

        $updatedato->save();

        return back()->with('mensaje','Informacion agregada');

   }


   public function buscar(Request $request){

    $buscar = trim($request->get('buscar'));
    $datos =DB::table('ficha_datos')
    ->select('id','n_incidente','usuario_afectado','descripcion_falla','tecnico_terreno','fecha')
    ->where('n_incidente','LIKE','%'.$buscar.'%')
    ->orWhere('tecnico_terreno','LIKE','%'.$buscar.'%')
    ->orWhere('descripcion_falla','LIKE','%'.$buscar.'%')
    ->orWhere('usuario_afectado','LIKE','%'.$buscar.'%')
    ->orWhere('CAS','LIKE','%'.$buscar.'%')
    ->orderBy('id','asc')
    ->paginate(10);

    return view('buscador', compact('datos','buscar'));


   }

   
}