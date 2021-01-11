@extends('adminlte::page')
@section('title', 'Articulos')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Lista de Entradas 
                    <a href="{{ route('subcategories.create') }}" class="pull-right btn btn-sm btn-primary">
                        Crear
                    </a>
                </div>

                <div class="card-body">

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($subcategories as $subcategory)
                            <tr>
                                <td>{{ $subcategory->id }}</td>
                                <td>{{ $subcategory->name }}</td>
                                <td width="10px">
                                    <a href="{{ route('subcategories.show', $subcategory->id) }}" class="btn btn-sm btn-default">Ver</a>
                                </td>
                                <td width="10px">
                                    <a href="{{ route('subcategories.edit', $subcategory->id) }}" class="btn btn-sm btn-default">Editar</a>
                                </td>
                                <td width="10px">
                                    {!! Form::open(['route' => ['subcategories.destroy', $subcategory->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>                           
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>   
                    </table>     	

                    {{ $subcategories->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
