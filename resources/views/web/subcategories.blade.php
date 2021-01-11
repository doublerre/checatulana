@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md  ">

        	<h1>Lista de artículos</h1>

        	@foreach($subcategories as $subcategory)
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{ $subcategory->excerpt }}</h5>
                  <p class="card-text"><a href="{{ route('subcategory', $subcategory->slug) }}" class="pull-right">Leer más</a></p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            @endforeach

            {{ $subcategories->render() }}
        </div>
        
    </div>
</div>
@endsection
