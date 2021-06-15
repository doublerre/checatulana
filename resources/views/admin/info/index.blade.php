@extends('adminlte::page')

@section('title', 'Información de login')

@section('content_header')
    <h1>Información de login.</h1>
@stop

@section('content')
<section class="content">
    <div class="row">
        <div class="col-12" id="accordion">
            <div class="card card-success card-outline">
                <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
                    <div class="card-header">
                        <h4 class="card-title w-100">
                            1. Usuario administrador.
                        </h4>
                    </div>
                </a>
                <div id="collapseOne" class="collapse show" data-parent="#accordion">
                    <div class="card-body">
                        <p>Para poder tener acceso a todo el sistema de checatulana es necesario ingresar con este correo y contraseña.</p>
                        <b>Usuario:</b> admin@checatulana.heroku.com
                        <br>
                        <b>Contraseña:</b> 1234567890
                    </div>
                </div>
            </div>
            <div class="card card-info card-outline">
                <a class="d-block w-100" data-toggle="collapse" href="#collapseFour">
                    <div class="card-header">
                        <h4 class="card-title w-100">
                            2. Usuario editor.
                        </h4>
                    </div>
                </a>
                <div id="collapseFour" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        <p>Para tener acceso a las herramientas del usuario editor es necesario acceder con el siguiente correo y contraseña.</p>
                        <b>Usuario:</b> editor@checatulana.heroku.com
                        <br>
                        <b>Contraseña:</b> 1234567890
                    </div>
                </div>
            </div>
            <div class="card card-warning card-outline">
                <a class="d-block w-100" data-toggle="collapse" href="#collapseSeven">
                    <div class="card-header">
                        <h4 class="card-title w-100">
                            3. Usuario Municipio.
                        </h4>
                    </div>
                </a>
                <div id="collapseSeven" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        <p>Para tener acceso a las herramientas del usuario municipio es necesario acceder con el siguiente correo y contraseña.</p>
                        <b>Usuario:</b> municipio@checatulana.heroku.com
                        <br>
                        <b>Contraseña:</b> 1234567890
                    </div>
                </div>
            </div>
            <div class="card card-danger card-outline">
                <a class="d-block w-100" data-toggle="collapse" href="#collapseSeven">
                    <div class="card-header">
                        <h4 class="card-title w-100">
                            4. Usuario sin acceso al sistema.
                        </h4>
                    </div>
                </a>
                <div id="collapseSeven" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        <p>Solo sera necesario registrarte como usuario nuevo en el sistema.</p>
                        <b>Usuario:</b> cualquiera
                        <br>
                        <b>Contraseña:</b> cualquiera
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mt-3 text-center">
            <p class="lead">
                <a href="/login">Inicio de sesión</a>,
                Es hora de poner a prueba los usuarios.<br>
            </p>
        </div>
    </div>
</section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop