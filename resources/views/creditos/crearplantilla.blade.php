@extends('layouts.plantilla')
@section('body')

<form action="{{route('creditos.guardarplantilla')}}" method="POST">
@csrf

 <div class="">
        <h5 class="modal-title" id="exampleModalLabel">Nueva plantilla de Credito</h5>
 </div>
 <div class="">
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

@endsection