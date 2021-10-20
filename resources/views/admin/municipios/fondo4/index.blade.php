@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>FORTAMUN.</h1>
@stop

@section('content')
<div class="container">
	<div class="row">
			<div class="col-lg-12">
				<div class="table-responsive">
					<table id="fondo3" style="text-align:center;" class="table table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>Archivo.</th>
							<th>Mes.</th>
							<th>Año.</th>
							<th>Estatus.</th>
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

	<!-- jQuery, Popper.js, Bootstrap JS -->
	<script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
	<script src="{{ asset('assets/js/popper.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

	<!-- datatables JS -->
	<script src="{{ asset('assets/js/datatables.min.js') }}"></script>

	@include('sweetalert::alert')
    <script>
        $(document).ready(function(){
            fondo3();
            function fondo3()
            {
                $('#fondo3').DataTable({
                    language: {
						url: "http://cdn.datatables.net/plug-ins/1.10.24/i18n/Spanish.json",
					},
					ajax: {
						method: "GET",
						url: "{{route('fondo4.cfdis', auth()->user()->id)}}",
					},
					columns: [
						{data: "view_all"},
                        {data: "month"},
                        {data: "anio"},
                        {data: "estado"},
					]
                });
            }
        });
    </script>
@stop