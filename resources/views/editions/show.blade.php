@extends('layouts.layout')
@section('title',  $edition->name . ' - Curso')
@section('content')
    <div style="display:flex">
        <div class="h-100 p-5 border bg-light rounded-3 mt-5 mb-5" style="width:70%;margin-right:1.5%;word-break: break-all;">
            <h1>{{$edition->name}}</h1>
            <p class="card-text"> <strong>Fecha de Inicio: </strong>
                {{$edition->start_at}}
            </p>
            <p class="card-text"> <strong>Fecha final: </strong>
                {{$edition->end_at}}
            </p>
            <p class="card-text"> <strong>Cupos: </strong>
                {{$edition->space_available}}
            </p>

            <p class="card-text"> <strong>Profesor: </strong>
            @foreach($teacher as $profe)
                @if($profe->id==$edition->teacher_id)
                    {{$profe->name}}
                @endif
            @endforeach
            </p>
            <a href="{{route('courses.show',$edition->course_id)}}" class="btn btn-outline-secondary btn-sm ">Volver al curso</a>


                @if(Auth::check() && ($edition->space_available > 0) && (Auth::user()->type_of_user==="student") && (Carbon\Carbon::now()->toDateTimeString() < Carbon\Carbon::createFromFormat('Y-m-d',$edition->start_at)))
                    <form action="{{route('enrollments.create',$edition)}}" method="GET" >
                        @csrf
                        <button type="submit" class="btn btn-outline-primary btn-sm ml-5 mt-3"> Solicitar inscripcion</button>
                    </form>
                @endif
            @if(Auth::check() && ((Auth::user()->type_of_user==="teacher" && Auth::user()->id==$edition->teacher_id) || Auth::user()->type_of_user==="admin") )
                <a href="{{route('editions.edit',$edition)}}" class="btn btn-outline-primary btn-sm ml-5">Editar Edicion</a>
                <form action="{{route('editions.destroy',$edition)}}" method="POST" >
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-outline-danger btn-sm ml-5 mt-3"> Eliminar Edicion</button>
                </form>
            @endif
        </div>
        <div class="h-100 p-5 border bg-light rounded-3 mt-5 mb-5" style="width:30%; word-break: break-all">
            <ul class="list-group list-group-flush">
                <li class="list-group-item" style="background-color: transparent; text-align: center;" ><h4>Clases</h4></li>
                @foreach($clases as $cl)
                    @if($cl->edition_id==$edition->id)
                        <li class="list-group-item" style="background-color: transparent; text-align: center;" ><a href="{{route('classes.show',$cl->id)}}">{{$cl->topic}}</a></li>
                    @endif
                @endforeach
                <li class="list-group-item" style="background-color: transparent; text-align: center;" >
                    @if(Auth::check() && ((Auth::user()->type_of_user==="teacher" && Auth::user()->id==$edition->teacher_id) || Auth::user()->type_of_user==="admin") )
                        <form action="{{route('classes.create',$edition->id)}}" method="POST" >
                            @csrf
                            <button type="submit" class="btn btn-outline-primary btn-sm ml-5 mt-3"> Crear una clase</button>
                    @endif
                </li>
            </ul>
        </div>
        <div>
            @if(Auth::check() && ((Auth::user()->type_of_user==="teacher" && Auth::user()->id==$edition->teacher_id) || Auth::user()->type_of_user==="admin") )
                @foreach($enrollments as $enro)
                    <form action="{{route('enrollments.accept')}}" method="POST" >
                    </form>
                @endforeach
            @endif
        </div>
    </div>
@endsection
