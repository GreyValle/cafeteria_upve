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
          <p>Nos complacemos en darte la bienvenida y te invitamos a que uses el sitio lo antes posible para que obtengas un mejor servicio.</p>
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
          <h1>Si te gusta nuestro servicio, ¡Agrega un comentario!</h1> 
          <p>Recuerda que estamos para complacerte, desde aquí puedes opinar o sugerir algun platillo nuevo.</p>
          <p>
            <a class="btn btn-lg"  style="background:#4E1D4E;color: white"  href="#platillosdd" role="button">Platillos populares</a>
          </p>
        </div>
      </div>
    </div>
    <div class="carousel-item ">
      <img class="third-slide" src="imagenes/tostadas.JPG" alt="Third slide">
      <div class="container">
        <div class="carousel-caption text-left">
          <h1>¡Compra saldo!</h1>
            <p>Es rapido, facil y seguro...</p>
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

 <!--================================================== -->
      <div id="platillosdd" class="container marketing">
       <div class="container">
        <h2 class="text-center">Cafetería UPVE</h2><br>
         <div class="row">
           <div class="col-md-4">
             <h2 class="text-center">Misión</h2>
             <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
           </div>
           <div class="col-md-4">
             <h2 class="text-center">Visión</h2>
             <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
           </div>
           <div class="col-md-4">
             <h2 class="text-center">Valores</h2>
             <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
           </div>
         </div>
       </div>
      
      <hr class="featurette-divider"> 
      
        <h2 class="text-center">Algunos de nuestros deliciosos platillos en menú</h2>
        <br>
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="imagenes/burger.jpg"  alt="Generic placeholder image" width="140" height="140">
            <h2>Hamburguesa</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodore et dolore magna aliqua.</p>
         </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="rounded-circle" src="imagenes/tacos de asada.jpg"  alt="Generic placeholder image" width="140" height="140">
            <h2>Tacos de asada</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodore et dolore magna aliqua.</p>
          </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="rounded-circle" src="imagenes/huevos con machaca.jpg"  alt="Generic placeholder image" width="140" height="140">
            <h2>Huevos con machaca</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodore et dolore magna aliqua.</p>
        </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-8">
            <h2 class="featurette-heading">Certamen UPVE 2018. <span class="text-muted">Increíble participación del alumnado.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-4">
            <img class="featurette-image img-fluid mx-auto" src="imagenes/certamen2018_.jpg" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-8 order-md-2">
            <h2 class="featurette-heading">Formación integral. <span class="text-muted">Interpolitécnicas 2017.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-4 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="imagenes/interpolitecnicas.jpg" alt="Generic placeholder image">
          </div>
        </div>


        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-8">
            <h2 class="featurette-heading">Conferencias. <span class="text-muted">Semana de la ciencia y la tecnología 2018.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-4">
            <img class="featurette-image img-fluid mx-auto" src="imagenes/conferencias.jpg" alt="Generic placeholder image">
          </div>
        </div>

        <!-- /END THE FEATURETTES -->

        <hr class="featurette-divider">
      </div><!-- /.container -->

      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Volver arriba</a></p>
        <p>&copy; 2017-2018 Grey Valle. &middot; <a href="#">Privacidad</a> &middot; <a href="#">Condiciones</a></p>
      </footer>


@endsection

                    