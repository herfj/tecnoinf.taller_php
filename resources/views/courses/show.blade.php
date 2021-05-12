@extends('layouts.layout')
@section('title',  $course->name . ' - Curso')
@section('content')

    <div class="h-100 p-5 border bg-light rounded-3 mt-5 mb-5">
        <h1>{{$course->name}}</h1>
        <p class="fw-bold">
            Descripción:
        </p>
        <p>
            {{$course->description}}
        </p>
        <a href="{{route('courses.index')}}" class="btn btn-outline-secondary btn-sm ">Volver al listado</a>
        <a href="{{route('courses.edit',$course)}}" class="btn btn-outline-primary btn-sm ml-5">Editar Instituto</a>
    </div>
@endsection
