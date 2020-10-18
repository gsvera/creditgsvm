
@extends('layouts.plantilla')
@section('body')
<h1 class="title-4">Clientes</h1>
@if(session('mensaje'))
<div class="alert alert-success">
    {{session('mensaje')}}
</div>
@endif
<a href="{{route('clientes.crearcliente')}}">
    <button class="btn btn-primary btn-lg" style="float:right; margin:0 10px 10px;">Crear nuevo cliente</button>
</a>

<table class="table">
    <thead>
        <tr>
            <th class="text-center" scoper="col">ID</th>
            <th class="text-center" scoper="col">NOMBRE</th>
            <th class="text-center" scoper="col">RFC</th>
            <th class="text-center" scoper="col">GENERO</th>
            <th class="text-center" scoper="col">DEPENDENCIA</th>
            <th class="text-center" scoper="col">CREDITO VIGENTEN</th>
            <th class="text-center" scoper="col">ACCIONES</th>
        </tr>
    </thead>
    <tbody>
    @foreach($clientes as $item)
        <tr>
            <th scope="row" class="text-center">{{$item->id}}</th>
            <td class="text-center">{{$item->nombre_cliente}}</td>
            <td class="text-center">{{$item->rfc}}</td>
            <td class="text-center">{{$item->genero}}</td>
            <td class="text-center">{{$item->dependencia}}</td>
            <td class="text-center">{{$item->credito_vigente}}</td>
            <td >
                
                <a class="btn btn-warning btn-sm col-5" href="{{route('clientes.editarcliente',$item)}}">Editar</a>
                <form action="{{route('clientes.deletecliente',$item)}}" method="POST" class="d-inline col-5">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger btn-sm" type='submit'>Eliminar</button>
                </form>
                
            </td>
        </tr>
    @endforeach
    </tbody>

</table>
{{$clientes->links()}}
@endsection