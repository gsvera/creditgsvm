@extends('layouts.app')
@section('content')

<div class=""style="padding-top:50px;">
    <div class="row"style="margin:0;">

    <div class="col-2">
        <div class="list-group dropright"style="position:fixed;z-index:1000; ">
          <a href="{{route('clientes.clientes')}}"class="list-group-item list-group-item-info dropdown-toggle">
            <span class="strong">Clientes</span>
          </a>

          <button class="list-group-item list-group-item-info dropdown-toggle" type="button" id="dropdownCredito" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
            <span class="strong">Creditos</span>
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownCredito" style="background:rgb(182,195,207);">
            <a class="dropdown-item" href="{{route('creditos.lista')}}"><span class="strong">Lista de Créditos</span></a>
            <a class="dropdown-item" href="{{route('creditos.crearplantilla')}}"><span class="strong">Plantilla de Crédito</span></a>
            <a class="dropdown-item" href="#"><span class="strong">Cotizador</span></a>
          </div>
          <div class="dropright">
            <button class="list-group-item list-group-item-info dropdown-toggle" type="button" id="dropdownMenuReference" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="strong">Configuración</span>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuReference" style="background:rgb(182,195,207);">
              <a href="{{route('userconfig')}}" class="dropdown-item"><span class="strong">Configuración</span></a>
              <a href="{{route('nuevousuario')}}" class="dropdown-item"><span class="strong">Crear Usuario</span></a>
              <a href="{{route('configuser.niveles')}}" class="dropdown-item"><span class="strong">Crear Niveles</span></a>
            </div>
            </div>  
          </div>
      </div>

    <div class="col-9" style="z-index:10;">
        @yield('body')
    </div>
    </div>
        
    </div>
@endsection