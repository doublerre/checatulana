@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md  ">

        	<h1>Lista de artículos</h1>

        	@foreach($posts as $post)
            <div class="card">
                @if($post->file)
                    <img class="card-img-top" src="{{ $post->file }}" width="auto" height="350px" alt="Card image cap">
                @endif 
                <div class="card-body">
                  <h5 class="card-title">{{ $post->excerpt }}</h5>
                  <p class="card-text"><a href="{{ route('post', $post->slug) }}" class="pull-right">Leer más</a></p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            @endforeach

            {{ $posts->render() }}
        </div>
        
    </div>
</div>
@endsection
