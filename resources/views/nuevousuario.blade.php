@extends('layouts.plantilla')
@section('body')
    <h1 class="title-4">Nuevo Usuario</h1>

    <form action="{{route('crearusuario')}}" method="POST" class="form-center ">
    
    @csrf
        <div class="form-group row">
            <label for="" class="col-sm-3 col-form-label"><span class="strong">Nombre</span></label>
            <div class="col-sm-8">
                <input name="name" type="text" class="form-control" id="">
            </div>
        </div>    
        <div class="form-group row">
            <label for="" class="col-sm-3 col-form-label"><span class="strong">Usuario</span></label>
            <div class="col-sm-8">
                <input name="email" type="text" class="form-control" id="" value="">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-3 col-form-label"><span class="strong">Rol</span></label>
            <div class="col-sm-8">
                <select name="rol" id="" class="custom-select">
                    <option ></option>
                    <option value="User">User</option>
                    <option value="Admin">Admin</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-3 col-form-label"><span class="strong">Contraseña</span></label>
            <div class="col-sm-8">
                <input name="password" type="text" class="form-control" id="" value="">
            </div>
        </div>

        <button type="submit" class="btn btn-primary btn-block">Crear</button>
        
</form>

@if(session('mensaje'))

    <div class="alert alert-success">{{session('mensaje')}}</div>
@endif

@endsection