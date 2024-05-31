@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Categorías</h1>
    <a href="{{ route('categorias.create') }}" class="btn btn-primary">Nueva Categoría</a>
    <div class="list-group">
        @foreach ($categorias as $categoria)
            <a href="{{ route('categorias.show', $categoria) }}" class="list-group-item list-group-item-action">{{ $categoria->nombre }}</a>
        @endforeach
    </div>
</div>
@endsection
