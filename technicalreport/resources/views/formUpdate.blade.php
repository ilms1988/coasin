@extends('plantillas/plantilla')
@section('codigo')



<h1 class="text-center">Editar Campos para Informe</h1>
@if (session('mensaje'))
<div class="alert alert-dark alert-dismissible fade show container" role="alert">
    @php
    $detalle=$update->id;
        
    @endphp 
    <META HTTP-EQUIV="REFRESH" CONTENT="2;URL={{route('detalle.pdf',$detalle)}}">
    <strong>Datos Actualizados..!</strong>  Hacer Click en el enlace para descargar Informe<a href="{{route('descargar.pdf',$update->id)}}" class="alert-link"> {{$update->n_incidente}}</a>.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
    
@endif


<form method="POST" action="{{route('crear.update',$update->id)}}">
    @method('PUT')

    @csrf
<div class="container">

    <div class="row g-2 py-3">
        <div class="col-4">
          <div><strong>FECHA: </strong> @php $hoy = date("d-m-Y"); echo $hoy; @endphp
            <input type="hidden" name="fechaInforme" value="{{$hoy}} ">
        </div>
    </div>

</div>


<div class="container py-3 border bg-light rounded">


    <h5 class="text-decoration-underline">Datos del Usario Afectado</h5>
          
            <div class="row g-2 py-2">
              <div class="col-6">
                <div class="p-3 border bg-light"><label for="exampleFormControlInput1" class="form-label"><strong>Usuario:</strong></label>
                    <input type="text" name="nombre_apellido" class="form-control" id="exampleFormControlInput1" value="{{$update->usuario_afectado}}">
                </div>
              </div>
              <div class="col-6">
                <div class="p-3 border bg-light"><label for="exampleFormControlInput1" class="form-label"><strong>Ubicación:</strong></label>
                    <input type="text" name="ubicacion" class="form-control" id="exampleFormControlInput1" value="{{$update->ubicacion_user_afectado}}">
                </div>
              </div>
              <div class="col-6">
                <div class="p-3 border bg-light"><label for="exampleFormControlInput1" class="form-label"><strong>Ticket:</strong></label>
                    <input type="text" name="Ticket" class="form-control transformacion2" id="exampleFormControlInput1" value="{{$update->n_incidente}}">
                </div>
              </div>
              
            </div>


            <h5 class="text-decoration-underline py-3">Datos del Equipo</h5>


            <div class="row row-cols-4">
                <div class="col"><label for="exampleFormControlInput1" class="form-label"><strong>Tipo dispositivo:</strong></label>
                    <input type="text" name="tipo_didpositivo" class="form-control transformacion2" id="exampleFormControlInput1"  value="{{$update->tipo_disposotivo}}"></div>
                <div class="col"><label for="exampleFormControlInput1" class="form-label"><strong>Marca:</strong></label>
                    <input type="text" name="Marca" class="form-control transformacion2" id="exampleFormControlInput1" value="{{$update->marca_dipositivo}}"></div>
                <div class="col"><label for="exampleFormControlInput1" class="form-label"><strong>Disco:</strong></label>
                    <input type="text" name="disco" class="form-control transformacion2" id="exampleFormControlInput1" value="{{$update->tipo_disco}}"></div>
                <div class="col"><label for="exampleFormControlInput1" class="form-label"><strong>Memoria:</strong></label>
                    <input type="text" name="memoria" class="form-control transformacion2" id="exampleFormControlInput1"value="{{$update->tipo_memoria}}"></div>
            </div>

            <div class="row row-cols-4">
                <div class="col"><label for="exampleFormControlInput1" class="form-label"><strong>Serial Number:</strong></label>
                    <input name="sarial_number" type="text" class="form-control transformacion2" id="exampleFormControlInput1" value="{{$update->n_serial}}"></div>
                <div class="col"><label for="exampleFormControlInput1" class="form-label"><strong>Modelo:</strong></label>
                    <input type="text" name="modelo" class="form-control transformacion1" id="exampleFormControlInput1" value="{{$update->modelo_dispositivo}}"></div>
                <div class="col"><label for="exampleFormControlInput1" class="form-label"><strong>Porcesador:</strong></label>
                    <input type="text" name="procesador" class="form-control transformacion1" id="exampleFormControlInput1" value="{{$update->tipo_procesador}}"></div>
                <div class="col"><label for="exampleFormControlInput1" class="form-label"><strong>Etiqueta CAS:</strong></label>
                    <input type="text" name="cas" class="form-control transformacion2" id="exampleFormControlInput1" value="{{$update->CAS}}"></div>
            </div>

            <h5 class="text-decoration-underline py-4">Análisis Técnico</h5>


        
            <br>

            <div class="row py-2">
                <div class="col">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label"><strong>Descripción de la Falla</strong></label>
                        <textarea class="form-control transformacion1" name="falla" id="exampleFormControlTextarea1" rows="3">{{$update->descripcion_falla}}</textarea>
                    </div>                 
                </div>
            </div>


            <div class="row py-4">
                <div class="col">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label"><strong>Acción Inmediata:</strong></label>
                        <textarea class="form-control transformacion1" name="inmediata" id="exampleFormControlTextarea1" rows="3">{{$update->accion_inmediata}}</textarea>
                    </div>                 
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label"><strong>Diagnóstico:</strong></label>
                        <textarea class="form-control transformacion1" name="diagnostico" id="exampleFormControlTextarea1" rows="3">{{$update->diagnostico}}</textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label"><strong>Solución propuesta:</strong></label>
                        <textarea class="form-control transformacion1" name="propuesta" id="exampleFormControlTextarea1" rows="3">{{$update->solucion_propuesta}} </textarea>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label"><strong>Otros:</strong></label>
                        <textarea class="form-control transformacion1" name="otros" id="exampleFormControlTextarea1" rows="3">{{$update->otros}}</textarea>
                    </div>
                </div>
            </div>


           

                <div class="row justify-content-center py-3"> 
                    <div class="col-4 text-center">
                        <label for="exampleDataList" class="form-label"><strong>Técnico de Terreno</strong></label>
                        <input class="form-control" value="{{$update->tecnico_terreno}}" name="tecnicot" list="Option1" id="List1" placeholder="Escribir para Buscar..">
                        <datalist id="Option1">
                            @foreach ($tecnicos as $tec)
                            <option value="{{$tec->nombre}}">                                                       
                            @endforeach
                        </datalist>
                    </div>
                    <div class="col-4 text-center">
                        <label for="exampleDataList" class="form-label"><strong>Supervisor a Cargo</strong></label>
                        <input class="form-control" value="{{$update->supervisor_cargo}}" name="coordinadort" list="Option2" id="List2" placeholder="Escribir para Buscar...">
                        <datalist id="Option2">
                            @foreach ($coordinador as $coord)
                            <option value="{{$coord->nombre_apellido}}">                                                       
                            @endforeach
                        </datalist>
                    </div>
                  </div>
               
        




            <div class="d-grid gap-2 col-6 mx-auto py-3 ">
                <button class="btn btn-outline-danger" type="submit">Actualizar Datos</button>
            </div>

            </form>
</div>
<br>
<br>

    
@endsection