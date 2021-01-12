@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md col-md-offset-8">

        	<h1>{{ $post->name }}</h1>

            <div class="card">
                <div class="card-header">
                    Catergoría 
                    <a href="{{ route('subcategories', $post->subcategories->name) }}">
                        {{ $post->subcategories->name }}
                    </a>
                </div>
                @if($post->file)
                    <img class="card-img-top" src="{{ $post->file }}" width="auto" height="350px" alt="Card image cap">
                @endif 
                <div class="card-body">
                    
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
