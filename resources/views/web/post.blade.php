@extends('adminlte::page')
@section('title', 'Articulo')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        	<h1>{{ $post->name }}</h1>

            <div class="card">
                <div class="card-heading">
                    Subcategoria 
                    <a href="{{ route('subcategory', $post->subcategory->slug) }}">
                        {{ $post->subcategory->name }}
                    </a>
                </div>

                <div class="card-body">
                    @if($post->file)
                        <img src="{{ $post->file }}" class="img-responsive">
                    @endif
                    
                    {{ $post->excerpt }}
                    <hr>
                    {!! $post->body !!}
                    <hr>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
