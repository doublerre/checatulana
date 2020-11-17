@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md col-md-offset-8">

        	<h1>{{ $post->name }}</h1>

            <div class="card">
                <div class="card-header">
                    Catergoría 
                    <a href="{{ route('category', $post->category->slug) }}">
                        {{ $post->category->name }}
                    </a>
                </div>
                @if($post->file)
                    <img class="card-img-top" src="{{ $post->file }}" alt="Card image cap">
                @endif 
                <div class="card-body">
                    
                    {{ $post->excerpt }}
                    <hr>
                    {!! $post->body !!}
                    <hr>

                    Etiquetas
                    @foreach($post->tags as $tag)
                    <a href="{{ route('tag', $tag->slug) }}">
                        {{ $tag->name }}
                    </a>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</div>
@endsection