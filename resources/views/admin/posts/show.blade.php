@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card" style="width: 850px">
                <div class="card-header">
                    Ver Articulo
                </div>

                <div class="card-body" >
                    <p><strong>Nombre</strong> {!! $post->name !!}</p>
                    <p><strong>Extracto</strong> {!! $post->excerpt !!}</p>
                    @if($post->file)
                    <img src="{!! $post->file !!}" class="img-responsive" style="width: 740px">
                    @else
                   <img src="img/errorimage.svg" alt="Sin Imagen">
                    @endif
                    <p><strong>Contenido</strong>  {!! $post->body !!}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
