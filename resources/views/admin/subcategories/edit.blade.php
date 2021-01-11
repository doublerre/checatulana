@extends('adminlte::page')
@section('title', 'Editar Articulo')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">
                    Editar entrada
                </div>

                <div class="card-body">
                    {!! Form::model($subcategories, ['route' => ['subcategories.update', $subcategories->id], 'method' => 'PUT']) !!}
                        
                        @include('admin.subcategories.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
