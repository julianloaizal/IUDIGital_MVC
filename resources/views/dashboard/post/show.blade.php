{{-- Llamamosla vista de la cual se herada la estructura base --}}
@extends('dashboard.master'){{-- Seccion del titulo de la pagina --}}
@section('contenido'){{-- Seccion del contenido de la pagina --}}
@include('dashboard.partials.validation-error')

    @csrf
    {{-- form:post --}}
    {{-- fila 1 --}}
    <div class="row">
        {{-- .row para crear una fila --}}
        <div class="form-group">
            <label for="name">Articulo</label>
            <input readonly="form-control" type="text" name="name" id="name" value="{{ $post->name }}">
        </div>
    </div>
    {{-- fila 2 --}}
    <div class="form-group">
        <label for="url_clean">Url limpia</label>
        <input readonly class="form-control" type="text" name="url_clean" id="url_clean" value="{{ $post->url_clean }}">
    </div>
    {{-- fila 3 --}}    
    <div class="form-group">
        <label for="description">Contenido</label>
        <textarea readonly class="form-control" name="description" id="description" rows="10">{{ $post->description }}</textarea>
    </div>

@endsection{{-- fina de la seccion del contenido de la pagina --}}