@extends('adminlte::page')

@section('title', $user->name)

@section('content_header')
    <h1>Fondo 3.</h1>
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
                                    <th>CFDI Municipal.</th>
                                    <th>CFDI Finanzas.</th>
                                    <th>Fecha de subida.</th>
                                    <th>Estado.</th>
                                    <th>Acciones.</th>
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
						{data: "file"},
						{data: "file_user"},
						{data: "created_at"},
                        {data: "status"}
					],
					iDisplayLength: 3,
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
        });
    </script>
@stop