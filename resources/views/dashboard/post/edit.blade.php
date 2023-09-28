{{-- Llamamosla vista de la cual se herada la estructura base --}}
@extends('dashboard.master'){{-- Seccion del titulo de la pagina --}}
@section('contenido'){{-- Seccion del contenido de la pagina --}}
@include('dashboard.partials.validation-error')
<form action="{{ route('post.store') }}" method="post">
    @method('PUT')
    {{-- form:post --}}
    {{-- fila 1 --}}
    @include('dashboard.post._form')
</form>
@endsection{{-- fina de la seccion del contenido de la pagina --}}