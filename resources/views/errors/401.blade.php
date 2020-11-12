@extends('layouts.plantilla')
@section('body')

    <div class="container">
    <h1 class="title">No tienes permiso para editar!</h1>
    </div>
    <a href="{{route('clientes.clientes')}}">
       <button class="btn btn-secondary"><- Regresar</button>
    </a>

@endsection