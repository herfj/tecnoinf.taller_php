@extends('layouts.layout')
@section('title', 'Institutos')

@section('content')
    <div class="h-100 p-5 border bg-light rounded-3 mt-5 mb-5">
        <h1>Lista de Intitutos</h1>
    </div>
        <div class="row row-cols-1 row-cols-lg-4 g-4">
        @foreach($institutes as $institute)
            <div class="col">
                    <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">
                            {{$institute->name}}
                        </h5>
                        <p class="card-text">
                            {{$institute->description}}
                        </p>
                    </div>
                    <div class="card-footer">
                        <div class="d-grid gap-2">
                        <a href="{{route('institutes.show',$institute->id)}}" class="btn btn-outline-danger btn-sm">Más info</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
