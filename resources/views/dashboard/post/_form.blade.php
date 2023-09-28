{{-- Llamamosla vista de la cual se herada la estructura base --}}
@extends('dashboard.master'){{-- Seccion del titulo de la pagina --}}
@section('contenido'){{-- Seccion del contenido de la pagina --}}
@include('dashboard.partials.validation-error')

    @csrf
    
    {{-- form:post --}}
        {{-- .row para crear una fila --}}
    <div class="form-group">
        <label for="title">Titulo</label>
        <input class="form-control" type="text" name="title" id="title"
                value="{{ old('title', $post->title) }}" >
    </div>   
   {{-- fila 2--}} 
   <div class="form-group">
    <label for="url_clean">Url limpia</label>
    <input class="form-control" type="text" name="url_clean" id="url_clean" value="{{ old('url_clean', $post->url_clean) }}">
</div>
{{-- fila 3 --}}    
<div class="form-group">
    <label for="description">Contenido</label>
    <textarea class="form-control" name="description" id="description" rows="3" value="{{ old('content', $post->description) }}">
    </textarea>
</div>

<a href="{{ route('post.show',$post->id) }}" class="btn btn-info">ver</a>
<a href="{{ route('post.index') }}" class="btn btn-danger">Cancelar</a>



@endsection{{-- fina de la seccion del contenido de la pagina --}}