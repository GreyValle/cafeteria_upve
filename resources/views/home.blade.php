@extends('layouts.app')
@section('content')
                    <div id="myCarousel" class="carousel" data-ride="carousel">

                        <ol class="carousel-indicators">
                          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                          <li data-target="#myCarousel" data-slide-to="1"></li>
                          <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="first-slide" src="imagenes/BANNER_WAL.jpg" alt="First slide">
                            <div class="container">
                              <div class="carousel-caption">
                                <h1>Conózcanos.</h1>
                                <p>Walmart es una corporación multinacional de tiendas de origen estadounidense, que opera cadenas de grandes almacenes de descuento y clubes de almacenes.</p>
                                <button 
                                   type="button" 
                                   class="btn btn-primary btn-lg" 
                                   data-toggle="modal" 
                                   data-target="#favoritesModal">
                                  Saber más.
                                </button>
                              </div>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img class="second-slide" src="imagenes/wal_3.jpg" alt="Second slide">
                            <div class="container">
                              <div class="carousel-caption text-right">
                                <h1>Siempre encuentras todo, y pagas menos.</h1>
                                <p>El mejor surtido, las mejores marcas y los mejores precios.</p>
                                <p><a class="btn btn-lg btn-primary" href="#galeria" role="button">Navega en la galeria</a></p>
                              </div>
                            </div>
                          </div>
                          <div class="carousel-item ">
                            <img class="third-slide" src="imagenes/BANNER.jpg" alt="Third slide">
                            <div class="container">
                              <div class="carousel-caption text-left">
                                <h1>¡Cómpralo ya!</h1>
                                @guest
                                  <p>Regístrate o inicia sesión y adquiérelo al mejor precio.</p>
                                  <p><a class="btn btn-lg btn-primary" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a></p>
                                @endguest
                              </div>
                            </div>
                          </div>{{-- carousel-item  --}}
                        </div>{{-- <div class="carousel-inner"> --}}

                        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>

                    </div> {{-- id="myCarousel"  --}}


<div class="container">
  <div class="row justify-content-center">
    <div class="col-12">
        <my-roles-component></my-roles-component>
    </div>{{-- col-md-8 col-lg-10 --}}
  </div>{{-- row justify-content-center --}}
</div>{{-- container --}}
@endsection

                    