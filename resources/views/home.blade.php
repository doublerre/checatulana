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
    <style> 
        .card-img {
        width: 110px;
        height: auto;
        align: center;
      }
      .card-img-download{
        width: 80px;
        height: auto;
        align: center;
      }
    </style>
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
                  <div class="carousel-caption ">
                    <!--<h1>PRESUPUESTOS DE EGRESOS 2019</h1>
                    <p><strong>$5,894,356.9</strong></p>-->
                  </div>
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
                <a href="#marco_juridico">Marco Jurídico</a>
                <a href="#checa_tulana">Checa tu lana</a>
                <a href="#transparencia">Transparencia</a>
                <a href="#capacitacion">Capacitaciones</a>
                <a href="#datos_abiertos">Datos Abiertos</a>
              </div>
            </article>
          </aside>
        
        <section id = "marco_juridico">
          <h2>
              MARCO JURÍDICO
              <!-- Esto es para poder separar el texto y la imagen (emula las tabulaciones), será temporal mientras encuentro la solución -->
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <img src="img/icons/01.png" class="card-img" alt="...">
          </h2>
          <!-- <img src="img/icons/01.png" width="15px" height="15px"  alt="">-->
            <div id="accordion" class="myaccordion">
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h3 class="mb-0">
                    <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      Operaciones del presupuesto
                      <span class="fa-stack fa-2x">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-plus fa-stack-1x fa-inverse"></i> 
                      </span>
                    </button>
                  </h3>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                    <div class = "card-pdf" id = "headingPdf">
                      <a class="btn1 btn-link" data-toggle="collapse" data-target="#collapsePdf" aria-expanded="true" aria-controls="collapsePdf">
                      <p>Constitución Politica Federal y Estatal</p>
                      </a>
                    </div>
                    <div id="collapsePdf" class="collapse" aria-labelledby="headingOne" data-parent="#headingPdf">
                      <div class="card-body">
                        <div class = "row">
                          <div class="col-sm-6">
                            <div class = "card">
                              <div class="card-body">
                                <div class="card-title-pdf">
                                    Constitución Política del Estado
                                </div>
                                <div class="card text-center">
                                  <p></p>
                                  <a href="ruta/archivo" download="archivoADescargar"><img src="img/icons/pdf.png" class="card-img-download" alt="..."></a>
                                </div>
                              </div> 
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class = "card">
                              <div class="card-body">
                                <div class="card-title-pdf">
                                    Constitución Política Federal
                                </div>
                                <div class="card text-center">
                                  <p></p>
                                  <a href="ruta/archivo" download="archivoADescargar"><img src="img/icons/pdf.png" class="card-img-download" alt="..."></a>
                                </div>
                              </div> 
                            </div>
                          </div>
                        </div>
                      </div>  
                    </div>
                    <p>Ley de Planeación del Estados de Zacatecas</p>
                    <p>Linemientos para la Integración del Anteproyecto</p>
                    <p>Lineamiento para la operación del PbR</p>
                    <p>Leyes hacendarias y de coordinación fiscal Federal, Estatal y Municipal</p>
                    <p>Proyectos (Paquete Económico)(Falta)</p>
                    <p>Ley de Ingresos Federal y Estatal</p>
                    <p>Decreto de Presupuesto Federal y Estatal</p>
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
                      <li>Texto</li>
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
                      <li>Texto</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingFour">
                  <h2 class="mb-0">
                    <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      Fiscalización
                      <span class="fa-stack fa-2x">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                      </span>
                    </button>
                  </h2>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                  <div class="card-body">
                    <ul>
                      <li>Texto</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingFive">
                  <h2 class="mb-0">
                    <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      Formatos
                      <span class="fa-stack fa-2x">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                      </span>
                    </button>
                  </h2>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                  <div class="card-body">
                    <ul>
                      <li>Texto</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
        </section>

        <section id = "checa_tulana">
          <h2>
            CHECA TU LANA
            <!-- Esto es para poder separar el texto y la imagen (emula las tabulaciones), será temporal mientras encuentro la solución -->
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="img/icons/02.png" class="card-img" alt="...">
          </h2>
          <!-- <img src="img/icons/01.png" width="15px" height="15px"  alt="">-->
            <div id="accordion" class="myaccordion">
              <div class="card">
                <div class="card-header" id="headingEight">
                  <h2 class="mb-0">
                    <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                      Planeación
                      <span class="fa-stack fa-sm">
                      <i class="fas fa-plus fa-stack-1x fa-inverse"></i> 
                      </span>
                    </button>
                  </h2>
                </div>
                <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                  <div class="card-body">
                    <ul>
                      <li>Texto</li>
                    
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingNine">
                  <h2 class="mb-0">
                    <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                      Programación
                      <span class="fa-stack fa-2x">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                      </span>
                    </button>
                  </h2>
                </div>
                <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
                  <div class="card-body">
                    <ul>
                      <li>Texto</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingTen">
                  <h2 class="mb-0">
                    <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                      Presupuestación
                      <span class="fa-stack fa-2x">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                      </span>
                    </button>
                  </h2>
                </div>
                <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion">
                  <div class="card-body">
                    <ul>
                      <li>Texto</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingEleven">
                  <h2 class="mb-0">
                    <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                      Ejercicio y control
                      <span class="fa-stack fa-2x">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                      </span>
                    </button>
                  </h2>
                </div>
                <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordion">
                  <div class="card-body">
                    <ul>
                      <li>Texto</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingTwelve">
                  <h2 class="mb-0">
                    <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                      Seguimiento
                      <span class="fa-stack fa-2x">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                      </span>
                    </button>
                  </h2>
                </div>
                <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordion">
                  <div class="card-body">
                    <ul>
                      <li>Texto</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingThirteen">
                  <h2 class="mb-0">
                    <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                      Evaluación
                      <span class="fa-stack fa-2x">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                      </span>
                    </button>
                  </h2>
                </div>
                <div id="collapseThirteen" class="collapse" aria-labelledby="headingThirteen" data-parent="#accordion">
                  <div class="card-body">
                    <ul>
                      <li>Texto</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingFourteen">
                  <h2 class="mb-0">
                    <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                      Rendición de cuentas
                      <span class="fa-stack fa-2x">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                      </span>
                    </button>
                  </h2>
                </div>
                <div id="collapseFourteen" class="collapse" aria-labelledby="headingFourteen" data-parent="#accordion">
                  <div class="card-body">
                    <ul>
                      <li>Texto</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
        </section>

        <section id = "transparencia">
          <h2>
              TRANSPARENCIA
              <!-- Esto es para poder separar el texto y la imagen (emula las tabulaciones), será temporal mientras encuentro la solución -->
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <img src="img/icons/06.png" class="card-img" alt="...">
          </h2>
          <!-- <img src="img/icons/01.png" width="15px" height="15px"  alt="">-->
            <div id="accordion" class="myaccordion">
              <div class="card">
                <div class="card-header" id="headingFifteen">
                  <h2 class="mb-0">
                    <button class="header d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                      Apartado #1
                      <span class="fa-stack fa-sm">
                      <i class="fas fa-plus fa-stack-1x fa-inverse"></i> 
                      </span>
                    </button>
                  </h2>
                </div>
                <div id="collapseFifteen" class="collapse" aria-labelledby="headingFifteen" data-parent="#accordion">
                  <div class="card-body">
                    <ul>
                    <li>Texto</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingSixteen">
                  <h2 class="mb-0">
                    <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
                      Apartado #2
                      <span class="fa-stack fa-2x">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                      </span>
                    </button>
                  </h2>
                </div>
                <div id="collapseSixteen" class="collapse" aria-labelledby="headingSixteen" data-parent="#accordion">
                  <div class="card-body">
                    <ul>
                    <li>Texto</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
        </section>

        <section id = "capacitacion">
          <h2>
              CAPACITACIONES
              <!-- Esto es para poder separar el texto y la imagen (emula las tabulaciones), será temporal mientras encuentro la solución -->
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <img src="img/icons/03.png" class="card-img" alt="...">
          </h2>
          <!-- <img src="img/icons/01.png" width="15px" height="15px"  alt="">-->
            <div id="accordion" class="myaccordion">
              <div class="card">
                <div class="card-header" id="headingSeventeen">
                  <h2 class="mb-0">
                    <button class="header d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen">
                      Apartado #1
                      <span class="fa-stack fa-sm">
                      <i class="fas fa-plus fa-stack-1x fa-inverse"></i> 
                      </span>
                    </button>
                  </h2>
                </div>
                <div id="collapseSeventeen" class="collapse" aria-labelledby="headingSeventeen" data-parent="#accordion">
                  <div class="card-body">
                    <ul>
                    <li>Texto</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingEightteen">
                  <h2 class="mb-0">
                    <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEightteen" aria-expanded="false" aria-controls="collapseEightteen">
                      Apartado #2
                      <span class="fa-stack fa-2x">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                      </span>
                    </button>
                  </h2>
                </div>
                <div id="collapseEightteen" class="collapse" aria-labelledby="headingEightteen" data-parent="#accordion">
                  <div class="card-body">
                    <ul>
                    <li>Texto</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
        </section>

        <section id = "datos_abiertos">
          <h2>
              DATOS ABIERTOS
              <!-- Esto es para poder separar el texto y la imagen (emula las tabulaciones), será temporal mientras encuentro la solución -->
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <img src="img/icons/04.png" class="card-img" alt="...">
          </h2>
          <!-- <img src="img/icons/01.png" width="15px" height="15px"  alt="">-->
            <div id="accordion" class="myaccordion">
              <div class="card">
                <div class="card-header" id="headingNineteen">
                  <h2 class="mb-0">
                    <button class="header d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNineteen" aria-expanded="false" aria-controls="collapseNineteen">
                      Apartado #1
                      <span class="fa-stack fa-sm">
                      <i class="fas fa-plus fa-stack-1x fa-inverse"></i> 
                      </span>
                    </button>
                  </h2>
                </div>
                <div id="collapseNineteen" class="collapse" aria-labelledby="headingNineteen" data-parent="#accordion">
                  <div class="card-body">
                    <ul>
                    <li>Texto</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingTwenty">
                  <h2 class="mb-0">
                    <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwenty">
                      Apartado #2
                      <span class="fa-stack fa-2x">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                      </span>
                    </button>
                  </h2>
                </div>
                <div id="collapseTwenty" class="collapse" aria-labelledby="headingTwenty" data-parent="#accordion">
                  <div class="card-body">
                    <ul>
                    <li>Texto</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
        </section>
      </div>
      <script> 
        $('button').click(function() { 
            $(this).find('i').toggleClass('fas fa-plus fas fa-minus'); 
        }); 
      </script>
</body>
</html>