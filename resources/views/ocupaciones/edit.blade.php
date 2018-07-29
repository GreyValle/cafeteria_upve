@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
  <div class="col-md-10">
    <div class="card">
          <div class="card-header">
            <h2>Editando ocupación <a href="{{ route('ocupaciones.index') }}" class="btn btn-primary float-right" data-toggle="tooltip" title="¡Desde aquí puedes volver a la lista de ocupaciones!" data-placement="left">Atrás</a>
            </h2>
          </div>
        {{-- @include('Cliente.frangment.error') --}}
          {{-- @include('Cliente.frangment.info') --}}
          <div class="card-body">         
          <form method="POST" action="{{ route('ocupaciones.update', $dato_ocupacion->id)}}"  role="form">
            {{ csrf_field() }}
          <input name="_method" type="hidden" value="PATCH">
          <div class="form-group">
            <label for="escolaridad">Ocupación:</label>
            <input type="text" name="ocupacion" id="ocupacion" class="form-control input-sm" placeholder="Ingresa ocupación" value="{{ $dato_ocupacion->ocupacion }}" required="">
          </div>
  
          <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" id="descripcion" class="form-control input-sm" placeholder="Describe la escolaridad" required="">{{ $dato_ocupacion->descripcion }}</textarea>
          </div>
          
          
          <input type="submit"  value="Guardar" class="btn btn-success float-right" data-toggle="tooltip" title="¡Este boton en para actualizar la escolaridad!" data-placement="left">
                    
        </form>
      </div>
    </div>{{-- card end --}}
  </div>
  </div>
</div>
@endsection