<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contenido</title>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/content.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>
    <script src="https://kit.fontawesome.com/9e04c77571.js" crossorigin="anonymous"></script>

    <script>
      const colors = ["rgb(104, 101, 101)","orange"];
      const colors2 = ["#2047bd","#091b53"];
      const imagen = ["img/icons/01.png","img/icons/02.png"];
      function cambiacolor_texto(elemento){ 
        var current = Number(elemento.dataset.ci || 0); // init to 0 on first click
        current = (current + 1) % colors.length; // clamp array index
        elemento.dataset.ci = current; // store new value in element
        elemento.style.color = colors[current]; // set color
      }
      function cambiacolor_texto2(elemento){ 
        var current = Number(elemento.dataset.ci || 0); // init to 0 on first click
        current = (current + 1) % colors2.length; // clamp array index
        elemento.dataset.ci = current; // store new value in element
        elemento.style.color = colors2[current]; // set color
      }
    </script>

    <style> 
      .card-img {
        width: 100px;
        height: auto;
        align: center;
      }
      .card-img-download{
        width: 80px;
        height: auto;
        align: center;
      }
      h2:target {
      color: white;
      background: #1c87c9;
    }
    </style>
</head>  
<body>
  <div>
      <header>
          <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="/"><img src="img/brand.png" alt=""></a>
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
              {{--carrusel 6--}}
              <div class="carousel-item">
                <img class="bd-placeholder-img" width="100%" height="100%" src="img/baners/banner-06.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" /></img>
              </div>
              {{--carrusel 7--}}
              <div class="carousel-item">
                <img class="bd-placeholder-img" width="100%" height="100%" src="img/baners/banner-07.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" /></img>
              </div>
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
    </header>  

          <aside>
            <article>
              <div class="sidenav">
                <a href="#marco_juridico">Marco Jurídico</a>
                <a href="#checa_tu_lana">Checa tu lana</a>
                <a href="#transparencia">Transparencia</a>
                <a href="#capacitacion">Capacitaciones</a>
                <a href="#datos_abiertos">Datos Abiertos</a>
              </div>
            </article>
          </aside>
        
        <section id ="marco_juridico">
          <a href=""><h2>
              MARCO JURÍDICO
              <!-- Esto es para poder separar el texto y la imagen (emula las tabulaciones), será temporal mientras encuentro la solución -->
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <img src="img/icons/01.png" class="card-img" alt="..." >
          </h2></a>
          <!-- <img src="img/icons/01.png" width="15px" height="15px"  alt="">-->
            <div id="accordion" class="myaccordion">
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h3 class="mb-0">
                    <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" onclick="cambiacolor_texto2(this);">
                      Operaciones del presupuesto
                      <span class="fa-stack fa-2x">
                        <i class="fas fa-stack-2x"></i>
                        <i class="fas fa-plus fa-stack-2x"></i> 
                      </span>
                    </button>
                  </h3>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne">
                  <div class="card-body-contenido">
                    <br>
                    <div class = "card-pdf" id = "headingPdf">
                      <a class="btn1 btn-link" data-toggle="collapse" data-target="#collapsePdf" aria-expanded="true" aria-controls="collapsePdf">
                      <p onclick="cambiacolor_texto(this);">Constitución Politica Federal y Estatal</p>
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
                                  <a href="http://www.finanzas.gob.mx/contenido/InformacionFinanciera/Constituciones/CPELYSZ.pdf" target="_blank"download="archivoADescargar"><img src="img/icons/pdf.png" class="card-img-download" alt="..."></a>
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
                                  <a href="https://www.dof.gob.mx/constitucion/marzo_2014_constitucion.pdf" target="_blank" download="archivoADescargar"><img src="img/icons/pdf.png" class="card-img-download" alt="..."></a>
                                </div>
                              </div> 
                            </div>
                          </div>
                        </div>
                      </div>  
                    </div>
                  </p><a class="link-article" href="/articulo/ley-de-planeacion-del-estados-de-zacatecas">Ley de Planeación del Estados de Zacatecas</a></p>
                  </p> <a class="link-article" href="/articulo/ley-de-planeacion-del-estados-de-zacatecas">Linemientos para la Integración del Anteproyecto</a> </p>
                  <p> <a class="link-article" href="/articulo/ley-de-planeacion-del-estados-de-zacatecas">Lineamiento para la operación del PbR</a> </p>
                    <p><a class="link-article" href="/articulo/ley-de-planeacion-del-estados-de-zacatecas">Leyes hacendarias y de coordinación fiscal Federal, Estatal y Municipal</a> </p>
                    <p> <a class="link-article" href="/articulo/ley-de-planeacion-del-estados-de-zacatecas">Proyectos (Paquete Económico)(Falta)</a> </p>
                    <p><a class="link-article" href="/articulo/ley-de-planeacion-del-estados-de-zacatecas">Ley de Ingresos Federal y Estatal</a> </p>
                    <p><a class="link-article" href="/articulo/ley-de-planeacion-del-estados-de-zacatecas">Decreto de Presupuesto Federal y Estatal</a></p>
                    <br>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingTwo">
                  <h2 class="mb-0">
                    <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" onclick="cambiacolor_texto2(this);">
                      Disciplina financiera
                      <span class="fa-stack fa-2x">
                        <i class="fas fa-stack-2x"></i>
                        <i class="fas fa-plus fa-stack-2x"></i> 
                      </span>
                    </button>
                  </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo">
                  <div class="card-body-contenido">
                    <ul>
                      <li>Texto</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingThree">
                  <h2 class="mb-0">
                    <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" onclick="cambiacolor_texto2(this);">
                      Contabilidad gubernamental
                      <span class="fa-stack fa-2x">
                        <i class="fas fa-stack-2x"></i>
                        <i class="fas fa-plus fa-stack-2x"></i> 
                      </span>
                    </button>
                  </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree">
                  <div class="card-body-contenido">
                    <ul>
                      <li>Texto</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingFour">
                  <h2 class="mb-0">
                    <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" onclick="cambiacolor_texto2(this);">
                      Fiscalización
                      <span class="fa-stack fa-2x">
                        <i class="fas fa-stack-2x"></i>
                        <i class="fas fa-plus fa-stack-2x"></i> 
                      </span>
                    </button>
                  </h2>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour">
                  <div class="card-bod-contenido">
                    <ul>
                      <li>Texto</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingFive">
                  <h2 class="mb-0">
                    <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" onclick="cambiacolor_texto2(this);">
                      Formatos
                      <span class="fa-stack fa-2x">
                        <i class="fas fa-stack-2x"></i>
                        <i class="fas fa-plus fa-stack-2x"></i> 
                      </span>
                    </button>
                  </h2>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive">
                  <div class="card-body-contenido">
                    <ul>
                      <li>Texto</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <!-- Este div es para que evite ponerse la barra pegajosa sobre el titulo de la sección, y en lugar se posicione en aquí-->
        <div id ="checa_tu_lana">
          <br>
          <br>
          <br>
          <br>
        </div>

        <div name = "checa_tulana">
          <h2>
            CHECA TU LANA
            <!-- Esto es para poder separar el texto y la imagen (emula las tabulaciones), será temporal mientras encuentro la solución -->
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="img/icons/02.png" class="card-img" alt="...">
          </h2>
          <!-- <img src="img/icons/01.png" width="15px" height="15px"  alt="">-->
            <div id="accordion2" class="myaccordion">
              <div class="card">
                <div class="card-header" id="headingEight">
                  <h2 class="mb-0">
                    <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight" onclick="cambiacolor_texto2(this);">
                      Planeación
                      <span class="fa-stack fa-2x">
                        <i class="fas fa-stack-2x"></i>
                        <i class="fas fa-plus fa-stack-2x"></i> 
                      </span>
                    </button>
                  </h2>
                </div>
                <div id="collapseEight" class="collapse" aria-labelledby="headingEight">
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
                    <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine" onclick="cambiacolor_texto2(this);">
                      Programación
                      <span class="fa-stack fa-2x">
                        <i class="fas fa-stack-2x"></i>
                        <i class="fas fa-plus fa-stack-2x"></i> 
                      </span>
                    </button>
                  </h2>
                </div>
                <div id="collapseNine" class="collapse" aria-labelledby="headingNine">
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
                    <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen" onclick="cambiacolor_texto2(this);">
                      Presupuestación
                      <span class="fa-stack fa-2x">
                        <i class="fas fa-stack-2x"></i>
                        <i class="fas fa-plus fa-stack-2x"></i> 
                      </span>
                    </button>
                  </h2>
                </div>
                <div id="collapseTen" class="collapse" aria-labelledby="headingTen">
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
                    <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven" onclick="cambiacolor_texto2(this);">
                      Ejercicio y control
                      <span class="fa-stack fa-2x">
                        <i class="fas fa-stack-2x"></i>
                        <i class="fas fa-plus fa-stack-2x"></i> 
                      </span>
                    </button>
                  </h2>
                </div>
                <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven">
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
                    <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve" onclick="cambiacolor_texto2(this);">
                      Seguimiento
                      <span class="fa-stack fa-2x">
                        <i class="fas fa-stack-2x"></i>
                        <i class="fas fa-plus fa-stack-2x"></i> 
                      </span>
                    </button>
                  </h2>
                </div>
                <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve">
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
                    <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen" onclick="cambiacolor_texto2(this);">
                      Evaluación
                      <span class="fa-stack fa-2x">
                        <i class="fas fa-stack-2x"></i>
                        <i class="fas fa-plus fa-stack-2x"></i> 
                      </span>
                    </button>
                  </h2>
                </div>
                <div id="collapseThirteen" class="collapse" aria-labelledby="headingThirteen">
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
                    <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen" onclick="cambiacolor_texto2(this);">
                      Rendición de cuentas
                      <span class="fa-stack fa-2x">
                        <i class="fas fa-stack-2x"></i>
                        <i class="fas fa-plus fa-stack-2x"></i> 
                      </span>
                    </button>
                  </h2>
                </div>
                <div id="collapseFourteen" class="collapse" aria-labelledby="headingFourteen">
                  <div class="card-body">
                    <ul>
                      <li>Texto</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <!-- Este div es para que evite ponerse la barra pegajosa sobre el titulo de la sección, y en lugar se posicione en aquí-->
        <div id ="transparencia">
          <br>
          <br>
          <br>
          <br>
        </div>

        <div name = "transparencia">
          <h2>
              TRANSPARENCIA
              <!-- Esto es para poder separar el texto y la imagen (emula las tabulaciones), será temporal mientras encuentro la solución -->
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <img src="img/icons/06.png" class="card-img" alt="...">
          </h2>
          <!-- <img src="img/icons/01.png" width="15px" height="15px"  alt="">-->
            <div id="accordion3" class="myaccordion">
              <div class="card">
                <div class="card-header" id="headingFifteen">
                  <h2 class="mb-0">
                    <button class="header d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen" onclick="cambiacolor_texto2(this);">
                      Plataforma Nacional de Transparencia
                      <span class="fa-stack fa-sm">
                        <i class="fas fa-stack-2x"></i>
                        <i class="fas fa-plus fa-stack-2x"></i> 
                      </span>
                    </button>
                  </h2>
                </div>
                <div id="collapseFifteen" class="collapse" aria-labelledby="headingFifteen">
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
                    <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen" onclick="cambiacolor_texto2(this);">
                      Estadísticas
                      <span class="fa-stack fa-2x">
                        <i class="fas fa-stack-2x"></i>
                        <i class="fas fa-plus fa-stack-2x"></i> 
                      </span>
                    </button>
                  </h2>
                </div>
                <div id="collapseSixteen" class="collapse" aria-labelledby="headingSixteen">
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
                    <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen" onclick="cambiacolor_texto2(this);">
                      Orientación - Charlas Presupuestarias
                      <span class="fa-stack fa-2x">
                        <i class="fas fa-stack-2x"></i>
                        <i class="fas fa-plus fa-stack-2x"></i> 
                      </span>
                    </button>
                  </h2>
                </div>
                <div id="collapseSixteen" class="collapse" aria-labelledby="headingSixteen">
                  <div class="card-body">
                    <ul>
                    <li>Texto</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <!-- Este div es para que evite ponerse la barra pegajosa sobre el titulo de la sección, y en lugar se posicione en aquí-->
        <div id ="capacitacion">
          <br>
          <br>
          <br>
          <br>
        </div>

        <div name = "capacitacion">
          <h2>
              CAPACITACIONES
              <!-- Esto es para poder separar el texto y la imagen (emula las tabulaciones), será temporal mientras encuentro la solución -->
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <img src="img/icons/03.png" class="card-img" alt="...">
          </h2>
          <!-- <img src="img/icons/01.png" width="15px" height="15px"  alt="">-->
            <div id="accordion4" class="myaccordion">
              <div class="card">
                <div class="card-header" id="headingSeventeen">
                  <h2 class="mb-0">
                    <button class="header d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen" onclick="cambiacolor_texto2(this);">
                      Cursos
                      <span class="fa-stack fa-sm">
                        <i class="fas fa-stack-2x"></i>
                        <i class="fas fa-plus fa-stack-2x"></i>  
                      </span>
                    </button>
                  </h2>
                </div>
                <div id="collapseSeventeen" class="collapse" aria-labelledby="headingSeventeen">
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
                    <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEightteen" aria-expanded="false" aria-controls="collapseEightteen" onclick="cambiacolor_texto2(this);">
                      Blog
                      <span class="fa-stack fa-2x">
                        <i class="fas fa-stack-2x"></i>
                        <i class="fas fa-plus fa-stack-2x"></i> 
                      </span>
                    </button>
                  </h2>
                </div>
                <div id="collapseEightteen" class="collapse" aria-labelledby="headingEightteen">
                  <div class="card-body">
                    <ul>
                    <li>Texto</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <!-- Este div es para que evite ponerse la barra pegajosa sobre el titulo de la sección, y en lugar se posicione en aquí-->
        <div id ="datos_abiertos">
          <br>
          <br>
          <br>
          <br>
        </div>

        <div name = "datos_abiertos">
          <h2>
              DATOS ABIERTOS
              <!-- Esto es para poder separar el texto y la imagen (emula las tabulaciones), será temporal mientras encuentro la solución -->
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <img src="img/icons/04.png" class="card-img" alt="...">
          </h2>
          <!-- <img src="img/icons/01.png" width="15px" height="15px"  alt="">-->
            <div id="accordion5" class="myaccordion">
              <div class="card">
                <div class="card-header" id="headingNineteen">
                  <h2 class="mb-0">
                    <button class="header d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNineteen" aria-expanded="false" aria-controls="collapseNineteen" onclick="cambiacolor_texto2(this);">
                      Apartado #1
                      <span class="fa-stack fa-sm">
                        <i class="fas fa-stack-2x"></i>
                        <i class="fas fa-plus fa-stack-2x"></i> 
                      </span>
                    </button>
                  </h2>
                </div>
                <div id="collapseNineteen" class="collapse" aria-labelledby="headingNineteen">
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
                    <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwenty" onclick="cambiacolor_texto2(this);">
                      Apartado #2
                      <span class="fa-stack fa-2x">
                        <i class="fas fa-stack-2x"></i>
                        <i class="fas fa-plus fa-stack-2x"></i> 
                      </span>
                    </button>
                  </h2>
                </div>
                <div id="collapseTwenty" class="collapse" aria-labelledby="headingTwenty">
                  <div class="card-body">
                    <ul>
                    <li>Texto</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
      
      <script> 
        $("#accordion").on("hide.bs.collapse show.bs.collapse", e => {
          $(e.target).
          prev().
          find("i:last-child").
          toggleClass("fa-minus fa-plus");
        });
        $("#accordion2").on("hide.bs.collapse show.bs.collapse", e => {
          $(e.target).
          prev().
          find("i:last-child").
          toggleClass("fa-minus fa-plus");
        });
        $("#accordion3").on("hide.bs.collapse show.bs.collapse", e => {
          $(e.target).
          prev().
          find("i:last-child").
          toggleClass("fa-minus fa-plus");
        });
        $("#accordion4").on("hide.bs.collapse show.bs.collapse", e => {
          $(e.target).
          prev().
          find("i:last-child").
          toggleClass("fa-minus fa-plus");
        });
        $("#accordion5").on("hide.bs.collapse show.bs.collapse", e => {
          $(e.target).
          prev().
          find("i:last-child").
          toggleClass("fa-minus fa-plus");
        });
      </script>
</body>
</html>