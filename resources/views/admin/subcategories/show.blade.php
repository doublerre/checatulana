@extends('web.subcategories')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">
                    Ver entrada
                </div>

                <div class="card-body">
                    <p><strong>Nombre</strong> {{ $subcategory->name }}</p>
                    <p><strong>Descripción</strong> {{ $subcategory->body }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
