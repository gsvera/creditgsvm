@extends('layouts.plantilla')
    @section('body')
        <h1>Niveles de usaurio</h1>
        <form action="#" method="POST">
            @csrf
            <div class="contaienr">
                <label class="font-weight-bold" for="">Nombre del nivel</label>
                <input type="text" name="name" id="" class="form-control">
                <label class="font-weight-bold" for="">Descripción del nivel</label>
                <input type="text" name="description" id="" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Agregar Nuevo Nivel</button>
        </form>
        @if(session('mensaje'))
            <div class="alert alert-success">{{session('mensaje')}}</div>
        @endif
    @endsection