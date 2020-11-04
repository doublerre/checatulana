<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/loginstyles.css">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="sidenav">
     
   
         <div class="login-main-text" >
            <img src="img/brand.png" alt="" width="302" height="62" >
            <h4>Portal de trasparencia del estado de Zacatecas</h4>
            <!--<strong> OBJETIVO DE LA CREACIÓN DE LA
               PLATAFORMA DIGITAL </strong>
            <p>
               Potenciar un Gobierno Abierto, Transparente y Participativo a
               través de herramientas digitales que permitan a la población en
               general conocer la integración, el manejo y destino de los
               recursos públicos.</p>-->
               <img src="img/gobierno.png" alt="" width="500" height="300" >

            
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-10">
            <div class="login-form">
               @yield('content')
            </div>
            <div class="register-form">
               @yield('register')
            </div>
         </div>
      </div>
<script type="text/javascript">

</script>
</body>
</html>
