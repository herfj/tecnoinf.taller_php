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
        <p class="card-text"> <strong>Instituto perteneciente: </strong>
            @foreach($institutes as $institute)
                @if($institute->id == $course->institute_id)
                    {{$institute->name}}
                @endif
            @endforeach
        </p>
        <a href="{{route('courses.index')}}" class="btn btn-outline-secondary btn-sm ">Volver al listado</a>
        @if(Auth::check() && Auth::user()->type_of_user==="admin")
            <a href="{{route('courses.edit',$course)}}" class="btn btn-outline-primary btn-sm ml-5">Editar Curso</a>
            <form action="{{route('courses.destroy',$course)}}" method="POST" >
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-outline-danger btn-sm ml-5 mt-3"> Eliminar Curso</button>
            </form>
        @endif

    </div>
@endsection
