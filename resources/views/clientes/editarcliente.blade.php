@extends('layouts.plantilla')

@section('body')

<h2 class="title title-color">Edición de clientes</h2>
<a href="{{route('clientes.clientes')}}">
<button class="btn btn-secondary"><- Regresar</button>
</a>
<p style="margin-top:10px;"class="font-italic">Lo campos campos con " * " son obligatorios</p>
<form action="{{route('clientes.actualizarcliente', $cliente->id)}}" method="POST">
@method('PUT')
@csrf
@if(session('mensaje'))
<div class="alert alert-success">
    {{session('mensaje')}}
</div>
@endif
@if($errors->has('nombre'))
  <div class="alert alert-danger">
    *El campo de "Nombre" es obligatorio
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>
@endif
@if($errors->has('apellido'))
  <div class="alert alert-danger">
    *El campo de "Apellido" es obligatorio
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>
@endif
@if($errors->has('edad_cliente'))
  <div class="alert alert-danger">
    *El campo de "Edad" es obligatorio
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>
@endif
@if($errors->has('fecha_nacimiento_cliente'))
  <div class="alert alert-danger">
    *El campo de "Fecha de Nacimiento" es obligatorio
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>
@endif
@if($errors->has('genero'))
  <div class="alert alert-danger">
    *El campo de "Genero" es obligatorio
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>
@endif
@if($errors->has('curp'))
  <div class="alert alert-danger">
    *El campo de "CURP" es obligatorio
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>
@endif
@if($errors->has('rfc'))
  <div class="alert alert-danger">
    *El campo de "RFC" es obligatorio
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>
@endif
@if($errors->has('dependencia'))
  <div class="alert alert-danger">
    *El campo de "Dependencia" es obligatorio
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>
@endif
@if($errors->has('ingreso_cliente'))
  <div class="alert alert-danger">
    *El campo de "Ingreso" es obligatorio
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>
@endif
@if($errors->has('direccion_cliente'))
  <div class="alert alert-danger">
    *El campo de "Dirección" es obligatorio
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>
@endif
@if($errors->has('email_cliente'))
  <div class="alert alert-danger">
    *El campo de "Email" es obligatorio
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>
@endif
@if($errors->has('numero_cliente'))
  <div class="alert alert-danger">
    *El campo de "Numero" es obligatorio
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>
@endif
<div class="box-formulary">
<p class="divisor-text">Datos generales</p>
  <div class="form-row">
      <div class="form-group col-md-10">
        <label class="font-weight-bold" for="inputNombre">*Nombre completo</label>
        <input name="nombre" type="text" class="form-control" id="inputNombre" placeholder="Ingrese el o los nombres del cliente" value="{{$cliente->nombre_cliente}}">
      </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-3">
      <label class="font-weight-bold" for="inputEdad">*Edad</label>
      <input name="edad_cliente" type="number" class="form-control" id="inputEdad" value="{{$cliente->edad_cliente}}">
    </div>
    <div class="form-group col-md-3">
      <label class="font-weight-bold" for="inputFechaNacimiento">*Fecha de nacimiento</label>
      <input name="fecha_nacimiento_cliente" type="date" class="form-control" id="inputFechaNacimiento"value="{{$cliente->fecha_nacimiento_cliente}}">
    </div>
    <div class="form-group col-md-4">
      <label class="font-weight-bold" for="inputGenero">*Genero</label>
      <select id="inputGenero" class="custom-select"name="genero">
        <option selected >{{$cliente->genero}}</option>
        <option value="Hombre">Hombre</option>
        <option value="Mujer">Mujer</option>
      </select>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-5">
      <label class="font-weight-bold" for="inputcurp">*CURP</label>
      <input name="curp" type="text" class="form-control" id="inputcurp" value="{{$cliente->curp}}">
    </div>
    <div class="form-group col-md-5">
      <label class="font-weight-bold" for="inputrfc">*RFC</label>
      <input name="rfc" type="text" class="form-control" id="inputrfc" value="{{$cliente->rfc}}">
    </div>
  </div>
  </div>
  <div class="box-formulary">
  <div class="form-row">
    <p class="divisor-text">Datos del Empleo</p>
  </div>
  <div class="form-row">
    <div class="form-group col-md-5">
      <label class="font-weight-bold" for="inputDependencia">*Dependencia</label>
      <input name="dependencia" type="text" class="form-control" id="inputDependencia" value="{{$cliente->dependencia}}">
    </div>
    <div class="form-group col-md-5">
      <label class="font-weight-bold" for="inputIngreso">*Ingreso Mensual</label>
      <input name="ingreso_cliente" type="text" class="form-control" id="inputIngreso" value="{{$cliente->ingreso_cliente}}">
    </div>
  </div>
  </div>
  <div class="box-formulary">
  <div class="form-row">
    <p class="divisor-text">Dirrección y Contacto</p>
  </div>

  <div class="form-row">
    <div class="form-group col-md-7">
    <label class="font-weight-bold" for="inputDireccion">*Direccion</label>
    <input name="direccion_cliente" type="text" class="form-control" id="inputDireccion" placeholder="Ingrese la dirrecion del cliente" value="{{$cliente->direccion_cliente}}">
    </div>
    <div class="form-group col-md-3">
    <label class="font-weight-bold" for="inputcp">*Código Postal</label>
    <input name="codigo_postal" type="number"min="0" max="99999"class="form-control" id="inputcp" value="{{$cliente->codigo_postal}}">
    </div>
    <div class="form-group col-md-5">
      <label class="font-weight-bold" for="inputEmail">*Correo Electronico</label>
      <input name="email_cliente" type="email" class="form-control" id="inputEmail" value="{{$cliente->email_cliente}}">
    </div>
    <div class="form-group col-md-5">
      <label class="font-weight-bold" for="inputeNumeroCliente">*Numero Telefonico</label>
      <input name="numero_cliente" type="number" class="form-control" id="inputeNumeroCliente"min="0" max="9999999999" value="{{$cliente->numero_cliente}}">
    </div>
  </div>
  </div>
  <div class="box-formulary">
  <div class="form-row">
    <p class="divisor-text">Datos del conyugue</p>
  </div>

  <div class="form-row">
  <div class="form-group col-md-3">
      <label class="font-weight-bold" for="inputEstadoCivil">*Estado Civil</label>
      <select id="inputEstadoCivil" class="custom-select" name="estado_civil" value="{{$cliente->estado_civil}}">
        <option selected>{{$cliente->estado_civil}}</option>
        <option value="Soltero">Soltero</option>
        <option value="Union Libre">Unión Libre</option>
        <option value="Casado">Casado</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label class="font-weight-bold" for="inputConyugueNombre">Nombre del conyugue</label>
      <input name="nombre_conyugue" type="text" class="form-control" id="inputConyugueNombre" value="{{$cliente->nombre_conyugue}}">
    </div>
    <div class="form-group col-md-3">
      <label class="font-weight-bold" for="inputNumeroConyugue">Telefono del Conyugue</label>
      <input name="numero_conyugue" type="number" class="form-control" id="inputNumeroConyugue"min="0" max="9999999999" value="{{$cliente->numero_conyugue}}">
    </div>
  </div>
  </div>
  <div class="box-formulary">
  <div class="form-row">
    <p class="divisor-text">Datos de las Referencias</p>
  </div>
  <div class="form-row">
  <div class="form-group col-md-7">
      <label class="font-weight-bold" for="inputNombreReferenciaUno">Nombre de la Primera Referencia</label>
      <input name="nombre_referencia_uno" type="text" class="form-control" id="inputNombreReferenciaUno" value="{{$cliente->nombre_referencia_uno}}">
    </div><div class="form-group col-md-4">
      <label class="font-weight-bold" for="inputNumeroReferenciaUno">Telefono</label>
      <input name="numero_referencia_uno" type="number" class="form-control" id="inputNumeroReferenciaUno"min="0" max="9999999999" value="{{$cliente->numero_referencia_uno}}">
    </div><div class="form-group col-md-7">
      <label class="font-weight-bold" for="inputNombreReferenciaDos">Nombre de la Segunda Referencia</label>
      <input name="nombre_referencia_dos" type="text" class="form-control" id="inputNombreReferenciaDos" value="{{$cliente->nombre_referencia_dos}}">
    </div><div class="form-group col-md-4">
      <label class="font-weight-bold" for="inputNumeroReferenciaDos">Telefono</label>
      <input name="numero_referencia_dos" type="number" class="form-control" id="inputNumeroReferenciaDos"min="0" max="9999999999" value="{{$cliente->numero_referencia_dos}}">
    </div>
  </div>
</div>

  <button type="submit" class="btn btn-primary ">Actualizar Datos</button>
</form>

@endsection
