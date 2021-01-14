@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">
                    Ver Articulo
                </div>

                <div class="card-body">
                    <p><strong>Nombre</strong> {!! $post->name !!}</p>
                    @if($post->file)
                    <img src="{!! $post->file !!}" class="img-responsive">
                    @else
                    I don't have any records!
                    @endif
                    <p><strong>Contenido</strong>  {!! $post->body !!}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
