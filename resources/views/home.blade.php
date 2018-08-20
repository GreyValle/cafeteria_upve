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
      <img class="first-slide" src="imagenes/tortacubana.jpg" alt="First slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>Bienvenido.</h1>
          <p>Nos complacemos en darte la bienvenida y te invitamos a que uses el sitio lo antes posible para que obtengas un mejor servicio. </p>
          <button 
            type="button" 
            class="btn btn-lg" style="background:#4E1D4E;color: white" 
            data-toggle="modal" 
            data-target="#favoritesModal">
            Saber más.
          </button>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img class="second-slide" src="imagenes/burger.jpg" alt="Second slide">
      <div class="container">
        <div class="carousel-caption text-right">
          <h1>Si te gusta nuestro servicio, ¡Agrega unn comentario!</h1> 
          <p>Recuerda que estamos para complacerte, desde aquí puedes opinar o sugerir algun platillo nuevo.</p>
          <p>
            <a class="btn btn-lg" style="background:#4E1D4E;color: white" href="#comentarios" role="button">Comentar</a>
          </p>
        </div>
      </div>
    </div>
    <div class="carousel-item ">
      <img class="third-slide" src="imagenes/tostadas.JPG" alt="Third slide">
      <div class="container">
        <div class="carousel-caption text-left">
          <h1>¡Compra saldo!</h1>
            <p>Es rapido, fácil y seguro...</p>
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
    <div id="comentarios" class="col-12">
      <my-roles-component></my-roles-component>
    </div>{{-- col-md-8 col-lg-10 --}}
  </div>{{-- row justify-content-center --}}
</div>{{-- container --}}
@endsection

                    