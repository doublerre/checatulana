@extends('adminlte::page')
@section('title', 'Articulos')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        	<h1>Lista de artículos</h1>

        	@foreach($posts as $post)
            <div class="card" style="width: 850px">
                <div class="card-header"><strong>{!! $post->name !!}</strong></div>

                <div class="card-body">
                    @if($post->file)
                        <img src="{!! $post->file !!}" class="img-responsive" style="width: 740px">
                    @endif
                    
                    {!! $post->excerpt !!}
                    <a href="{{ route('posts.show', $post->id) }}" class="pull-right">Leer más</a>
                </div>
            </div>
            @endforeach

            {{ $posts->render() }}
        </div>
    </div>
</div>
@endsection
