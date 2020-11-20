<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/loginstyles.css">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <style>
      body {
         font-family: Gill Sans,Gill Sans MT,Calibri,sans-serif; 
      }

      .login-main-text {
         text-align: center;
      }

      #imagen-brand{
         width: auto;
         height: auto;
      }

      .div-wrapper {
         position: relative;
         height: 300px;
         width: 300px;
      }

      .div-wrapper img {
         position: absolute;
         left: 0;
         bottom: 0;
         width: 150px;
         height: auto;
      }

      .main {
         position: absolute;
         left: 13%;
         top: 8%;
      }
      
      .login-form {
         width: 340px;
         height: auto;
         margin: 30px auto;
      }
      
      .main form {
    	   margin-bottom: 15px;
         background: #f7f7f7;
         box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
         padding: 30px;
    }

    h5 {
      text-align: center;
      font-weight: bolder;
      font-size: 20pt;
    }

   </style>
</head>
<body>
   <div class="sidenav">   
      <div class="login-main-text" >
         <img src="img/brand.png" alt="" width="302" height="62" id = "imagen-brand">
         <h4>Portal de trasparencia del estado de Zacatecas</h4>
         <!--<strong> OBJETIVO DE LA CREACIÓN DE LA
         PLATAFORMA DIGITAL </strong>
         <p>
         Potenciar un Gobierno Abierto, Transparente y Participativo a
         través de herramientas digitales que permitan a la población en
         general conocer la integración, el manejo y destino de los
         recursos públicos.</p>-->
         <div class="div-wrapper">
            <img src="img/gobierno.png" alt="" width="500" height="300" id = "imagen-gobierno">   
         </div>  
      </div>
   </div>}
   <div class="main">
      <form action="/examples/actions/confirmation.php" method="post">
         <h5>Iniciar Sesión</h5>
         <div class="login-form">
            @yield('content')
         </div>
         <div class="register-form">
            @yield('register')
         </div>
      </form>
   </div>
   
   <script type="text/javascript">
   </script>
</body>
</html>
