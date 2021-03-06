@extends('layouts.layout')
@section('title',  $course->name . ' - Curso')
@section('content')
<div style="display:flex">
    <div class="h-100 p-5 border bg-light rounded-3 mt-5 mb-5" style="width:70%;margin-right:1.5%">
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
                    <a href="{{route('institutes.show',$institute->id)}}">{{$institute->name}}</a>
                @endif
            @endforeach
        </p>
        <p class="card-text"> <strong>Categorias: </strong>
        <ul class="list-group list-group-flush" >
            @foreach($categories as $cat)
                @foreach($cur_cat as $cc)
                    @if($cc->course_id == $course->id)
                        @if($cc->category_id == $cat->id)
                            <li class="list-group-item" style="background-color: transparent; width: 25%" ><a href="{{route('categories.show',$cat->id)}}">{{$cat->name}}</a></li>
                        @endif
                    @endif
                @endforeach
            @endforeach
        </ul>
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

    <div class="h-100 p-5 border bg-light rounded-3 mt-5 mb-5" style="width:30%; word-break: break-all;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item" style="background-color: transparent; text-align: center;" ><h4>Ediciones</h4></li>
        @foreach($editions as $ed)
            @if($ed->course_id==$course->id)
                    <li class="list-group-item" style="background-color: transparent; text-align: center;" ><a href="{{route('editions.show',$ed->id)}}">{{$ed->name}}</a></li>
            @endif
        @endforeach
            <li class="list-group-item" style="background-color: transparent; text-align: center;" >
        @if(Auth::check() && (Auth::user()->type_of_user==="teacher" || Auth::user()->type_of_user==="admin"))
            <form action="{{route('editions.create',$course)}}" method="POST" >
                @csrf
                <button type="submit" class="btn btn-outline-primary btn-sm ml-5 mt-3"> Agregar edicion</button>
            </form>
        @endif
            </li>
        </ul>
    </div>
</div>
@endsection
