@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card box-shadow">
        <div class="card-header" style="font-size: large;"><strong>Editando Producto</strong>
          <div class="btn-toolbar float-right">
          <div class="btn-group">
            @can('products.show')
              <a href="{{ route('products.show',$producto->id) }}" class="btn btn-sm btn-outline-secondary">Ver</a>
            @endcan
            @can('products.index')
              <a href="{{ route('products.index') }}" class="btn btn-sm btn-outline-secondary">Menú</a>
            @endcan
            </div>
          </div>
        </div>
        <div class="card-body">         
          <form method="POST" action="{{ route('productos.update', $producto->id) }}" accept-charset="UTF-8" enctype="multipart/form-data" role="form">
            
          {{ csrf_field() }}
          
          <input name="_method" type="hidden" value="PATCH">    
          
          <div class="form-group">
            <label for="image">Imagen:</label>
            <input type="file" name="image" class="form-control input-sm" style="padding:3px">
          </div>

          <div class="form-group">
            <label for="nombre">Platillo:</label>
            <input type="text" name="nombre" id="nombre" class="form-control input-sm" placeholder="Ingresa nombre" required="" value="{{ $producto->nombre }}" maxlength="40">  
          </div>
  
          <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" id="descripcion" class="form-control input-sm" placeholder="Describe la escolaridad" maxlength="70" required="" >{{ $producto->descripcion }}</textarea>
          </div>

          <div class="form-group">
            <label for="ingredientes">Ingredientes:</label>
            <textarea name="ingredientes" id="ingredientes" class="form-control input-sm" placeholder="Ingresa los ingredientes" maxlength="70" required="">{{ $producto->ingredientes }}</textarea>
          </div>

          <div class="form-group">
            <label for="precio">Precio:</label>
            <input type="number" name="precio" id="precio" class="form-control input-sm" placeholder="Ingresa precio" required="" step="0.01" min="0" value="{{ $producto->precio }}" max="1000">
          </div>
          
          <div class="form-group">
            <label for="precio">Estatus:</label>
            <select name="estatus" id="estatus" class="form-control input-sm" required="">
              <option value=1>Activo</option>
              <option value=0>Inactivo</option> 
            </select>
          </div>
          
          <hr>
          <input type="submit"  value="Actualizar" class="btn btn-outline-secondary btn-sm float-right" >
                    
        </form>
      </div>
    </div>{{-- card end --}}
  </div>
  </div>
</div>
@endsection