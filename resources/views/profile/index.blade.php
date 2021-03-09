@extends('adminlte::page')

@section('title', 'Perfil')

@section('content_header')
    <h1>Perfil</h1>
@stop

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="/vendor/adminlte/dist/img/icon.png" alt="User profile picture">
                        </div>
                        <h3 class="profile-username text-center">Rafael Rangel {user}</h3>
                        <p class="text-muted text-center">Software Engineer</p>
                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Rol: </b> <a class="float-right">Administrador.</a>
                            </li>
                            <li class="list-group-item">
                                <b>Miembro desde: </b> <a class="float-right">02-02-2021</a>
                            </li>
                            <li class="list-group-item">
                                <b>Correo: </b> <a class="float-right">481700307@alumnos.utzac.edu.mx</a>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-danger btn-block"><b>Cerrar Sesion.</b></a>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#posts" data-toggle="tab">Mis Posts.</a></li>
                            <li class="nav-item"><a class="nav-link" href="#data_user" data-toggle="tab">Editar Datos.</a></li>
                            <li class="nav-item"><a class="nav-link" href="#password_update" data-toggle="tab">Actualizar Contraseña.</a></li>
                        </ul>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="posts">
                                <!-- Post -->
                                <div class="post">
                                    <div class="user-block">
                                        <img class="img-circle img-bordered-sm" src="/vendor/adminlte/dist/img/icon.png" alt="user image">
                                        <span class="username">
                                        <a href="#">{user}.</a>
                                        </span>
                                        <span class="description">Shared publicly - 7:30 PM today</span>
                                    </div>
                                    <!-- /.user-block -->
                                    <p>
                                        Lorem ipsum represents a long-held tradition for designers,
                                        typographers and the like. Some people hate it and argue for
                                        its demise, but others ignore the hate as they create awesome
                                        tools to help create filler text for everyone from bacon lovers
                                        to Charlie Sheen fans.
                                    </p>
                                    <p>
                                        <span class="float-right">
											<a class="btn btn-app">
												<i class="fas fa-edit"></i> Editar
											</a>
                                        </span>
                                    </p>
                                </div>
                                <!-- /.post -->
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="data_user">
                                <!-- The timeline -->
                                <form class="form-horizontal">
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Nombre</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputName" placeholder="Nombre">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-info float-right">Actualizar datos.</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="password_update">
                                <form class="form-horizontal">
                                    <div class="form-group row">
                                        <label for="old_password" class="col-sm-2 col-form-label">Antigua contraseña:</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="old_password" placeholder="Antigua contraseña.">
                                        </div>
									</div>
									<div class="form-group row">
                                        <label for="new_password" class="col-sm-2 col-form-label">Nueva contraseña:</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="new_password" placeholder="Nueva contraseña.">
                                        </div>
									</div>
									<div class="form-group row">
                                        <label for="repeat_password" class="col-sm-2 col-form-label">Antigua contraseña:</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="repeat_password" placeholder="Repite tu contraseña.">
                                        </div>
									</div>
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-info float-right">Actualizar contraseña.</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop