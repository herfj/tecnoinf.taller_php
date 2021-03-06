@extends('layouts.layout')
@section('title',  $edition->name . ' - Curso')
@section('content')
    <div style="display:flex">
        <div class="h-100 p-5 border bg-light rounded-3 mt-5 mb-5"
             style="width:70%;margin-right:1.5%;word-break: break-all;">
            <h1>{{$edition->name}}</h1>
            <p class="card-text"><strong>Fecha de Inicio: </strong>
                {{date('d/m/Y', strtotime($edition->start_at))}}
            </p>
            <p class="card-text"><strong>Fecha final: </strong>
                {{date('d/m/Y', strtotime($edition->end_at))}}
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
                <br>
                @php
                  $flag = 0;
                @endphp
                @foreach($enrollments as $enr)
                    @if($enr->edition_id == $edition->id && $enr->state == 'en_espera')
                        @php
                            $flag = 1;
                        @endphp
                    @endif
                @endforeach
                @if($flag == 1)
                    <a href="{{route('editions.inscriptions',$edition)}}" class="btn btn-outline-primary btn-sm ml-5">Inscripciones</a>
                    @elseif($flag == 0)
                    <i>(No hay inscripciones pendientes.)</i>
                @endif



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
        <div class="h-100 p-5 border bg-light rounded-3 mt-5 mb-5">
            <p class="card-text"> <h4>Alumnos inscriptos: </h4>
            </p>
            @foreach($enrollments as $enro)
                @if(($enro->state == 'aceptado') && ($enro->edition_id == $edition->id) && ($enro->course_grade == 0))
                    <div class="h-100 p-5 border bg-light rounded-3 mt-5 mb-5" style="word-break: break-all">
                        <form action="{{route('enrollments.notas',$enro->id)}}" method="POST" >
                            @csrf
                            <strong><h4>Datos del alumno: </h4></strong>

                            @foreach($teacher as $usr)
                                @if($usr->id == $enro->student_id)
                                    <p class="card-text"> <strong>Nombre: </strong>
                                        {{$usr->name}}</p>
                                    <p class="card-text"> <strong>Email: </strong>
                                        {{$usr->email}}</p>
                                    <label for="course_grade_description" class="form-label"><strong>Jucio final: </strong></label>
                                    <textarea type="text" class="form-control" id="course_grade_description" name="course_grade_description" required >{{old('course_grade_description')}}</textarea>
                                    @error('course_grade_description')
                                    <small class="text-danger">*{{$message}}</small>
                                    <br>
                                    @enderror
                                    <br>
                                    <label for="course_grade" class="form-label">Nota final: </label>
                                    <input type="number" step="any" min="1" max="10" class="form-control" id="course_grade" name="course_grade" required>
                                    @error('course_grade')
                                    <small class="text-danger">{{$message}}</small>
                                    <br>
                                    @enderror
                                    <button type="submit" class="btn btn-outline-success mt-3">Enviar Juicio</button>
                                @endif
                            @endforeach
                        </form>

                    </div>
                @endif
            @endforeach

        </div>
    @endif

@endsection
