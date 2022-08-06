@extends('plantillas/plantilla')
@section('codigo')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style type="text/css"> 
      .transformacion1 { text-transform: capitalize;}   
      .transformacion2 { text-transform: uppercase;}   
      .transformacion3 { text-transform: lowercase;}   
      </style> 
    <title></title>
</head>
<body>
    <h2 align="center"><u>Detalles del Informe</u></h2>
<br>
<br>
   <div class="container">
    
    <table class="table" cellspacing="0">
    
        <tr>
          <td ><strong>Fecha:</strong></td>
          <td>{{$detalle->fecha}} </td>
        </tr>

        <tr>
            <td width="150"><strong>Usuario Afectado:</strong></td>
            <td> {{$detalle->usuario_afectado}} </td>
          </tr>

          <tr>
            <td ><strong>Ubicación:</strong></td>
            <td width="250" class="transformacion1"> {{$detalle->ubicacion_user_afectado}} </td>
          </tr>
          <tr>
            <td><strong>Ticket:</strong></td>
            <td width="250" class="transformacion2"> {{$detalle->n_incidente}} </td>
          </tr>

    </table>
    <br>
    

    <center> <em> <strong> De acuerdo a lo convenido, sírvase recibir nuestra solicitud de evaluación de cambio o upgrade:</strong></em></center>

    <table class="table" align="center">

        <tr align="center" bgcolor="#48C386">
            <td colspan="4"><strong>Datos del Equipo</td>
        </tr>

        <tr>
          <td colspan="4" class="transformacion1"><strong>Tipo de Dispositivo:</strong>  {{$detalle->tipo_disposotivo}}</td>
        </tr>
  
        <tr>
          <td class="transformacion1"><strong>Marca:</strong></td>
          <td class="transformacion2"> {{$detalle->marca_dipositivo}} </td>
          <td><strong>Modelo:</strong></td>
          <td class="transformacion2"> {{$detalle->modelo_dispositivo}} </td>
        </tr>
  
        <tr>
          <td><strong>Disco:</strong></td>
          <td> {{$detalle->tipo_disco}} </td>
          <td ><strong>Procesador:</strong></td>
          <td class="transformacion1"> {{$detalle->tipo_procesador}} </td>
        </tr>

        <tr>
          <td><strong>Memoria:</strong></td>
          <td> {{$detalle->tipo_memoria}} </td>
          <td><strong>Etiqueta CAS:</strong></td>
          <td class="transformacion2"> {{$detalle->CAS}} </td>
        </tr>

        <tr>
          <td><strong>Serial Number:</strong></td>
          <td colspan="3" class="transformacion2"> {{$detalle->n_serial}} </td>
       </tr>
     
        
    </table>

    <br>


    <table class="table" align="center">

        <tr align="center" bgcolor="#48C386">
            <td colspan="4"><strong>Análisis Técnico</td>
        </tr>
  
        <tr>
          <td><strong>Mantención Lógica:</strong></td>
          <td>@if($detalle->mantecion_logica==NULL)
            No
          @else              
           {{$detalle->mantecion_logica}} 
          @endif</td>
          <td><strong>Cambio de HDD:</strong></td>
          <td> @if($detalle->cambio_HDD==NULL)
            No
          @else              
           {{$detalle->cambio_HDD}}
          @endif</td>
        </tr>
  
        <tr>
          <td><strong>Manteción Física:</strong></td>
          <td> @if ($detalle->mantecion_fisica==NULL)
            No
          @else              
           {{$detalle->mantecion_fisica}} 
          @endif</td>
          <td ><strong>Aumento de Memoria:</strong></td>
          <td>@if($detalle->aumento_memoria==NULL)
            No
          @else              
           {{$detalle->aumento_memoria}}
          @endif</td>
        </tr>  

        <tr>
            <td colspan="4"><br></td>
          </tr>  
        
        <tr>
            <td height="50"><strong>Descripción Falla:</strong></td>
            <td colspan="3" align="justify" class="transformacion1"> <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled> {{$detalle->descripcion_falla}}</textarea> </td>           
        </tr>

        <tr>
            <td height="50"><strong>Acción Inmediata:</strong></td>
            <td colspan="3" align="justify" class="transformacion1"><textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled>{{$detalle->accion_inmediata}} </textarea></td>           
        </tr>  

        <tr>
            <td height="50"><strong>Diagnóstico:</strong></td>
            <td colspan="3" align="justify" class="transformacion1"><textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled>{{$detalle->diagnostico}} </textarea></td>           
        </tr>

        <tr>
            <td height="50"><strong>Solución Propuesta:</strong></td>
            <td colspan="3" align="justify" class="transformacion1"><textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled>{{$detalle->solucion_propuesta}} </textarea></td>           
        </tr>

        <tr>
            <td height="50"><strong>Otros:</strong></td>
            <td colspan="3" align="justify" class="transformacion1"><textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled> {{$detalle->otros}} </textarea></td>           
        </tr>

        
    </table>

    <br><br>
    <table align="center" width="500" >

        <tr align="center">
            
            <td> ____________________</td> 
            <td> ____________________</td> 
        </tr>

        <tr align="center">
            
            <td><em>Técnico de Terreno</em></td> 
            <td><em>Supervisor a Cargo</em></td> 
        </tr>

        <tr align="center">
            <td ><strong>{{$detalle->tecnico_terreno}}</strong></td>
            <td ><strong>{{$detalle->supervisor_cargo }}</strong> </td>         
        </tr>
        <br>

    </table>

    <br>
    <br>

    @php
      $editarid =$detalle->id;
    @endphp 

    <center>
    <table>
      <tr>
        <td> <a href="{{route('editar.informacion',$editarid)}}" class="btn btn-danger" type="submit">Editar Datos</a></td>
        <td> <a href="{{route('ver.informe')}}" class="btn btn-dark" type="submit">Volver al Atras</a></td>
      </tr>
    </table>
     <center>
      <br><br><br>


    
   </div>


    
</body>
</html>

    

    
@endsection