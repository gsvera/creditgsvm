@extends('layouts.plantilla')
@section('body')


<h1 class="title-4">Nueva plantilla de Credito</h1>
<form action="{{route('creditos.guardarplantilla')}}" method="POST">
@csrf

 <div class="container">
    <div class="form-row">
        <label class="strong" for="">Nombre de la Plantilla</label>
        <input type="text" class="form-control" name="nombre_plantilla_credito">
        <label class="strong" for="">Interes</label>
        <input type="number" min="0" max="100" class="form-control" name="interes_plantilla">
        <label class="strong" for="">Plazo</label>
        <select id="" class="custom-select" name="plazo_plantilla">
            <option selected=""></option>
            <option value="Semanal">Semanal</option>
            <option value="Quincenal">Quincenal</option>
            <option value="Mensual">Mensual</option>
        </select>
    </div>  
     
    <div class="">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>   
</form>
<div class="container col-2">
<table>

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
  </table>
  </div>
  {{$plantillas->links()}}

@endsection