@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>FAIS.</h1>
@stop

@section('content')
<div class="container">
	<div class="row">
			<div class="col-lg-12">
				<div class="table-responsive">
					<table id="users" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>Nombre.</th>
								<th>Correo Electronico.</th>
								<th>Rol.</th>
								<th>Ver Historial.</th>
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

    <script>
        $(document).ready(function(){
            users();
            function users()
            {
                $("#users").DataTable({
                    language: {
						url: "http://cdn.datatables.net/plug-ins/1.10.24/i18n/Spanish.json",
					},
					ajax: {
						method: "GET",
						url: "{{route('fondo3.getUsers')}}",
					},
					columns: [
						{data: "name"},
						{data: "email"},
						{data: "role_user"},
						{data: 'view'},
					],
                });
            }
        });
    </script>
@stop