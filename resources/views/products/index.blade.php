@extends('layouts.app')
@section('content')
  <div class="row justify-content-center">
    <div class="col-xs-12 col-sm-12 col-md-10">{{-- <div class="col-xs-12 col-sm-12"> --}}
      <div class="card">
        <div class="card-header text-center">
          <div class="row">
            <div class="col-sm-6">
                <h2 class="float-left"> Menú </h2>         
            </div>
            <div class="col-sm-6">          
             <a href="{{ route('productos.create') }}" class="btn btn-primary float-right" data-toggle="tooltip" title="¡Desde aquí puedes añadir un nuevo proveedor!" data-placement="left">Añadir producto</a> 
            </div>
          </div>
        </div>
        <div class="card-body ">
          
            <products-component></products-component>
            
        </div>                     
        </div>      
      </div>
    </div>
  </div>

@endsection