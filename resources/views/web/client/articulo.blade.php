@extends('layouts.master')
@section('title', $post->slug)
@section('content')
<article class="blog-post">
    <h2 class="blog-post-title">{!! $post->name !!}</h2>
    <p class="blog-post-meta">{!! $post->created_at!!}</p>

    <p> @if($post->file)
        <img src="{{ $post->file }}" class="card-img">
        @endif</p>
    <blockquote>
      <p> {!! $post->excerpt !!}</p>
    </blockquote>
    <p>{!! $post->body !!}</p>
</blockquote>
  </article>  
    
@endsection
@section('footer')
<footer>
    <div class="partFooter">
      <div class="row align-items-center" id = "logoPresupuesto">
        <img src="{{url('img/img-footer-sin-fondo.png') }}"  alt="" >
      </div>
    </div>
    <div class="partFooter" id="contacto">
      <br>
      <h4 class = "infoContacto">
        Contacto
        <br>Circuito Cerro del Gato s/n
        <br>Colonia Ciudad Administrativa 
        <br>C.P 98160 
        <br>Zacatecas,Zac
      </h4>
      <a href="#">Términos de uso</a>
      <a href="#">Mapa del Sitio</a>
    </div>
    <div class="partFooter" id="informacion">
      <br>
      <h3 class = "titulo">¿Qué es checa tu lana?</h3>
      <p id> Es el portal para dar a conocer los mecanismos y acciones del gobierno de Zacatecas para incorporar a la sociedad en su toma de desiciones.</p>
    </div>
  </footer>
    
@endsection