@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">
                    Crear subcategoría
                </div>

                <div class="card-body">
                    {!! Form::open(['route' => 'subcategories.store']) !!}
                        
                        @include('admin.subcategories.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
