{{-- Llamamosla vista de la cual se herada la estructura base --}}
@extends('dashboard.master'){{-- Seccion del titulo de la pagina --}}
@section('contenido'){{-- Seccion del contenido de la pagina --}}
@include('dashboard.partials.validation-error')
<a class="btn btn-success mt-3 mb-3" href="{{ route('post.create') }}">Crear</a>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <td>Id</td>
            <td>Titulo</td>
            <td>Categoria</td>
            <td>estado publicación</td>
            <td>Creación</td>
            <td>Actualización</td>
            <td>Acciones</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <td>
                {{ $post->id }}
            </td>
            <td>
                {{ $post->name }}
            </td>
            <td>
                {{ $post->description }}
            </td>
            <td>
                {{ $post->state }}
            </td>
            <td>
                {{ $post->created_at->format('d-m-Y') }}
            </td>
            <td>
                {{ $post->updated_at->format('d-m-Y') }}
            </td>
            <td>
                <a href="{{ route('post.show',$post->id) }}" class="btn btn-info">ver</a>
                <a href="{{ route('post.edit',$post->id) }}" class="btn btn-primary">Actualizar</a>

                <button data-toggle="modal" data-target="#deleteModal" data-id="{{ $post->id }}"
                class="btn btn-danger">Eliminar</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $posts->links()}}