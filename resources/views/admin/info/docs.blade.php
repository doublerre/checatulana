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
                                    <span class="description">Shared publicly - 7:45 PM today</span>
                                </div>
                                <!-- /.user-block -->
                                <p>
                                    Lorem ipsum represents a long-held tradition for designers,
                                    typographers and the like. Some people hate it and argue for
                                    its demise, but others ignore.
                                </p>
                                <p>
                                    <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 1 v2</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                    <h3 class="text-primary"><i class="fas fa-code-branch"></i> ChecaTuLana v3</h3>
                    <p class="text-muted">Plataforma de transparencia gubernamental de la secretaria de finanzas del estado de Zacatecas.</p>
                    <br>
                    <div class="text-muted">
                        <p class="text-sm">Cliente final:
                            <b class="d-block">Consejo Zacatecano de Ciencia, Tecnología e Innovación.</b>
                            <b class="d-block">Laboratorio de Software Libre.</b>
                            <b class="d-block">Secretaría de Finanzas del Estado de Zacatecas.</b>
                        </p>
                        <p class="text-sm">Lideres del proyecto:
                            <b class="d-block">Jonathan González.</b>
                            <b class="d-block">Alfonso Rafael Solis Rangel.</b>
                        </p>
                        <p class="text-sm">Sublider y diseñadora del proyecto:
                            <b class="d-block">María Esmeralda Pacheco González.</b>
                        </p>
                        <p class="text-sm">Encargada de la base de datos:
                            <b class="d-block">Perla Conde.</b>
                        </p>
                    </div>
                    <h5 class="mt-5 text-muted">Project files</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Functional-requirements.docx</a>
                        </li>
                        <li>
                            <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i> UAT.pdf</a>
                        </li>
                        <li>
                            <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-envelope"></i> Email-from-flatbal.mln</a>
                        </li>
                        <li>
                            <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-image "></i> Logo.png</a>
                        </li>
                        <li>
                            <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Contract-10_12_2014.docx</a>
                        </li>
                    </ul>
                    <div class="text-center mt-5 mb-3">
                        <a href="#" class="btn btn-sm btn-primary">Add files</a>
                        <a href="#" class="btn btn-sm btn-warning">Report contact</a>
                    </div>
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