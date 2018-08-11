@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10 col-lg-12">
      <div class="card box-shadow ">
        <div class="jumbotron p-3 p-md-5 text-dark rounded">
          <div class="row">
            <div class="col-md-6 px-0">
              <h1 class="display-4 font-italic">Bienvenido a la cafetería de todos</h1>
              <p class="lead my-3">Aquí encontraras el menú disponible para que puedas ordenar y disfrutar de tus platillos favoritos, recuerda que estamos para servirte, provecho.</p>
                @can('products.create')
                  <p class="lead mb-0"><a href="{{ route('products.create') }}" class="text-dark font-weight-bold">Crear nuevo menú...</a></p> 
                @endcan
            </div>
            <div class="col-md-6 ">
              <img  class="card-img-right img-fluid" src="{{ url("/productos/imagenes/upve.jpg") }}" alt="Imagen">
            </div>
          </div> 
        </div>
        <div class="card-body">
          <products-component></products-component>
        </div> 
      </div>{{-- card --}}      
    </div>{{-- col-md-8 col-lg-10 --}}
  </div>{{-- row justify-content-center --}}
</div>{{-- container --}}
@endsection