@extends('layouts.app')
@section('content')

<div class=""style="padding-top:50px;">
    <div class="row">
    <div class="col-2">
        <div class="list-group"style="position:fixed;">

        
  <button class="list-group-item list-group-item-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
    <span class="strong">Creditos</span>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="{{route('creditos.lista')}}">Lista de Créditos</a>
    <a class="dropdown-item" href="{{route('creditos.plantillas')}}">Plantilla de Crédito</a>
    <a class="dropdown-item" href="#">Proximamente...</a>
  </div>

            <!-- <a href="{{route('creditos.lista')}}" class="list-group-item list-group-item-info"><span class="strong">Creditos</span></a> -->

            <a href="{{route('clientes.clientes')}}" class="list-group-item list-group-item-info"><span class="strong text-center">Clientes</span></a>
            <a href="{{route('userconfig')}}" class="list-group-item list-group-item-info"><span class="strong">Configuración</span></a>
            <a href="{{route('nuevousuario')}}" class="list-group-item list-group-item-info"><span class="strong">Crear Usuario</span></a>
        </div>
    </div>
    <div class="col-9">
        @yield('body')
    </div>
    </div>
        
    </div>
@endsection