@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Nueva Categoría</h1>
    <form action="{{ route('categorias.store') }}" method="POST">
        @csrf
        <div>
            <label for="nombre">Nombre de la Categoría:</label>
            <input type="text" id="nombre" name="nombre">
        </div>
        <button type="submit">Guardar</button>
    </form>
</div>
@endsection
