@extends('adminlte::page')

@section('title', $user->name)

@section('content_header')
    <h1>FAIS.</h1>
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
                        <h3 class="profile-username text-center">{{$user->name}}</h3>
                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Rol: </b> <a class="float-right">@if($user->role == "EDITOR")
                                        <small class="badge badge-primary"><i class="fas fa-user-edit"></i> EDITOR</small>
                                    @elseif($user->role == "ADMINISTRADOR")
                                        <small class="badge badge-success"><i class="fas fa-user-shield"></i> ADMINISTRADOR</small>
                                    @elseif($user->role == "MUNICIPIO")
                                        <small class="badge badge-secundary"><i class="fas fa-user-tie"></i> MUNICIPIO</small>
                                    @endif
                                </a>
                            </li>
                            <li class="list-group-item">
                                <b>Miembro desde: </b> <a class="float-right">{{$user->created_at->diffForHumans()}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Correo: </b> <a class="float-right">{{$user->email}}</a>
                            </li>
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
                        <table id="cfdis" style="text-align:center;" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th rowspan="2">CFDI Municipal.</th>
                                    <th rowspan="2">Comprobante de pago.</th>
                                    <th rowspan="2">Fecha de subida.</th>
                                    <th rowspan="2">Estado.</th>
                                    <th colspan="2">Acciones.</th>
                                </tr>
                                <tr style="display: none">
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
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
            <form action="{{ route('fondo3.uploadCFDIsUA') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="input-group">
                    <input type="file" name="file_user" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                    <button class="btn btn-outline-secondary" type="submit" id="inputGroupFileAddon04">Subir</button>
                    <input type="hidden" name="m_user_id" value="{{ $user->id }}">
                </div>
                @if ($errors->has('file_user'))
                    <span>
                        <strong style="color:red">{{$errors->first('file_user')}}</strong>
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

{{--Modal para los comentarios--}}
<div class="modal fade" id="add_comment" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Añadir comenarios.</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('fondo3.rechazarCFDI')}}" method="POST">
                    {{ method_field('PUT')}}
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Comentario:</label>
                        <textarea class="form-control" rows="3" name="comment" placeholder="Escribe aquí tu comentario..."></textarea>
                        <input type="hidden" id="fondo3_id" name="fondo3_id">
                    </div>
                    @if ($errors->has('comment'))
						<span>
							<strong style="color:red">{{$errors->first('comment')}}</strong>
						</span>
                    @endif
					<br>
					<button type="submit" class="btn btn-primary btn-lg">Enviar comentarios.</button>
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
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- datatables JS -->
    <script src="{{ asset('assets/js/datatables.min.js') }}"></script>

    <script src="{{ asset('assets/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/js/bs-custom-file-input.min.js') }}"></script>

    @include('sweetalert::alert')

    <script>
        $(document).ready(function(){
            getCFDIs();

            function getCFDIs()
            {
                $("#cfdis").DataTable({
                    language: {
						url: "http://cdn.datatables.net/plug-ins/1.10.24/i18n/Spanish.json",
					},
					ajax: {
						method: "GET",
						url: "{{route('fondo3.cfdis', $user->id)}}",
					},
					columns: [
						{data: "view_pdf_m"},
						{data: "view_pdf"},
						{data: "created_at"},
                        {data: "estado"},
                        {data: 'aceptar'},
                        {data: 'rechazar'},
					],
					iDisplayLength: 10,
					responsive: "true",
					dom: 'Bfrtilp',
					buttons:[
						{
							text: "<i class='fas fa-file-pdf'></i>",
							titleAttr: "Subir nuevo PDF",
							className: "btn btn-info upload_pdf",
						},
					]
                });
            }

            $(document).on('click', '.upload_pdf', function(){
                $("#upload_file").modal('show');
            });

            $(document).on('click', '.refuse', function(){
                console.log($(this).val());
                $('#fondo3_id').val($(this).val());
				$('#add_comment').modal('show');
            });
        });
    </script>
@stop