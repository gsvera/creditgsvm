@extends('layouts.plantilla')
@section('body')
    <h1 class="pag-title">Plantillas de crédito</h1>
 <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModal" style="float:right; margin:0 10px 10px;">
  Crear Plantilla Nueva
</button>
@if(session('mensaje'))
<div class="alert alert-success">
    {{session('mensaje')}}
</div>
@endif
<!-- Modal -->
<form action="{{route('creditos.guardarplantilla')}}" method="POST">
@csrf
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nueva plantilla de Credito</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
        <div class="form-row">
            <label class="strong" for="">Nombre de la Plantilla</label>
            <input type="text" class="form-control" name="nombre_plantilla_credito">
            <label class="strong" for="">Interes</label>
            <input type="number" min="0" max="100" class="form-control" name="interes_plantilla">
            <label class="strong" for="">Plazo</label>
            <select name="" id="" class="custom-select" name="plazo_plantilla">
                <option selected=""></option>
                <option value="Semanal">Semanal</option>
                <option value="Quincenal">Quincenal</option>
                <option value="Mensual">Mensual</option>
            </select>
            
        </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
        <button type="submit" class="btn btn-primary">Guardar</button>
        
      </div>
    </div>
  </div>
</div>   
</form>
    @foreach($plantillas as $plantilla)
    <div class="div-target">
  <div class="card-header">
    <h5 class="">{{$plantilla->nombre_plantilla_credito}}</h5>
  </div>
  <div class="container container-card">
    <Label class="strong">Interes</Label>
    <p class="text-card">{{$plantilla->interes_plantilla}}</p>
    <label class="strong">Plazo</label>
    <p class="text-card">{{$plantilla->plazo_plantilla}}</p>
  </div>

  @endforeach
@endsection