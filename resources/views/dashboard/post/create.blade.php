{{-- Llamamosla vista de la cual se herada la estructura base --}}
@extends('dashboard.master'){{-- Seccion del titulo de la pagina --}}
@section('contenido'){{-- Seccion del contenido de la pagina --}}
@include('dashboard.partials.validation-error')
<form action="{{ route('post.store') }}" method="post">
    @csrf
    {{-- form:post --}}
    {{-- fila 1 --}}
    <div class="row">
        {{-- .row para crear una fila --}}
        <div class="form-group">
            <label for="name">Articulo</label>
            <input class="form-control" type="text" name="name" id="name" >
        </div>
    </div>
    {{-- fila 2 --}}
    <div class="row form-group">
        <label for="description">Contenido</label>
        <textarea class="form-control" name="description" id="description" rows="10"></textarea>
    </div>
    {{-- fila 3 --}}
    <div class="row center">
        {{-- Las columnas se dividen en 12 --}}
        <div class="col s6">
            <button class="btn btn-success btn-sm" type="submit">Publicar</button>
            <button class="btn btn-danger btn-sm">Cancelar</button>
        </div>
    </div>
</form>
@endsection{{-- fina de la seccion del contenido de la pagina --}}