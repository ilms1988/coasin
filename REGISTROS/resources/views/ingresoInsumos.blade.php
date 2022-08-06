@extends('Plantillas/plantilla')
@section('codigo')

<div class="container py-3">

    <h1 class="text-decoration-underline">Ingreso Insumos Sucursales</h1>

    <div class="container py-5">
        <div class="row">
          <div class="col-6 col-md-4">             
              <label for="exampleDataList" class="form-label"><h5>Insumo</h5></label>
              <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Seleccione un Insumo...">
               <datalist id="datalistOptions">
              <option value="San Francisco">
              <option value="New York">
              <option value="Seattle">
              <option value="Los Angeles">
              <option value="Chicago">
               </datalist>
          </div>

          <div class="col-6 col-md-4">
             <label class="form-label"><strong>NOMBRE</strong></label>
             <input type="text" name="nombre" placeholder="Tóner" class="form-control" id="exampleFormControlInput1" >
          </div>

          <div class="col-6 col-md-4">
             <label class="form-label"><strong>NOMBRE</strong></label>
             <input type="text" name="nombre" placeholder="Tóner" class="form-control" id="exampleFormControlInput1" >
          </div>

        </div>

        <div class="row py-3">
          <div class="col-6 col-md-4">             
             <label class="form-label"><strong>NOMBRE</strong></label>
             <input type="text" name="nombre" placeholder="Tóner" class="form-control" id="exampleFormControlInput1" >
          </div>
          <div class="col-6 col-md-4">
             <label class="form-label"><strong>NOMBRE</strong></label>
             <input type="text" name="nombre" placeholder="Tóner" class="form-control" id="exampleFormControlInput1" >
          </div>
          <div class="col-6 col-md-4">
             <label class="form-label"><strong>NOMBRE</strong></label>
             <input type="text" name="nombre" placeholder="Tóner" class="form-control" id="exampleFormControlInput1" >
          </div>
        </div>


    </div>

    <button type="button" class="btn btn-primary">
        Notifications <span class="badge text-bg-danger">1</span>
      </button>





</div>


    
@endsection