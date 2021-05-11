@extends('layouts.layout')
@section('title',  $institute->name . ' - Instituto')
@section('content')

    <div class="h-100 p-5 border bg-light rounded-3 mt-5 mb-5">
        <h1>{{$institute->name}}</h1>
        <p class="fw-bold">
            Descripción:
        </p>
        <p>
            {{$institute->description}}
        </p>
        <a href="{{route('institutes.index')}}" class="btn btn-outline-secondary btn-sm ">Volver al listado</a>
        <a href="{{route('institutes.edit',$institute)}}" class="btn btn-outline-primary btn-sm ml-5">Editar Instituto</a>
        <form action="{{route('institutes.destroy',$institute)}}" method="POST" >
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-outline-danger btn-sm ml-5 mt-3"> Eliminar Instituto</button>
        </form>
    </div>
@endsection
