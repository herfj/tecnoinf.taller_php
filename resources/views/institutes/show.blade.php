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
        <p class="card-text"> <strong>Cursos de {{$institute->name}}: </strong>
        <ul class="list-group list-group-flush" >
            @foreach($courses as $course)
                @if($course->institute_id == $institute->id)
                    <li class="list-group-item" style="background-color: transparent; width: 25%" ><a href="{{route('courses.show',$course->id)}}">{{$course->name}}</a></li>
                @endif
            @endforeach
        </ul>
        </p>
        <a href="{{route('institutes.index')}}" class="btn btn-outline-secondary btn-sm ">Volver al listado</a>
        @if(Auth::check() && Auth::user()->type_of_user==="admin")
        <a href="{{route('institutes.edit',$institute)}}" class="btn btn-outline-primary btn-sm ml-5">Editar Instituto</a>
        <form action="{{route('institutes.destroy',$institute)}}" method="POST" >
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-outline-danger btn-sm ml-5 mt-3"> Eliminar Instituto</button>
        </form>
            @endif
    </div>
@endsection
