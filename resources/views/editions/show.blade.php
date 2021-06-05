@extends('layouts.layout')
@section('title',  $edition->name . ' - Curso')
@section('content')
    <div style="display:flex">
        <div class="h-100 p-5 border bg-light rounded-3 mt-5 mb-5"
             style="width:70%;margin-right:1.5%;word-break: break-all;">
            <h1>{{$edition->name}}</h1>
            <p class="card-text"><strong>Fecha de Inicio: </strong>
                {{$edition->start_at}}
            </p>
            <p class="card-text"><strong>Fecha final: </strong>
                {{$edition->end_at}}
            </p>
            <p class="card-text"> <strong>Cupos disponibles: </strong>

                {{$edition->space_available}}
            </p>

            <p class="card-text"><strong>Profesor: </strong>
                @foreach($teacher as $profe)
                    @if($profe->id==$edition->teacher_id)
                        {{$profe->name}}
                    @endif
                @endforeach
            </p>
            <a href="{{route('courses.show',$edition->course_id)}}" class="btn btn-outline-secondary btn-sm ">Volver al
                curso</a>
            @if(Auth::check() && ($edition->space_available > 0) && (Auth::user()->type_of_user==="student") && (Carbon\Carbon::now()->toDateTimeString() < Carbon\Carbon::createFromFormat('Y-m-d',$edition->start_at)))
                @if($user_has_enroll)
                    <a href="{{route('enrollments.en_state',$enroll)}}" class="btn btn-outline-primary btn-sm ">Ver inscripción</a>
                @else
                <form action="{{route('enrollments.create',$edition)}}" method="GET">
                    @csrf
                    <button type="submit" class="btn btn-outline-primary btn-sm ml-5 mt-3"> Solicitar inscripcion
                    </button>
                </form>
                @endif
            @endif
            @if(Auth::check() && ((Auth::user()->type_of_user==="teacher" && Auth::user()->id==$edition->teacher_id) || Auth::user()->type_of_user==="admin") )
                <a href="{{route('editions.edit',$edition)}}" class="btn btn-outline-primary btn-sm ml-5">Editar
                    Edicion</a>
                <form action="{{route('editions.destroy',$edition)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-outline-danger btn-sm ml-5 mt-3"> Eliminar Edicion</button>
                </form>
            @endif
        </div>
        <div class="h-100 p-5 border bg-light rounded-3 mt-5 mb-5" style="width:30%; word-break: break-all">
            <ul class="list-group list-group-flush">
                <li class="list-group-item" style="background-color: transparent; text-align: center;"><h4>Clases</h4>
                </li>
                @if(Auth::check() && (Auth::user()->id===$edition->teacher_id || ($user_has_enroll && $enroll->state==="aceptado")))
                    @foreach($clases as $cl)
                        @if($cl->edition_id==$edition->id)
                            <li class="list-group-item" style="background-color: transparent; text-align: center;"><a
                                    href="{{route('classes.show',$cl->id)}}">{{$cl->topic}}</a></li>
                        @endif
                    @endforeach
                @else
                    <li class="list-group-item" style="background-color: transparent; text-align: center;">
                        Solo el docente a cargo y/o estudiantes de esta edicion pueden ver las clases.
                    </li>
                @endif

                <li class="list-group-item" style="background-color: transparent; text-align: center;">
                    @if(Auth::check() && ((Auth::user()->type_of_user==="teacher" && Auth::user()->id==$edition->teacher_id) || Auth::user()->type_of_user==="admin") )
                        <form action="{{route('classes.create',$edition->id)}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-outline-primary btn-sm ml-5 mt-3"> Crear una clase</button>
                            </form>
                    @endif
                </li>
            </ul>
        </div>
    </div>
            @if(Auth::check() && ((Auth::user()->type_of_user==="teacher" && Auth::user()->id==$edition->teacher_id) || Auth::user()->type_of_user==="admin") )
                <p style="background-color: transparent; text-align: center;" ><h4>Inscripciones:</h4></p>
                <div class="h-100 p-5 border bg-light rounded-3 mt-5 mb-5" style="word-break: break-all">
                    @foreach($enrollments as $enro)
                        @if(($enro->state == 'en_espera') && ($enro->edition_id == $edition->id))
                            <form action="{{route('enrollments.update',$enro->id)}}" method="POST" >
                                @csrf
                                <strong><h4>Datos del alumno: </h4></strong>

                                    @foreach($teacher as $usr)
                                        @if($usr->id == $enro->student_id)
                                            <p class="card-text"> <strong>Nombre: </strong>
                                            {{$usr->name}}</p>

                                            <p class="card-text"> <strong>Email: </strong>
                                            {{$usr->email}}</p>

                                            <p class="card-text"> <strong>Carta de inscripcion: <br></strong>
                                            {{$enro->letter_of_intent}}</p>
                                            <br>

                                            <label for="state_description" class="form-label"><strong>Descripcion del estado: </strong></label>
                                            <textarea type="text" class="form-control" id="state_description" name="state_description" required >{{old('state_description')}}</textarea>
                                            @error('state_description')
                                            <small class="text-danger">*{{$message}}</small>
                                            <br>
                                            @enderror
                                            <br>
                                            <select class="form-select" aria-label="Default select example" name="state">
                                                <option value="aceptado">Aceptar</option>
                                                <option value="rechazado">Rechazar</option>
                                            </select>
                                            <button type="submit" class="btn btn-outline-success mt-3">Enviar estado</button>
                                        @endif
                                    @endforeach
                            </form>
                        @endif
                        <hr>
                    @endforeach
                </div>
            @endif

@endsection
