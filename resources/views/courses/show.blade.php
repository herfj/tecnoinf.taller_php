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
        <hr>
        <p class="card-text"> <strong>Duracion en semanas: </strong>
            {{$course->duration_in_weeks}}
        </p>
        <p class="card-text"> <strong>Horas semanales: </strong>
            {{$course->hours}}
        </p>
        <p class="card-text"> <strong>Creditos que otorga: </strong>
            {{$course->credits}}
        </p>
        <a href="{{route('courses.index')}}" class="btn btn-outline-secondary btn-sm ">Volver al listado</a>
        <a href="{{route('courses.edit', $course)}}" class="btn btn-outline-secondary btn-sm ">Editar</a>

    </div>
@endsection
