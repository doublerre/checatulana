<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Plataforma de trasparencia del estado de Zacatecas">
    <title>Checa Tu Lana</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/landing.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
  </head>
  <body>
    <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#"><img src="img/brand.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <!--<form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>-->
    </div>
  </nav>
</header>

{{-- Apartado del carrucel superior  --}}

<main role="main">

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      {{--carrusel 1--}}
      <div class="carousel-item active">
        <img class="bd-placeholder-img" width="100%" height="100%" src="img/baners/ban1.png" preserveAspectRatio="xMidYMid slice" focusable="true" role="img"><rect width="100%" height="100%" /></img>
      </div>

      {{--carrusel 2--}}
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%" src="img/baners/ban2.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" /></img>
      </div>

      {{--carrusel 3--}}
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%" src="img/baners/ban3.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" /></img>
      </div>

      {{--carrusel 4--}}
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%" src="img/baners/ban4.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" /></img>
      </div>
    </div>
    {{--control de carrusel--}}
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  {{-- tarjetas  --}}
  <div class="row row-cols-1 row-cols-md-3">
    <div class="col-md-4 col-sm-12">
      <a id="urlcard" href="/portal#marco_juridico"><div class="card h-100">
        <div class="row no-gutters">
          <div class="card-body">
            <h5 class="card-title">MARCO JURÍDICO</h5>
              <p class="card-text">
                Operaciones del presupuesto <br>
                Disciplina finaciera <br>
                Contabilidad gubernamental <br>
                Fiscalización <br>
                Formatos
              </p>
          </div>
          <div class="imagen">
            <img src="img/icons/01.png" class="card-img" alt="...">
          </div>
        </div>
        </a>
      </div>
    </div>
    <div class="col md-4">
      <a id="urlcard" href="/portal#checa_tu_lana"><div class="card h-100">
        <div class="row no-gutters">
          <div class="card-body">
            <h5 class="card-title">CHECA TU LANA</h5>
              <p class="card-text">
                Planeación <br>
                Programación <br>
                Presupuestación <br>
                Ejercicio y control <br>
                Seguimiento <br>
                Evaluación <br>
                Rendición de cuentas 
              </p>
          </div>
          <div class="imagen">
            <img src="img/icons/02.png" class="card-img" alt="...">
          </div>
        </div>
      </div>
      </a>
    </div>
    <div class="col md-4">
      <a id="urlcard" href="/portal"><div class="card h-100">
        <div class="row no-gutters">
          <div class="card-body">
            <h5 class="card-title">PARTICIPACIÓN CIUDADANA</h5>
              <p class="card-text">
                Plat. digital avancemos todos<br>
                Índice<br>
                Decidiendo juntos <br>
                Proponle a Zacatecas <br>
                Obra transparente <br>
                Deuda Pública <br>
              </p>
          </div>
          <div class="col-md-2 col-sm-auto">
            <img src="img/icons/03.png" class="card-img" alt="...">
          </div>
        </div>
      </div>
      </a>
    </div>
    <div class="col md-4">
      <a id="urlcard" href="/portal"><div class="card h-1000" id = "bottom">
        <div class="row no-gutters">
          <div class="card-body">
            <h5 class="card-title">PROGRAMAS Y ACCIONES</h5>
              <p class="card-text">
                Programas sociales<br>
                Programas económicos<br>
                Agua y medio ambiente<br>
                Otros Programas<br>
                Obra pública <br>
              </p>
          </div>
          <div class="imagen">
            <img src="img/icons/04.png" class="card-img" alt="...">
          </div>
        </div>
      </div>
      </a>
    </div>
    <div class="col md-4">
      <a id="urlcard" href="/portal"><div class="card h-100" id = "bottom">
        <div class="row no-gutters">
          <div class="card-body">
            <h5 class="card-title">SISTEMA DE EVALUACIÓN</h5>
              <p class="card-text">
                Evaluación al desempeno<br>
                Programa anual de evaluación<br>
                Resultado de las evaluaciones<br>
              </p>
          </div>
          <div class="imagen">
            <img src="img/icons/05.png" class="card-img" alt="...">
          </div>
        </div>
      </div>
      </a>
    </div>
    <div class="col md-4">
      <a id="urlcard" href="/portal"><div class = "card h-100" id = "bottom">
        <div class="row no-gutters">
          <div class="card-body">
            <h5 class="card-title">FISCALIZACIÓN</h5>
              <p class="card-text">
                Programas de fiscalización<br>
                Estadísticas<br>
              </p>
          </div>
          <div class="imagen">
            <img src="img/icons/06.png" class="card-img" alt="...">
          </div>
        </div>
      </div>
      </a>
    </div>
  </div>
</main>

{{-- footer  --}}
<footer>
<div class="partFooter">
    <div class="row align-items-center">
      <img src="img/imgfooter.png" alt="">
    </div>
  </div>
  <div class="partFooter" id="contacto">
    <br>
    <h4>Contacto
    <br>Circuito Cerro del Gato s/n
    <br>Colonia Ciudad Administrativa 
    <br>C.P 98160 
    <br>Zacatecas,Zac
    </h4>
    <a href="#">Términos de uso</a>
    <a href="#">Mapa del Sitio</a>
    </div>
  </div>
  <div class="partFooter" id="informacion">
    <br>
    <h3 class = "titulo">¿Qué es checa tu lana?</h3>
    <p id=> Es el portal para dar a conocer los mecanismos y acciones del gobierno de Zacatecas para incorporar a la sociedad en su toma de desiciones.</p>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>