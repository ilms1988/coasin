@extends('plantillas/plantilla')
@section('codigo')

<div class="container py-5">
  <h1 class="text-center">Listado de Informes</h1>
  <br>
  <br>


    <table class="table table-striped table-hover">
        <thead class="table-light">
            <tr align="center">
                <th scope="col">Incidente/Task</th>
                <th scope="col">Usuario Afectado</th>
                <th scope="col">Descripción</th>
                <th scope="col-sm-3">Técnico Asignado</th>
                <th scope="col">Fecha</th>
                <th scope="col">Descargar</th>
                
              </tr>
        </thead>
        <tbody>
            @foreach ($visualizar as $verinfo)
            <tr>
                <th scope="row" class="transformacion2"><a href="{{route('detalle.pdf',$verinfo)}}">{{$verinfo->n_incidente}}</a></th>
                <td class="transformacion1">{{$verinfo->usuario_afectado}} </td> 
                <td><p align="justify" class="transformacion1">{{$verinfo->descripcion_falla }}</p></td>
                <td>{{$verinfo->tecnico_terreno}}</td>
                <td>{{$verinfo->fecha}}</td>
                <td class="text-center"><a href="{{route('descargar.pdf',$verinfo)}}"><img src="imagenes/PDF.png" class="img-thumbnail" alt="Cinque Terre" width="40" height="40"  /></a></td>
                
              </tr>
            @endforeach
            
        </tbody>
      </table>


      {{ $visualizar->links() }}

</div>

    
@endsection


    
    



    
    




    