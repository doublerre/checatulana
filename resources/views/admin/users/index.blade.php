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
							<th>Editar.</th>
							<th>Eliminar.</th>
						</tr>
					</thead>
					<tbody></tbody>
				   </table>
				</div>
			</div>
	</div>
</div>

	<!-- Modal -->
	<div class="modal fade" id="editUsers" style="display: none;" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Editar usuario</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<form class="form-horizontal" method="POST" action="{{route('admin.put')}}">
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                        <div class="form-group row">
                        	<label for="inputName" class="col-sm-2 col-form-label">Nombre:</label>
                            <div class="col-sm-10">
								<input type="hidden" id="id" name="id">
                                <input type="text" required class="form-control" name="name" id="name" placeholder="Nombre">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                                <button type="submit" class="btn btn-info float-right">Actualizar usuario.</button>
                            </div>
                        </div>
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

			users();
			var t_users;

			function users()
			{
				t_users = $("#users").DataTable({
					language: {
						url: "http://cdn.datatables.net/plug-ins/1.10.24/i18n/Spanish.json",
					},
					ajax: {
						method: "GET",
						url: "{{route('admin.get')}}",
					},
					columns: [
						{data: "id"},
						{data: "name"},
						{data: "email"},
						{defaultContent:"<button class='btn-sm btn-info editar_usuario'><i class='fas fa-edit'></i> Editar.</button>"},
						{data: "delete"},
					]
				});
			}

			getDataUser("#users tbody", t_users);

			function getDataUser(tbody, t_users)
			{
				$(tbody).on("click", ".editar_usuario", function(){
					var data = t_users.row($(this).parents("tr")).data();
					$("#id").val(data.id);
					$("#name").val(data.name);
					$("#editUsers").modal("show");
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
			})

		});
	</script>
@stop