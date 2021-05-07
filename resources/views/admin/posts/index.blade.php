@extends('layouts.app')
@section('title', 'Articulos')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Lista de artículos
                    <a href="{{ route('posts.create') }}" class="pull-right btn btn-sm btn-primary">
                        Crear
                    </a>
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
                                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-default">Ver</a>
                                </td>
                                <td width="10px">
                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-default">Editar</a>
                                </td>
                                <td width="10px">
                                    {!! Form::open(['class'=>'delete','route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>                           
                                    {!! Form::close() !!}
                                </td>
                                @if ($post->status == "PUBLISHED")
                                    <td>
                                        <small class="badge badge-success"><i class="far fa-check-square"></i> Aprobado.</small>
                                    </td>
                                @elseif($post->status == "DRAFT" && $post->validated == 1)
                                    <td>
                                        <small class="badge badge-warning"><i class="fas fa-search"></i> En revisión.</small>
                                    </td>
                                @else
                                    <td>
                                        {!! Form::open(['class'=>'put','route' => ['post.send_review', $post->id], 'method' => 'PUT']) !!}
                                        <button class="btn btn-sm btn-success">
                                            Enviar a revisión.
                                        </button> 
                                        {!! Form::close() !!}
                                    </td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>   
                    </table>     	

                    {{ $posts->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
@include('sweetalert::alert')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

 @if (session('eliminar')== 'ok')
 <script>
    Swal.fire(
        '¡Eliminado!',
        'El artículo ha sido eliminado',
        'success'
        )
 </script>
     
 @endif
<script>
    $('.delete').submit(function(e){
        e.preventDefault();
        Swal.fire({
  title: '¿Estás seguro de eliminar este artículo?',
  text: "Recuerda no eliminar contenido si no estas seguro!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si, eliminar!'
}).then((result) => {
  if (result.isConfirmed) {
   
    this.submit();
  }
})
        
    });
  
</script>
    
@endsection