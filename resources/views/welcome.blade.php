<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="Joni" content="">
    <title>Checa Tu Lana</title>

    <!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
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
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="/login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/register">Registro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Capacitaciones</a>
        </li>
      </ul>
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
      <div class="carousel-item active">
        <img class="bd-placeholder-img" width="100%" height="100%" src="img/zac/zac1.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" /></img>
        <div class="container">
         <!-- <div class="carousel-caption text-left">
            <h1>Example headline.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
          </div>-->
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%" src="img/zac/zac2.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" /></img>
        <div class="container">
          <div class="carousel-caption">
            <!--<h1>Another example headline.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>-->
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%" src="img/zac/zac3.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" /></img>
        <div class="container">
          <!--<div class="carousel-caption text-right">
            <h1>One more for good measure.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
          </div>-->
        </div>
      </div>
    </div>
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
    
          <div class="col mb-4">
              <div class="card h-100">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="img/icons/01.png" class="card-img" alt="...">
                  </div>
                <div class="card-body">
                  <h5 class="card-title">MARCO JURIDICO</h5>
                  <p class="card-text">
                     Operaciones del presupuesto <br>
                    Disciplina finaciera <br>
                    Contabilidad Gubernamental <br>
                    Fiscalizacion <br>
                    Formatos
                  </p>
                </div>
              </div>
              </div>
        </div>
        <div class="col mb-4">
          <div class="card h-100">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="img/icons/02.png" class="card-img" alt="...">
              </div>
            <div class="card-body">
              <h5 class="card-title">CHECA TU LANA</h5>
              <p class="card-text">
                Planeacion <br>
                Programacion <br>
                Presupuestacion <br>
                Ejercicio y control <br>
                Seguimiento <br>
                Evaluacion <br>
                Rendicion de cuentas 
             </p>
            </div>
          </div>
          </div>
      </div>
      <div class="col mb-4">
        <div class="card h-100">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="img/icons/03.png" class="card-img" alt="...">
            </div>
          <div class="card-body">
            <h5 class="card-title">PARTICIPACION CIUDADANA</h5>
            <p class="card-text">
              Plataforma digital avancemos todos<br>
              Indice<br>
              Decidiendo juntos <br>
              Proponle a Zacatecas <br>
              Obra transparente <br>
              Deuda Publica <br>
           </p>
          </div>
        </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="card h-100">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="img/icons/04.png" class="card-img" alt="...">
            </div>
          <div class="card-body">
            <h5 class="card-title">PROGRAMAS Y ACCIONES</h5>
            <p class="card-text">
              Programas Sociales<br>
              Programas economicos<br>
              Agua y medio ambiente<br>
              Otros Programas<br>
              Obra Publica <br>
           </p>
          </div>
        </div>
      </div>
    </div>
      <div class="col mb-4">
        <div class="card h-100">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="img/icons/05.png" class="card-img" alt="...">
            </div>
          <div class="card-body">
            <h5 class="card-title">SISTEMA DE EVALUACION</h5>
            <p class="card-text">
              Evaluacion al desempeno<br>
              Programa anual de Evaluacion<br>
              Resultado de las evaluaciones<br>
           </p>
          </div>
        </div>
      </div>
      </div>
    <div class="card  h-100 bm-4">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="img/icons/06.png" class="card-img" alt="...">
          </div>
          <div class="card-body">
            <h5 class="card-title">FISCALIZACION</h5>
            <p class="card-text">
              Programas de fiscalizacion<br>
              Estadisticas<br>
           </p>
          </div>
        </div>
      </div>
    </div>
     
</div>



</main>
<footer>
  <div class="partFooter">
      <img src="img/imgfooter.png" alt="">
  </div>

  <div class="partFooter">
      <h4>Contacto</h4>
      <h4>Circuito Cerro del Gato s/n
      Colonia Ciudad Administrativa 
      C.P 98160 
      Zacatecas,Zac
      </h4>
      <a href="#">Terminos de uso</a>
      <a href="#">Mapa del Sitio</a>
  </div>
  <div class="partFooter">
      <h3>Que es checa tu lana?</h3>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>