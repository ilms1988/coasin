@extends('plantillas/plantilla')
@section('codigo')



<h1 class="text-center">Elaboración de Informe Técnico</h1>
@if (session('mensaje'))
<div  class="alert alert-success alert-dismissible fade show container" role="alert">
    <strong>Genial!</strong> Los Datos Se Han Guardado Correctamente. Hacer Click en el enlace para descargar Informe<a href="{{route('ver.informe')}}" class="alert-link"> Lista de Informes</a>.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
    
@endif


<form method="POST" action="{{route('crear.store')}}" enctype="multipart/form-data">


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
                    <input type="text" required name="nombre_apellido" class="form-control" id="exampleFormControlInput1" placeholder="Nombres y Apellidos">
                </div>
              </div>
              <div class="col-6">
                <div class="p-3 border bg-light"><label for="exampleFormControlInput1" class="form-label"><strong>Ubicación:</strong></label>
                    <input type="text" required name="ubicacion" class="form-control transformacion1" id="exampleFormControlInput1" placeholder="Piso x/Torre xxxxx /Oficina-pasillo-Unidad/ xxxxx">
                </div>
              </div>
              <div class="col-6">
                <div class="p-3 border bg-light"><label for="exampleFormControlInput1" class="form-label"><strong>Ticket:</strong></label>
                    <input type="text" required name="Ticket" class="form-control transformacion2" id="exampleFormControlInput1" placeholder="INCxxxxx/ TASKxxxxx">
                </div>
              </div>
              
            </div>


            <h5 class="text-decoration-underline py-3">Datos del Equipo</h5>


            <div class="row row-cols-4">
                <div class="col"><label for="exampleFormControlInput1" class="form-label"><strong>Tipo dispositivo:</strong></label>
                    <input type="text" required name="tipo_didpositivo" class="form-control" id="exampleFormControlInput1" placeholder="Computador/Impresora"></div>
                <div class="col"><label for="exampleFormControlInput1" class="form-label"><strong>Marca:</strong></label>
                    <input type="text" required name="Marca" class="form-control transformacion2" id="exampleFormControlInput1" placeholder="DELL"></div>
                <div class="col"><label for="exampleFormControlInput1" class="form-label"><strong>Disco:</strong></label>
                    <input type="text" required name="disco" class="form-control transformacion2" id="exampleFormControlInput1" placeholder="SSD 240 GB"></div>
                <div class="col"><label for="exampleFormControlInput1 transformacion2" class="form-label"><strong>Memoria:</strong></label>
                    <input type="text" required name="memoria" class="form-control" id="exampleFormControlInput1" placeholder="8 GB"></div>
            </div>

            <div class="row row-cols-4">
                <div class="col"><label for="exampleFormControlInput1" class="form-label"><strong>Serial Number:</strong></label>
                    <input name="sarial_number" required type="text" class="form-control" id="exampleFormControlInput1" placeholder="602KBY1"></div>
                <div class="col"><label for="exampleFormControlInput1" class="form-label"><strong>Modelo:</strong></label>
                    <input type="text" required name="modelo" class="form-control" id="exampleFormControlInput1" placeholder="OptiPlex 9020 AIO"></div>
                <div class="col"><label for="exampleFormControlInput1" class="form-label"><strong>Procesador:</strong></label>
                    <input type="text" required name="procesador" class="form-control" id="exampleFormControlInput1" placeholder="Intel(R) Core(TM) i5-4570S"></div>
                <div class="col"><label for="exampleFormControlInput1" class="form-label"><strong>Etiqueta CAS:</strong></label>
                    <input type="text" required name="cas" class="form-control transformacion2" id="exampleFormControlInput1" placeholder="CAS66021"></div>
            </div>

            <h5 class="text-decoration-underline py-4">Análisis Técnico</h5>


            <div class="row row-cols-4">
                <div class="col">
                    <div class="form-check form-switch">
                        <input class="form-check-input" name="ml" value="Si" type="checkbox" role="switch" id="Swit1">
                        <label class="form-check-label" for="flexSwitchCheckDefault"><strong>Mantención lógica</strong></label>
                      </div>
                    </div>
                <div class="col">
                    <div class="form-check form-switch">
                        <input class="form-check-input" name="mf" value="Si" type="checkbox" role="switch" id="Swit2">
                        <label class="form-check-label" for="flexSwitchCheckDefault"><strong>Mantención Física</strong></label>
                      </div>
                    </div>
                <div class="col">
                    <div class="form-check form-switch">
                        <input class="form-check-input" name="ch" value="Si" type="checkbox" role="switch" id="Swit3">
                        <label class="form-check-label" for="flexSwitchCheckDefault"><strong>Cambio de HDD</strong></label>
                      </div>
                    </div>
                <div class="col">
                    <div class="form-check form-switch">
                        <input class="form-check-input" name="am" value="Si" type="checkbox" role="switch" id="Swit4">
                        <label class="form-check-label" for="flexSwitchCheckDefault"><strong>Aumento de Memoria</strong></label>
                      </div>
                    </div>
            </div>
            <br>

            <div class="row py-2">
                <div class="col">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label"><strong>Descripción de la Falla</strong></label>
                        <textarea required class="form-control" name="falla" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>                 
                </div>
            </div>


            <div class="row py-4">
                <div class="col">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label"><strong>Acción Inmediata:</strong></label>
                        <textarea required class="form-control" name="inmediata" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>                 
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label"><strong>Diagnóstico:</strong></label>
                        <textarea required class="form-control" name="diagnostico" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label"><strong>Solución propuesta:</strong></label>
                        <textarea required class="form-control" name="propuesta" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label"><strong>Otros:</strong></label>
                        <textarea required class="form-control" name="otros" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
            </div>

            <table>
                <tr>
                    <td>
                        <div class="mb-3">
                            <label for="formFile" class="form-label"><strong>Subir Imágen</strong></label>
                            <input class="form-control bg-secondary text-white" type="file"  id="formFile" name="imagen" accept="image/*">
                          </div>
                      
                    </td>
                </tr>
            </table>


           

                <div class="row justify-content-center py-3"> 
                    <div class="col-4 text-center">
                        <label for="exampleDataList" class="form-label"><strong>Técnico de Terreno</strong></label>
                        <input required class="form-control" name="tecnicot" list="Option1" id="List1" placeholder="Escribir para Buscar..">
                        <datalist id="Option1">
                            @foreach ($tecnicos as $tec)
                            <option value="{{$tec->nombre}}">                                                       
                            @endforeach
                        </datalist>
                    </div>
                    <div class="col-4 text-center">
                        <label for="exampleDataList" class="form-label"><strong>Supervisor a Cargo</strong></label>
                        <input required class="form-control" name="coordinadort" list="Option2" id="List2" placeholder="Escribir para Buscar...">
                        <datalist id="Option2">
                            @foreach ($coordinador as $coord)
                            <option value="{{$coord->nombre_apellido}}">                                                       
                            @endforeach
                        </datalist>
                    </div>
                  </div>
                @csrf
        




            <div class="d-grid gap-2 col-6 mx-auto py-3 ">
                <button class="btn btn-outline-success" type="submit">Guardar y Generar Informe</button>
            </div>

            </form>
</div>
<br>
<br>

    
@endsection