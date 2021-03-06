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
  </head>
  <body>
    <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#"><img src="img/brand-sin-fondo.png" alt="" id = "brand"></a>
    <a class="navbar-brand" href="{{url('login')}}" >Iniciar Sesion</a>
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

<main role="main">

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!--<ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>-->
    <div class="carousel-inner">
      {{--carrusel 1--}}
      <div class="carousel-item active">
        <img class="bd-placeholder-img" width="100%" height="100%" src="img/baners/banner-01.png" preserveAspectRatio="xMidYMid slice" focusable="true" role="img"><rect width="100%" height="100%" /></img>
      </div>

      {{--carrusel 2--}}
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%" src="img/baners/banner-02.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" /></img>
      </div>

      {{--carrusel 3--}}
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%" src="img/baners/banner-03.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" /></img>
      </div>

      {{--carrusel 4--}}
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%" src="img/baners/banner-04.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" /></img>
      </div>

      {{--carrusel 5--}}
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%" src="img/baners/banner-06.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" /></img>
      </div>

      {{--carrusel 6--}}
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%" src="img/baners/banner-07.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" /></img>
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
  <div class="cards">
    <div class="row row-cols-1 row-cols-md-3 row-col-sm-6 row-col-xs-12">
      <div class="col-md-4 col-sm-6 col-xs-12">
        <a id="urlcard" href="/portal#marco_juridico"><div class="card h-100" id="top1">
          <div class="row no-gutters">
            <div class="card-body">
              <h5 class="card-title" id="marcoJuridico">MARCO JUR??DICO</h5>
                <p class="card-text">
                  Operaciones del presupuesto <br>
                  Disciplina finaciera <br>
                  Contabilidad gubernamental <br>
                  Fiscalizaci??n <br>
                  Formatos
                </p>
            </div>
            <div class="col-xs-1">
              <img src="img/icons/01.png" class="card-img" alt="...">
            </div>
          </div>
          </a>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <a id="urlcard" href="/portal#checa_tu_lana"><div class="card h-100" id="top2">
          <div class="row no-gutters">
            <div class="card-body">
              <h5 class="card-title" id="checaTuLana">CHECA TU LANA</h5>
                <p class="card-text">
                  Planeaci??n <br>
                  Programaci??n <br>
                  Presupuestaci??n <br>
                  Ejercicio y control <br>
                  Seguimiento <br>
                  Evaluaci??n <br>
                  Rendici??n de cuentas 
                </p>
            </div>
            <div class="col-xs-1">
              <img src="img/icons/02.png" class="card-img" alt="...">
            </div>
          </div>
        </div>
        </a>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <a id="urlcard" href="/portal"><div class="card h-100">
          <div class="row no-gutters">
            <div class="card-body">
              <h5 class="card-title" id="partCiudadana">PARTICIPACI??N CIUDADANA</h5>
                <p class="card-text">
                  Plat. digital avancemos todos<br>
                  ??ndice<br>
                  Decidiendo juntos <br>
                  Proponle a Zacatecas <br>
                  Obra transparente <br>
                  Deuda P??blica <br>
                </p>
            </div>
            <div class="col-xs-1">
              <img src="img/icons/03.png" class="card-img" alt="...">
            </div>
          </div>
        </div>
        </a>
      </div> 
      <div class="col-md-4 col-sm-6 col-xs-12">
        <a id="urlcard" href="/portal"><div class="card h-1000" id = "bottom">
          <div class="row no-gutters">
            <div class="card-body">
              <h5 class="card-title" id="programasAcciones">PROGRAMAS Y ACCIONES</h5>
                <p class="card-text">
                  Programas sociales<br>
                  Programas econ??micos<br>
                  Agua y medio ambiente<br>
                  Otros Programas<br>
                  Obra p??blica <br>
                </p>
            </div>
            <div class="col-xs-1">
              <img src="img/icons/04.png" class="card-img" alt="...">
            </div>
          </div>
        </div>
        </a>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <a id="urlcard" href="/portal"><div class="card h-100" id = "bottom">
          <div class="row no-gutters">
            <div class="card-body">
              <h5 class="card-title" id="sistEvaluacion">SISTEMA DE EVALUACI??N</h5>
                <p class="card-text">
                  Evaluaci??n al desempe??o<br>
                  Programa anual de evaluaci??n<br>
                  Resultado de las evaluaciones<br>
                </p>
            </div>
            <div class="col-xs-1">
              <img src="img/icons/05.png" class="card-img" alt="...">
            </div>
          </div>
        </div>
        </a>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <a id="urlcard" href="/portal"><div class = "card h-100" id = "bottom">
          <div class="row no-gutters">
            <div class="card-body">
              <h5 class="card-title">FISCALIZACI??N</h5>
                <p class="card-text">
                  Programas de fiscalizaci??n<br>
                  Estad??sticas<br>
                </p>
            </div>
            <div class="col-xs-1">
              <img src="img/icons/06.png" class="card-img" alt="...">
            </div>
          </div>
        </div>
        </a>
      </div>
    </div>
  </div>
</main>

{{-- footer  --}}
<footer>
  <div class="partFooter">
    <div class="row align-items-center" id = "logoPresupuesto">
      <img src="img/img-footer-sin-fondo.png" alt="">
    </div>
  </div>
  <div class="partFooter" id="contacto">
    <br>
    <h4 class = "infoContacto">
      Contacto
      <br>Circuito Cerro del Gato s/n
      <br>Colonia Ciudad Administrativa 
      <br>C.P 98160 
      <br>Zacatecas,Zac
    </h4>
    <a href="#">T??rminos de uso</a>
    <a href="#">Mapa del Sitio</a>
  </div>
  <div class="partFooter" id="informacion">
    <br>
    <h3 class = "titulo">??Qu?? es checa tu lana?</h3>
    <p id> Es el portal para dar a conocer los mecanismos y acciones del gobierno de Zacatecas para incorporar a la sociedad en su toma de desiciones.</p>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

