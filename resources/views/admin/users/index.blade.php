@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>Usuarios del sistema.</h1>
@stop

@section('content')
<div class="container">
	<div class="row">
			<div class="col-lg-12">
				<div class="table-responsive">
					<table id="users" class="table table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>ID.</th>
							<th>Nombre.</th>
							<th>Correo Electronico.</th>
							<th>Acciones.</th>
						</tr>
					</thead>
					<tbody></tbody>
				   </table>
				</div>
			</div>
	</div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
	<script src="/sweetalert/dist/sweetalert.min.js"></script>

	<!-- jQuery, Popper.js, Bootstrap JS -->
	<script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
	<script src="{{ asset('assets/js/popper.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

	<!-- datatables JS -->
	<script src="{{ asset('assets/js/datatables.min.js') }}"></script>

	@include('sweetalert::alert')

	<script>
		$(document).ready(function(){
			$("#users").DataTable({
				"language": {
					"url": "http://cdn.datatables.net/plug-ins/1.10.24/i18n/Spanish.json",
				},
				"ajax": {
					"method": "GET",
					"url": "{{route('admin.get')}}",
					"dataSrc": "",
				},
				"columns": [
					{"data": "id"},
					{"data": "name"},
					{"data": "email"},
					{"defaultContent":"<button class='btn btn-info'><i class='fas fa-edit'></i> Editar.</button> <button class='btn btn-danger'><i class='fas fa-user-minus'></i> Eliminar.</button>"}
				]
			});
		});
	</script>
@stop