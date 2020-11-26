<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contenido</title>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
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
          </div>
        </nav>
      </header>
      <style>
        body {
          font-family: "Lato", sans-serif;
        }
        
        .sidenav {
          width: 250px;
          position: fixed;
          z-index: 1;
          top: 380px;
          left: 10px;
          background: #fff;
          overflow-x: hidden;
          padding: 8px 0;
        }
        
        .sidenav a {
          padding: 6px 8px 6px 16px;
          text-decoration:none;
          border-left: 2px solid rgb(47, 47, 168);
          font-size: 25px;
          color: #7f858a;
          display: block;
        }
        
        .sidenav a:hover {
          color: #232425;
        }
        
        .main {
          margin-left: 250px; /* Same width as the sidebar + left position in px */
          font-size: 28px; /* Increased text to enable scrolling */
          padding: 0px 10px;
          
        }
         .a{
           color: rgb(47, 47, 168);
         }
        
        @media screen and (max-height: 450px) {
          .sidenav {padding-top: 15px;}
          .sidenav a {font-size: 18px;}
        }
        </style>
        </head>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="bd-placeholder-img" width="100%" height="100%"  preserveAspectRatio="xMidYMid slice" focusable="true" role="img"><rect width="100%" height="100%" /></img>
              <div class="container">
                <div class="carousel-caption ">
                  <h1>PRESUPUESTOS DE EGRESOS 2019</h1>
                  <p><strong>$5,894,356.9</strong></p>
           
                </div>
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
        <body>
        
        <div class="sidenav">
          <a href="#marco_juridico">Marco Juridico</a>
          <a href="#checa_tulana">Checa tu lana</a>
          <a href="#trasparencia">Trasparencia</a>
          <a href="#capacitacion">Capacitaciones</a>
          <a href="#datos_abiertos">Datos Abiertos</a>
        </div>
        
        <div class="main">
          <h2>MARCO JURIDICO</h2>
          <ul>
            <li><a href="">Operaciones del presupuesto</a></li>
            <li><a href="">Disciplina financiera</a></li>
            <li><a href="">Contabilidad gubernamental</a></li>
            <li><a href="">Fiscalizacion</a></li>
            <li><a href="">Formatos</a></li>
          </ul>
        </div>  
    </div>
   
</body>
</html>