@extends('layouts.layout')
@section('title',  $category->name . ' - Categoria')
@section('content')

    <div class="h-100 p-5 border bg-light rounded-3 mt-5 mb-5">
        <h1>{{$category->name}}</h1>
        <p class="fw-bold">
            Descripción:
        </p>
        <p>
            {{$category->description}}
        </p>
        <a href="{{route('categories.index')}}" class="btn btn-outline-secondary btn-sm ">Volver al listado</a>
        @if(Auth::check() && Auth::user()->type_of_user==="admin")
            <a href="{{route('categories.edit',$category)}}" class="btn btn-outline-primary btn-sm ml-5">Editar Categoria</a>
            <form action="{{route('categories.destroy',$category)}}" method="POST" >
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-outline-danger btn-sm ml-5 mt-3"> Eliminar Categoria</button>
            </form>
        @endif
    </div>
@endsection
