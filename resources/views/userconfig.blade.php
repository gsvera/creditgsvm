
@extends('layouts.plantilla')
@section('body')
    <h1 class="title-4">Datos del usuario</h1>

    <form action="{{route('actualizarusuario',$usuario->id)}}" method="POST" class="form-center ">
    @method('PUT')
    @csrf
        <div class="form-group row">
            <label for="" class="col-sm-3 col-form-label"><span class="strong">Nombre</span></label>
            <div class="col-sm-8">
                <input name="name" type="text" class="form-control" id="" value="{{$usuario->name}}">
            </div>
        </div>    
        <div class="form-group row">
            <label for="" class="col-sm-3 col-form-label"><span class="strong">Usuario</span></label>
            <div class="col-sm-8">
                <input name="email" type="text" class="form-control" id="" value="{{$usuario->email}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-3 col-form-label"><span class="strong">Rol</span></label>
            <div class="col-sm-8">
                <select name="rol" id="" class="custom-select">
                    <option style="color:gray;">Rol actual " {{$usuario->rol}} "</option>
                    <option value="User">User</option>
                    <option value="Admin">Admin</option>
                    <option value="Contador">Contador</option>
                    <option value="Sistemas">Sistemas</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-3 col-form-label"><span class="strong">Contraseña</span></label>
            <div class="col-sm-8">
                <input name="password" type="password" class="form-control" id="" value="{{$usuario->password}}">
            </div>
        </div>

        <button type="submit" class="btn btn-primary btn-block">Actualizar</button>
        
</form>

@if(session('mensaje'))

    <div class="alert alert-success">{{session('mensaje')}}</div>
@endif

@endsection