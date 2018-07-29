@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
  <div class="col-md-10">
    <div class="card">
          <div class="card-header">
            <h2>Editando producto <a href="{{ route('productos.index') }}" class="btn btn-primary float-right" data-toggle="tooltip" title="¡Desde aquí puedes volver a la lista de escolaridad!" data-placement="right">Atrás</a>
            </h2>
          </div>
        {{-- @include('Cliente.frangment.error') --}}
          {{-- @include('Cliente.frangment.info') --}}
          <div class="card-body">         
          <form method="POST" action="{{ route('productos.update', $producto->id) }}"  role="form">
            
          {{ csrf_field() }}
          
          <input name="_method" type="hidden" value="PATCH">    
          
          <div class="form-group">
            <label for="nombre">Platillo:</label>
            <input type="text" name="nombre" id="nombre" class="form-control input-sm" placeholder="Ingresa nombre" required="" value="{{ $producto->nombre }}">  
          </div>
  
          <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" id="descripcion" class="form-control input-sm" placeholder="Describe la escolaridad" required="" >{{ $producto->descripcion }}</textarea>
          </div>

          <div class="form-group">
            <label for="ingredientes">Ingredientes:</label>
            <textarea name="ingredientes" id="ingredientes" class="form-control input-sm" placeholder="Ingresa los ingredientes" required="">{{ $producto->ingredientes }}</textarea>
          </div>

          <div class="form-group">
            <label for="precio">Precio:</label>
            <input type="number" name="precio" id="precio" class="form-control input-sm" placeholder="Ingresa precio" required="" step="0.01" min="0" value="{{ $producto->precio }}">
          </div>
          
          <div class="form-group">
            <label for="precio">Estatus:</label>
            <select name="estatus" id="estatus" class="form-control input-sm" required="">
              <option value="1">Activo</option>
              <option value="0">Inactivo</option> 
            </select>
          </div>
          
          
          <input type="submit"  value="Actualizar" class="btn btn-success float-right" data-toggle="tooltip" title="¡Este boton en para actualizar el producto!" data-placement="left">
                    
        </form>
      </div>
    </div>{{-- card end --}}
  </div>
  </div>
</div>
@endsection