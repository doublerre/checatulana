@extends('adminlte::page')

@section('title', 'Logos')

@section('content_header')
    <h1>Logos de la plataforma.</h1>
@stop

@section('content')
<div class="container">
	<div class="row">
			<div class="col-lg-12">
				<div class="table-responsive">
					<table id="banners" style="text-align:center;" class="table table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>Logo.</th>
							<th>Fecha de carga.</th>
							<th>Eliminar.</th>
						</tr>
					</thead>
					<tbody></tbody>
				   </table>
				</div>
			</div>
	</div>
</div>

<div class="modal fade" id="create_file" style="display: none;" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title">Subir nuevo logo</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
         </div>
         <div class="modal-body">
			<form action="{{route('logos.store')}}" method="POST" class="dropzone" id="my-awesome-dropzone">
				{{csrf_field()}}
				@if ($errors->has('file'))
                    <span>
                        <strong style="color:red">{{$errors->first('file')}}</strong>
                    </span>
                @endif
			</form>
			<br>
			<a href="/logos" class="btn btn-primary btn-lg" tabindex="-1" role="button">Recargar.</a>
         </div>
      </div>
      <!-- /.modal-content -->
   </div>
   <!-- /.modal-dialog -->
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dataTables.bootstrap4.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dropzone.min.css') }}">
@stop

@section('js')
   <script src="/sweetalert/dist/sweetalert.min.js"></script>

	<!-- jQuery, Popper.js, Bootstrap JS -->
	<script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
	<script src="{{ asset('assets/js/popper.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

	<!-- datatables JS -->
	<script src="{{ asset('assets/js/datatables.min.js') }}"></script>

	<script src="{{ asset('assets/js/dataTables.buttons.min.js') }}"></script>
	<script src="{{ asset('assets/js/buttons.html5.min.js') }}"></script>
	<script src="{{ asset('assets/js/dropzone.min.js') }}"></script>

	@include('sweetalert::alert')
<script>
	$(document).ready(function(){
		banners();
		var t_banners;

		function banners()
		{
			t_banners = $("#banners").DataTable({
				language: {
						url: "http://cdn.datatables.net/plug-ins/1.10.24/i18n/Spanish.json",
					},
					ajax: {
						method: "GET",
						url: "{{route('logos.get')}}",
					},
					columns: [
						{data: "img_file"},
						{data: "created_at"},
						{data: "delete"},
					],
					iDisplayLength: 3,
					responsive: "true",
					dom: 'Bfrtilp',
					buttons:[
						{
							text: "<i class='fas fa-folder-plus'></i>",
							titleAttr: "Añadir nuevo banner",
							className: "btn btn-info add_banner",
						},
					]
			});
		}

		$(document).on('click', '.confirmDelete', function(e){
			e.preventDefault();
			var form = $(this).closest("form");
			swal({
				title: "¿Estás seguro?",
				text: "Esta acción no se podra revertir.",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if (willDelete) {
					form.submit();
				}
			});
		});

		$(document).on('click', '.add_banner', function(){
			$("#create_file").modal("show");
		});
	});
</script>
@stop