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

            @if (count($datos)<=0)
            <tr>
                <td colspan="6" class="text-center"><div class="alert alert-danger d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    <div>
                        No hay Resultados para la Búsqueda <strong> {{$buscar}} </strong>
                    </div>
                  </div>
                </td>
            </tr>              
            @else    

            @foreach ($datos as $dato)
            <tr>
                <th scope="row"><a href="{{route('detalle.pdf',$dato->id)}}">{{$dato->n_incidente}}</a></th>
                <td>{{$dato->usuario_afectado}} </td> 
                <td><p align="justify">{{$dato->descripcion_falla }}</p></td>
                <td>{{$dato->tecnico_terreno}}</td>
                <td>{{$dato->fecha}}</td>
                <td class="text-center"><a href="{{route('descargar.pdf',$dato->id)}}"><img src="imagenes/PDF.png" class="img-thumbnail" alt="Cinque Terre" width="40" height="40"  /></a></td>
                
              </tr>
            @endforeach
            
        </tbody>
      </table>


      {{ $datos->links() }}

      @endif
</div>

    
@endsection