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
      
    <style>
      hr{
        page-break-after: always;
        border: none;
        margin: 0;
        padding: 0;
      }
    </style>

    <title>{{$descargar->n_incidente}}</title>

</head>
<body>
    <img src="imagenes/logo-clinica.png" style="float: right"  alt="Cinque Terre" width="120" height="95"  />
    <h2 align="center"><u>Informe Técnico</u></h2>
<br>
   <div class="container">
    
    <table border="0" cellspacing="0">
    
        <tr>
          <td ><strong>Fecha:</strong></td>
          <td>{{$descargar->fecha}} </td>
        </tr>

        <tr>
            <td width="150"><strong>Usuario Afectado:</strong></td>
            <td class="transformacion1"> {{$descargar->usuario_afectado}} </td>
          </tr>

          <tr>
            <td ><strong>Ubicación:</strong></td>
            <td width="300" class="transformacion1"> {{$descargar->ubicacion_user_afectado}} </td>
          </tr>
          <tr>
            <td><strong>Ticket:</strong></td>
            <td width="150" class="transformacion2"> {{$descargar->n_incidente}} </td>
          </tr>

    </table>
    <br>
    

    <center> <em> <strong> De acuerdo a lo convenido, sírvase recibir nuestra solicitud de evaluación de cambio o upgrade:</strong></em></center>

    <table border="1" align="center" cellspacing="1" width="525">

        <tr align="center" bgcolor="#48C386">
            <td colspan="4"><strong>Datos del Equipo</td>
        </tr>

        <tr>
          <td colspan="4"><strong>Tipo de Dispositivo:</strong> <a class="transformacion2"> {{$descargar->tipo_disposotivo}}</a></td>
        </tr>
  
        <tr>
          <td><strong>Marca:</strong></td>
          <td class="transformacion2"> {{$descargar->marca_dipositivo}} </td>
          <td><strong>Modelo:</strong></td>
          <td class="transformacion1"> {{$descargar->modelo_dispositivo}} </td>
        </tr>
  
        <tr>
          <td><strong>Disco:</strong></td>
          <td class="transformacion2"> {{$descargar->tipo_disco}} </td>
          <td ><strong>Procesador:</strong></td>
          <td class="transformacion1"> {{$descargar->tipo_procesador}} </td>
        </tr>

        <tr>
          <td><strong>Memoria:</strong></td>
          <td class="transformacion2"> {{$descargar->tipo_memoria}} </td>
          <td><strong>Etiqueta CAS:</strong></td>
          <td class="transformacion2"> {{$descargar->CAS}} </td>
        </tr>

        <tr>
          <td><strong>Serial Number:</strong></td>
          <td colspan="3" class="transformacion2"> {{$descargar->n_serial}} </td>
         
       </tr>
     
        
    </table>

    <br>


    <table border="1" align="center" cellspacing="1" width="525">

        <tr align="center" bgcolor="#48C386">
            <td colspan="4"><strong>Análisis Técnico</td>
        </tr>
  
        <tr>
          <td width="120"><strong>Mantención Lógica:</strong></td>
          <td> 
            @if ($descargar->mantecion_logica==NULL)
              No
            @else              
             {{$descargar->mantecion_logica}} 
            @endif
          </td>
          <td><strong>Cambio de HDD:</strong></td>
          <td>
            @if ($descargar->cambio_HDD==NULL)
            No
           @else              
           {{$descargar->cambio_HDD}}
           @endif
         </td>
        </tr>
  
        <tr>
          <td><strong>Manteción Física:</strong></td>
          <td>
            @if ($descargar->mantecion_fisica==NULL)
              No
            @else              
            {{$descargar->mantecion_fisica}} 
            @endif
          </td>
          <td ><strong>Aumento de Memoria:</strong></td>
          <td>
            @if ($descargar->aumento_memoria==NULL)
              No
            @else              
            {{$descargar->aumento_memoria}}
            @endif</td>
        </tr>  

        <tr>
            <td height="50"><strong>Descripción Falla:</strong></td>
            <td colspan="3" class="transformacion1"> {{$descargar->descripcion_falla}}</td>           
        </tr>

        <tr>
            <td height="50"><strong>Acción Inmediata:</strong></td>
            <td colspan="3" class="transformacion1">{{$descargar->accion_inmediata}}</td>           
        </tr>  

        <tr>
            <td height="50"><strong>Diagnóstico:</strong></td>
            <td colspan="3" class="transformacion1">{{$descargar->diagnostico}}</td>           
        </tr>

        <tr>
            <td height="50"><strong>Solución Propuesta:</strong></td>
            <td colspan="3" class="transformacion1"> {{$descargar->solucion_propuesta}} </td>           
        </tr>

        <tr>
            <td height="50"><strong>Otros:</strong></td>
            <td colspan="3" class="transformacion1"> {{$descargar->otros}}</td>           
        </tr>

        
    </table>

    <br><br>
    <table align="center" width="525">

        <tr align="center">
            
            <td> ____________________</td> 
            <td> ____________________</td> 
        </tr>

        <tr align="center">
            
            <td><em>Técnico de Terreno</em></td> 
            <td><em>Supervisor a Cargo</em></td> 
        </tr>

        <tr align="center">
            <td ><strong>{{$descargar->tecnico_terreno}}</strong></td>
            <td ><strong>{{$descargar->supervisor_cargo }}</strong> </td>         
        </tr>

    </table>
   
    @if ($descargar->nombre_imag==NULL)
        
    @else
    <hr> <!-- Salto de página -->
    <table border="2">
      <tr align="center" bgcolor="#48C386">
        <td><h3> Imagen Adjunta</h3></td>
      </tr>
      <tr align="center">
        <td><img src=".\imagenes\imgsubidas\{{$descargar->nombre_imag}}"  width="90%" height="45%"></td>
      </tr>
    </table>
        
    @endif
    

    
    
   </div>


    
</body>
</html>
