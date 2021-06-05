<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estado: baneado |Checatulana</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <style>
        .mensaje-usuario-nd{
            display: flex;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .mensaje-usuario-nd .fa-frown{
            font-size: 70px;
            margin-top: 30px;
            margin-right: 15px;
        }
        body{
            background: #e9ecef;
        }
        body{
            font-family: Gill Sans, Gill Sans MT, Calibri, sans-serif;
        }
        body{
            color: #5a5a5a;
        }
        .btn {
            color: #FFFFFF;
        }
        .swal-modal{
            background-color: #e9ecef;
        }
    </style>
<center><div class = "mensaje-usuario-nd">
    <div class = "figura">
      <i class="far fa-frown"></i>
      <div></div>
    </div>
    <div class = "mensaje">
        <p class = "mensaje-error">
            Oops, lo sentimos. 
            <br>No tienes permisos para acceder a este contenido.
			<br>Por favor ponte en contacto con un administrador y espera a que este mensaje desaparezca.
        </p>
        <div class = "boton">
          <a href = "#">
            <button type="button" class="notify btn btn-info"><i class="far fa-bell"></i> Avisame</button>
          </a>
        </div> 
    </div>
</div>
<div class="logo-checatulana">
    <img src="{{ asset('assets/img/logo1.png') }}" alt="1000" width="15%" height="15%">
</div>

<script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
<script src="/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://kit.fontawesome.com/65325179d2.js" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        if(localStorage.getItem('KEYCTL')){
            message();
        }

        $(document).on('click', '.notify', function(){
            localStorage.setItem('KEYCTL', true);
            message();
        });

        function message(){
            swal({
					title: "Se paciente.",
					text: "Recibirás un mensaje de parte de nuestro equipo por correo electrónico cuando tu cuenta haya sido desbloqueada.",
					icon: "info",
                    buttons: false,
                    closeOnClickOutside: false,
                    closeOnEsc: false,
			});
        }
    });
</script>
<script>
    window.oncontextmenu = function () {
        return false;
    };

    document.addEventListener("keydown", function(event){
        var key = event.key || event.keyCode;

        if (key == 123) {
            return false
        } else if ((event.ctrlKey && event.shiftKey && key == 73) || (event.ctrlKey && event.shiftKey && key == 74)) {
            return false;
        }
    }, false);
</script>
    
</body>
</html>