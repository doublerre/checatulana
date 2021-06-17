@extends('adminlte::page')

@section('title', 'Documentación')

@section('content_header')
    <h1>Documentación.</h1>
@stop

@section('content')
<section class="content">
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Live Demo.</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <div class="info-box bg-light">
                                <div class="info-box-content">
                                    <span class="info-box-text text-center text-muted">Framework utilizado:</span>
                                    <span class="info-box-number text-center text-muted mb-0">Laravel v6.20.12</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="info-box bg-light">
                                <div class="info-box-content">
                                    <span class="info-box-text text-center text-muted">Gestor de base de datos:</span>
                                    <span class="info-box-number text-center text-muted mb-0">MariaDB</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="info-box bg-light">
                                <div class="info-box-content">
                                    <span class="info-box-text text-center text-muted">Meses de desarrollo.</span>
                                    <span class="info-box-number text-center text-muted mb-0">7 meses.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h4>Pasos para instalar ChecaTuLana v3:</h4>
                            <div class="post">
                                <div class="user-block">
                                    <img class="img-circle img-bordered-sm" src="/vendor/adminlte/dist/img/icon.png" alt="user image">
                                    <span class="username">
                                    <a href="#">El equipo de ChecaTuLana.</a>
                                    </span>
                                    <span class="description">Pre-Requisitos</span>
                                </div>
                                <!-- /.user-block -->
                                <p>
                                    Tener instalados los siguientes paquetes:
                                    <ul>
                                        <li>Servidor Apache v2.4 o Servidor Nginx.</li>
                                        <li>Servidor MariaDB.</li>
                                        <li>PHP v7.4.3 o superior (Menor a v8.0, Laravel da error.)</li>
                                        <li>Composer v2.0.4 o superior.</li>
                                        <li>GIT CLI.</li>
                                    </ul>
                                </p>
                            </div>
                            <div class="post clearfix">
                                <div class="user-block">
                                    <img class="img-circle img-bordered-sm" src="/vendor/adminlte/dist/img/icon.png" alt="User Image">
                                    <span class="username">
                                    <a href="#">El equipo de ChecaTuLana.</a>
                                    </span>
                                    <span class="description">Instalación: Paso 1:</span>
                                </div>
                                <!-- /.user-block -->
                                <p>
                                    Abriremos una terminal, nos dirigiremos a la ruta donde vamos a instalar la copia de ChecaTuLana,
                                    y tecleamos el siguiente comando: <b>git clone https://gitlab.com/JoniGo/checatulana.git</b>, en caso
                                    de tener algun error ejecutamos el siguiente comando: <b>git clone https://github.com/doublerre/checatulana.git</b>.
                                </p>
                                <p>
                                    <video
                                        id="paso1"
                                        class="video-js"
                                        controls
                                        preload="auto"
                                        width="640"
                                        height="264"
                                        poster="MY_VIDEO_POSTER.jpg"
                                        data-setup="{}"
                                    >
                                        <source src="/video/paso1.mp4" type="video/mp4" />
                                    </video>
                                </p>
                            </div>
                            <div class="post">
                                <div class="user-block">
                                    <img class="img-circle img-bordered-sm" src="/vendor/adminlte/dist/img/icon.png" alt="user image">
                                    <span class="username">
                                    <a href="#">El equipo de ChecaTuLana.</a>
                                    </span>
                                    <span class="description">Instalación: Paso 2:</span>
                                </div>
                                <!-- /.user-block -->
                                <p>
                                    Ingresaremos a la carpeta del proyecto con un <b>cd checatulana/</b>, una vez dentro del proyecto ejecutaremos
                                    el siguiente comando para instalar las dependencias del proyecto: <b>composer install</b>.
                                    <br>
                                    La velocidad de instalación dependera de tu conexión a internet.
                                </p>
                                <p>
                                    <video
                                        id="paso2"
                                        class="video-js"
                                        controls
                                        preload="auto"
                                        width="640"
                                        height="264"
                                        poster="MY_VIDEO_POSTER.jpg"
                                        data-setup="{}"
                                    >
                                        <source src="/video/paso2.mp4" type="video/mp4" />
                                    </video>
                                </p>
                            </div>
                            <div class="post clearfix">
                                <div class="user-block">
                                    <img class="img-circle img-bordered-sm" src="/vendor/adminlte/dist/img/icon.png" alt="User Image">
                                    <span class="username">
                                    <a href="#">El equipo de ChecaTuLana.</a>
                                    </span>
                                    <span class="description">Instalación: Paso 3:</span>
                                </div>
                                <!-- /.user-block -->
                                <p>
                                    Descargaremos un archivo de configuracion indispensable para el correcto funcionamiento del proyecto
                                    ya que cuenta con las variables de configuracion para su correcto funcionamiento.
                                    <br>
                                    <ul>
                                        <li><a href="https://drive.google.com/file/d/1st8uuLyxNccxaMALN3UpqWjeKK3frq3E/view" target="_blank">.env</a></li>
                                    </ul>
                                    Lo pegaremos en la carpeta raiz del proyecto.
                                </p>
                                <p>
                                    <video
                                        id="paso3"
                                        class="video-js"
                                        controls
                                        preload="auto"
                                        width="640"
                                        height="264"
                                        poster="MY_VIDEO_POSTER.jpg"
                                        data-setup="{}"
                                    >
                                        <source src="/video/paso3.mp4" type="video/mp4" />
                                    </video>
                                </p>
                            </div>
                            <div class="post">
                                <div class="user-block">
                                    <img class="img-circle img-bordered-sm" src="/vendor/adminlte/dist/img/icon.png" alt="user image">
                                    <span class="username">
                                    <a href="#">El equipo de ChecaTuLana.</a>
                                    </span>
                                    <span class="description">Instalación: Paso 4:</span>
                                </div>
                                <!-- /.user-block -->
                                <p>
                                    Toca el turno de hacer la migracion de la base de datos, para esto solo sera necesario ejecutar el siguiente comando: <b>php artisan migrate.</b>
                                    <br>
                                    Una vez terminado ejecutaremos el siguiente comando: <b>php artisan storage:link</b> esto hara que nuestra aplicacion pueda cargar los archivos
                                    multimedia, y no nos muestre errores.
                                </p>
                                <p>
                                    <video
                                        id="paso4"
                                        class="video-js"
                                        controls
                                        preload="auto"
                                        width="640"
                                        height="264"
                                        poster="MY_VIDEO_POSTER.jpg"
                                        data-setup="{}"
                                    >
                                        <source src="/video/paso4.mp4" type="video/mp4" />
                                    </video>
                                </p>
                            </div>
                            <div class="post clearfix">
                                <div class="user-block">
                                    <img class="img-circle img-bordered-sm" src="/vendor/adminlte/dist/img/icon.png" alt="User Image">
                                    <span class="username">
                                    <a href="#">El equipo de ChecaTuLana.</a>
                                    </span>
                                    <span class="description">Instalación: Paso 5:</span>
                                </div>
                                <!-- /.user-block -->
                                <p>
                                    Para terminar ejecutaremos el siguiente comando: <b>php artisan db:seed --class=UserAdminSeeder</b> el cual
                                    nos creara 2 usuarios para acceder al sistema los cuales se detallan a continuación:
                                    
                                    <div class="card-body justify-content-center table-responsive p-0">
                                        <table class="table table-hover text-nowrap center">
                                            <thead>
                                                <tr>
                                                    <th>Usuario</th>
                                                    <th>Correo electronico</th>
                                                    <th>Contraseña</th>
                                                    <th>Tipo de rol</th>
                                                    <th>Activado</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Finanzas</td>
                                                    <td>finanzas@admin.com</td>
                                                    <td>finanzas</td>
                                                    <td><span class="badge bg-success">Administrador</span></td>
                                                    <td>✔️</td>
                                                </tr>
                                                <tr>
                                                    <td>Finanzas2</td>
                                                    <td>finanzas2@admin.com</td>
                                                    <td>finanzas2</td>
                                                    <td><span class="badge bg-success">Administrador</span></td>
                                                    <td>✔️</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <br>
                                    <b>Nota:</b> Estos usuarios tienen un error los cuales no podran acceder su perfil ya que son usuarios temporales, una vez los nuevos usuarios 
                                    administradores hayan sido aprobados, se deberan de eliminar los usuarios temporales.
                                    <br>
                                    <br>
                                    Una vez terminado ejecutaremos <b>php artisan serve</b> para hacer el deploy de nuestra aplicación.
                                </p>
                                <p>
                                    <video
                                        id="paso5"
                                        class="video-js"
                                        controls
                                        preload="auto"
                                        width="640"
                                        height="264"
                                        poster="MY_VIDEO_POSTER.jpg"
                                        data-setup="{}"
                                    >
                                        <source src="/video/paso5.mp4" type="video/mp4" />
                                    </video>
                                </p>
                                <p>Y listo, tendremos una copia funcional de ChecaTuLana v3.0</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                    <h3 class="text-primary text-center"><i class="fas fa-code-branch"></i> ChecaTuLana v3</h3>
                    <p class="text-muted text-center">Plataforma de transparencia gubernamental de la secretaria de finanzas del estado de Zacatecas.</p>
                    <br>
                    <div class="text-muted">
                        <p class="text-sm text-center">Cliente final:
                            <b class="d-block">Consejo Zacatecano de Ciencia, Tecnología e Innovación.</b>
                            <b class="d-block">Laboratorio de Software Libre.</b>
                            <b class="d-block">Secretaría de Finanzas del Estado de Zacatecas.</b>
                        </p>
                        <p class="text-sm text-center">Lideres del proyecto:
                            <b class="d-block">Jonathan González.</b>
                            <b class="d-block">Alfonso Rafael Solis Rangel.</b>
                        </p>
                        <p class="text-sm text-center">Sublider y diseñadora del proyecto:
                            <b class="d-block">María Esmeralda Pacheco González.</b>
                        </p>
                        <p class="text-sm text-center">Encargada de la base de datos:
                            <b class="d-block">Perla Conde.</b>
                        </p>
                    </div>
                    <h5 class="mt-5 text-muted text-center">Extras del proyecto:</h5>
                    <ul class="list-unstyled text-center">
                        <li>
                            <a href="https://drive.google.com/file/d/1Kh3Y5UgRmAvCxNLEK81QB_qkEpC-3_G4/view?usp=sharing" target="_blank" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Requerimientos v1.0</a>
                        </li>
                        <li>
                            <a href="https://drive.google.com/file/d/1WFs3ZTycLESLTfOY_89RFjZu4vAEcicH/view?usp=sharing" target="_blank" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Requerimientos v2.0</a>
                        </li>
                        <li>
                            <a href="https://drive.google.com/file/d/13jVjsJb4aqOmS9By1JE53o-kYQaJ_7ei/view?usp=sharing" target="_blank" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Requerimientos v3.0</a>
                        </li>
                        <li>
                            <a href="https://gitlab.com/JoniGo/checatulana" target="_blank" class="btn-link text-secondary"><i class="fab fa-gitlab"></i> Repositorio principal</a>
                        </li>
                        <li>
                            <a href="https://github.com/doublerre/checatulana" target="_blank" class="btn-link text-secondary"><i class="fab fa-github"></i> Repositorio de respaldo</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://vjs.zencdn.net/7.11.4/video-js.css" rel="stylesheet" />
@stop

@section('js')
<script src="https://vjs.zencdn.net/7.11.4/video.min.js"></script>
@stop