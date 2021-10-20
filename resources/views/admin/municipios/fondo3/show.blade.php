@extends('adminlte::page')

@section('title', 'FAIS. Detalles.')

@section('content_header')
    <h1>FAIS. / {{$fondo3->anio}} / {{$fondo3->month}}</h1>
@stop

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <h3 class="profile-username text-center"></h3>
                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Estado: </b> <a class="float-right">
                                    @if ($fondo3->status == "PENDIENTE")
                                        <small class="badge badge-warning"><i class="fas fa-hourglass-end"></i> PENDIENTE</small>
                                    @elseif ($fondo3->status == "EN REVISION")
                                        <small class="badge badge-info"><i class="far fa-clock"></i> EN REVISION</small>
                                    @elseif ($fondo3->status == "RECHAZADO")
                                        <small class="badge badge-danger"><i class="fas fa-times"></i> RECHAZADO</small>
                                    @else
                                        <small class="badge badge-success"><i class="far fa-thumbs-up"></i> APROBADO</small>
                                    @endif
                                </a>
                            </li>
                            <li class="list-group-item">
                                <b>Fecha de subida: </b><a class="float-right" style="color:green">{{$fondo3->created_at->diffForHumans()}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Ultima modificación: </b><a class="float-right" style="color:green">{{$fondo3->updated_at->diffForHumans()}}</a>
                            </li>
                            @if ($fondo3->file == "EN ESPERA...")
                            <li class="list-group-item">
                                <b>Mensaje del sistema: </b> <a class="float-right"><small class="badge badge-warning"><i class="fas fa-hourglass-end"></i> POR FAVOR SUBE TU CFDI.</small></a>
                            </li>
                            <br>
                            <a href="#" class="cfdi btn btn-secondary btn-block"><b>Subir CFDI.</b></a>
                            @endif
                        </ul>
                    </div>
                    <div class="card-footer">
                        <ul class="list-group list-group-unbordered mb-3">
                            <b>Comentarios:</b>
                            @if (!$comments->count())
                                <li class="list-group-item">
                                    <b>Usuario: </b>El equipo de ChecaTuLana.
                                    <br>
                                    <b>Mensaje: </b>Aun no existen comentarios para este CFDI, favor de esperar un poco más.
                                </li>
                            @else
                                @foreach ($comments as $comment)
                                    <li class="list-group-item">
                                        <b>Usuario: </b> {{$comment->name}}
                                        <br>
                                        <b>Mensaje: </b>{{$comment->comment}}
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <h2>Comprobante de pago.</h2>
                        <br>
                        <p align="center">
                            <iframe src="{{Storage::url($fondo3->file_user)}}#toolbar=0" width="90%" height="600px">
                            </iframe>
                        </p>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <a download="FAIS_{{$fondo3->anio}}_{{$fondo3->month}}" href="{{Storage::url($fondo3->file_user)}}" class="btn btn-secondary btn-block"><b>Descargar PDF.</b></a>
                    </div>
                </div>
                <!-- /.card -->
                @if ($fondo3->file == "EN ESPERA...")
                {{--No se muestra nada ya que no existe el pdf en el sistema--}}
                @else
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <h2>Vista previa de mi CFDI.</h2>
                            <br>
                            <p align="center">
                                <iframe src="{{Storage::url($fondo3->file)}}#toolbar=0" width="90%" height="600px">
                                </iframe>
                            </p>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                        </div>
                    </div>
                @endif
                
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>

<div class="modal fade" id="upload_file" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
       <div class="modal-content">
          <div class="modal-header">
             <h4 class="modal-title">Subir nuevo pdf.</h4>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">×</span>
             </button>
         </div>
        <div class="modal-body">
            <form action="{{ route('fondo3.uploadCFDIsUM', $fondo3->id) }}" method="POST" enctype="multipart/form-data">
                {{ method_field('PUT') }}
                {{ csrf_field() }}
                <div class="input-group">
                    <input type="file" name="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                    <button class="btn btn-outline-secondary" type="submit" id="inputGroupFileAddon04">Subir</button>
                </div>
                @if ($errors->has('file'))
                    <span>
                        <strong style="color:red">{{$errors->first('file')}}</strong>
                    </span>
                @endif
                <br>
            </form>
        </div>
       </div>
       <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    @include('sweetalert::alert')

    <script>
        $(document).ready(function(){
            $(document).on('click', '.cfdi', function(){
                $("#upload_file").modal('show');
            });
        });
    </script>
@stop