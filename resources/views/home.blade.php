<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contenido</title>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>
</head>

<body>
  <div>
      <header>
          <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="#"><img src="img/brand.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
            </div>
          </nav>
      
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="bd-placeholder-img" width="100%" height="100%" src="img/baners/ban1.png" preserveAspectRatio="xMidYMid slice" focusable="true" role="img"><rect width="100%" height="100%" /></img>
                <div class="container">
                 
                </div>
              </div>
              <div class="carousel-item">
                <img class="bd-placeholder-img" width="100%" height="100%" src="img/baners/ban2.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" /></img>
                <div class="container">
                  <div class="carousel-caption">
                    <!--<h1>Another example headline.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>-->
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img class="bd-placeholder-img" width="100%" height="100%" src="img/baners/ban3.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" /></img>
                <div class="container">
                  <!--<div class="carousel-caption text-right">
                    <h1>One more for good measure.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                  </div>-->
                </div>
              </div>
              <div class="carousel-item">
                <img class="bd-placeholder-img" width="100%" height="100%" src="img/baners/ban4.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" /></img>
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
      </header>  
          <aside>
            <article>
              <div class="sidenav">
                <a href="#marco_juridico">Marco Juridico</a>
                <a href="#checa_tulana">Checa tu lana</a>
                <a href="#trasparencia">Trasparencia</a>
                <a href="#capacitacion">Capacitaciones</a>
                <a href="#datos_abiertos">Datos Abiertos</a>
              </div>
            </article>
          </aside>
        
        <section >
          <h2>MARCO JURIDICO</h2>
         <!-- <img src="img/icons/01.png" width="15px" height="15px"  alt="">-->
            <div id="accordion" class="myaccordion">
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h2 class="mb-0">
                    <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      Operaciones del presupuesto
                      <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                      </span>
                    </button>
                  </h2>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                    <ul>
                      <li>Constitución Politica Federal y Estatal</li>
                      <li>Ley de Planeación del Estados de Zacatecas</li>
                      <li>Linemientos para la Integración del Anteproyecto</li>
                      <li>Lineamiento para la operación del PbR</li>
                      <li>Leyes hacendarias y de coordinación fiscal Federal, Estatal y Municipal</li>
                      <li>Proyectos (Paquete Económico)(Falta)</li>
                      <li>Ley de Ingresos Federal y Estatal</li>
                      <li>Decreto de Presupuesto Federal y Estatal</li>
                    
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingTwo">
                  <h2 class="mb-0">
                    <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Disciplina financiera
                      <span class="fa-stack fa-2x">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                      </span>
                    </button>
                  </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                  <div class="card-body">
                    <ul>
                      <li>Informatics</li>
                      <li>Mathematics</li>
                      <li>Greek</li>
                      <li>Biostatistics</li>
                      <li>English</li>
                      <li>Nursing</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingThree">
                  <h2 class="mb-0">
                    <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Contabilidad gubernamental
                      <span class="fa-stack fa-2x">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                      </span>
                    </button>
                  </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                  <div class="card-body">
                    <ul>
                      <li>Astrophysics</li>
                      <li>Informatics</li>
                      <li>Criminology</li>
                      <li>Economics</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingThree">
                  <h2 class="mb-0">
                    <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Contabilidad gubernamental
                      <span class="fa-stack fa-2x">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                      </span>
                    </button>
                  </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                  <div class="card-body">
                    <ul>
                      <li>Astrophysics</li>
                      <li>Informatics</li>
                      <li>Criminology</li>
                      <li>Economics</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingThree">
                  <h2 class="mb-0">
                    <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Contabilidad gubernamental
                      <span class="fa-stack fa-2x">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                      </span>
                    </button>
                  </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                  <div class="card-body">
                    <ul>
                      <li>Astrophysics</li>
                      <li>Informatics</li>
                      <li>Criminology</li>
                      <li>Economics</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>


        </section>
  </div>
   
</body>
</html>