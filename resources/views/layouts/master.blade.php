<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Plataforma de trasparencia del estado de Zacatecas">
    <title>@yield('title')</title>
    <!-- Bootstrap core CSS -->
    <link href={{asset("assets/dist/css/bootstrap.min.css")}} rel="stylesheet">
    <link href={{asset("assets/css/blog.css")}} rel="stylesheet">
  </head>
  <body>
    <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#"><img src="{{url('img/brand-sin-fondo.png')}}" alt="" id = "brand"></a>
    <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>-->
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <!--<form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>-->
    </div>
  </nav>
</header>

{{-- Apartado del carrucel superior  --}}

<main role="main"> {{-- tarjetas  --}}
  <main class="container">
  
    <div class="row">
      <div class="col-md-8">
        <h3 class="pb-4 mb-4 font-italic border-bottom">
          From the Firehose
        </h3>
        @yield('content')
      </div>
  
      <div class="col-md-4" style="margin-top: 150px">
        <div class="p-4 mb-3 bg-light rounded">
          <h4 class="font-italic">Sobre estos artículos</h4>
          <p class="mb-0">
            La secretaria de finanzas se preocupa por brindar a la ciudadanía transparencia en el manejo de los recursos, es por eso el motivo de la creación de  esta plataforma ¡DISFRÚTALA!. </p>
        </div>
  
        <div class="p-4">
          <h4 class="font-italic">Talvez te pueda interesar</h4>
          <ol class="list-unstyled mb-0">
            <li><a href="#">March 2014</a></li>
            <li><a href="#">February 2014</a></li>
            <li><a href="#">January 2014</a></li>
            <li><a href="#">December 2013</a></li>
            <li><a href="#">November 2013</a></li>
            <li><a href="#">October 2013</a></li>
            <li><a href="#">September 2013</a></li>
            <li><a href="#">August 2013</a></li>
            <li><a href="#">July 2013</a></li>
            <li><a href="#">June 2013</a></li>
            <li><a href="#">May 2013</a></li>
            <li><a href="#">April 2013</a></li>
          </ol>
        </div>
  
        <div class="p-4">
          <h4 class="font-italic">Siguenos en nuestras redes sociales</h4>
          <ol class="list-unstyled">
            <li><a href="www.twitter.com">Twitter</a></li>
            <li><a href="www.facebook.com">Facebook</a></li>
          </ol>
        </div>
      </div>
  
    </div><!-- /.row -->

{{-- footer  --}}
@yield('footer')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
