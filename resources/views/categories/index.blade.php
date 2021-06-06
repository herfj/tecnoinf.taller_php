@extends('layouts.layout')
@section('title', 'Categorias')

@section('content')
    <div class="h-100 p-5 border bg-light rounded-3 mt-5 mb-5">
        <h1>Lista de Categorias</h1>
    </div>
    <div class="row row-cols-1 row-cols-lg-4 g-4">
        @foreach($categories as $category)
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">
                            {{$category->name}}
                        </h5>
                        <p class="card-text">
                            {{$category->description}}
                        </p>
                    </div>
                    <div class="card-footer">
                        <div class="d-grid gap-2">
                            <a href="{{route('categories.show',$category->id)}}" class="btn btn-outline-danger btn-sm">Más info</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
