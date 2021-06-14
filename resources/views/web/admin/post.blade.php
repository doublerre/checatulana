@extends('adminlte::page')
@section('title', 'Articulo')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        	<h1><strong>{!! $post->name !!}</strong></h1>

            <div class="card" style="width: 850px">
                <div class="card-header">
                    Subcategoria 
                    <a href="{{ route('subcategory', $post->subcategory->slug) }}">
                        {{ $post->subcategory->name }}
                    </a>
                </div>

                <div class="card-body">
                    @if($post->file)
                        <img src="{{ $post->file }}" class="img-responsive" style="width: 740px">
                    @endif
                    
                    {!! $post->excerpt !!}
                    <hr>
                    {!! $post->body !!}
                    <hr>
                </div>
                <div class="card-footer">
                    <b>Commentarios: </b>
                    <br>
                    @if(!$comments->count())
                        Usuario: El equipo de ChecaTuLana.
                        <br>
                        Fecha: {{ date("Y-m-d H:i:s") }}
                        <br>
                        Comentario: Aun no existen comentarios para este post, favor de esperar un poco más.
                        <br><hr>
                    @else
                        @foreach ($comments as $comment)
                            Usuario: {{ $comment->name }}
                            <br>
                            Fecha: {{ $comment-> created_at}}
                            <br>
                            Comentario: {{ $comment->comment }}
                            <br><hr>
                        @endforeach
                    @endif
                    
                </div>
            </div>
            {{ $comments->render() }}
        </div>
    </div>
</div>
@stop
