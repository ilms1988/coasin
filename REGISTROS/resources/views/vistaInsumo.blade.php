@extends('Plantillas/plantilla')
@section('codigo')

<div class="container-fluid py-4">

    <table class="table align-middle mb-0 bg-white">
        <thead class="bg-light">
          <tr>
            <th>Nombre de Insumos y Sucursal</th>
            <th>Modelo y N° Parte</th>
            <th>Activo</th>
            <th>En stock</th>
            <th>Rebajas</th>
            <th>Acción</th>
          </tr>
        </thead>
        <tbody>
         @foreach ($tablaview as $tabla)
                
            <tr>
               <td>
                 <div class="d-flex align-items-center">
                      <img
                      src="imagenes/CALD.jpg"
                      alt=""
                      style="width: 45px; height: 45px"
                      class="rounded-circle"
                    />
                  <div class="ms-3">
                      <p class="fw-bold mb-1">{{$tabla->nombre}}</p>
                      <p class="text-muted mb-0">{{$tabla->sucursal}}</p>
                  </div>
              </div>
            </td>
            <td>
              <p class="fw-normal mb-1"><strong>{{$tabla->modelo}}</strong></p>
              <p class="text-muted mb-0">{{$tabla->codigo}}</p>
            </td>
            <td>
                <span>{{$tabla->Tipo_activo}}</span>
              </td>
            <td>
              <span>{{$tabla->cantidad_stock}}</span>
            </td>
            <td>{{$tabla->cantidad_rebaja}}</td>
           <!-- <td>
              <button type="button" class="btn btn-danger">
                Editar
              </button>
            </td>-->
          </tr>
          @endforeach
        </tbody>
      </table>


</div>



@endsection