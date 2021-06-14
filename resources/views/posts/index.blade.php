@extends('adminlte::page')

@section('title', 'Artículos en revisión.')

@section('content_header')
    <h1>Artículos en revisión</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Lista de artículos por aceptar.
                </div>

                <div class="card-body">

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Subcategoria Perteneciente</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                            <tr>
                            
                                <td>{{ $post->name }}</td>
                                <td>{{$post->subcategory_id}}</td>
                                <td width="10px">
                                    <a href="{{ route('post', $post->slug) }}" class="btn btn-sm btn-default">Ver</a>
                                </td>
                                <td width="10px">
                                    {!! Form::open(['class'=>'put','route' => ['admin.acept_post', $post->id], 'method' => 'PUT']) !!}
                                        <button class="btn btn-sm btn-success">
                                            <i class="far fa-check-circle"></i>
                                        </button> 
                                    {!! Form::close() !!}
                                </td>
								<td width="10px">
									<button class="refuse btn btn-sm btn-danger" value="{{$post->id}}">
										<i class="fas fa-times"></i>
									</button> 
								</td>
                            </tr>
                            @endforeach
                        </tbody>   
                    </table>     	
                </div>
            </div>
        </div>
    </div>
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
                <form action="{{route('admin.comment')}}" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Comentario:</label>
                        <textarea class="form-control" rows="3" name="comment" placeholder="Escribe aquí tu comentario..."></textarea>
                        <input type="hidden" id="post_id" name="post_id">
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
@include('sweetalert::alert')
    <script>
		$(document).ready(function(){
			$(document).on('click', '.refuse', function(){
				$('#post_id').val($(this).val());
				$('#add_comment').modal('show');
			});
		});
	</script>
@stop