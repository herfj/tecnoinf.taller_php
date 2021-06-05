@extends('layouts.layout')
@section('title', 'Inscripciones')

@section('content')
    <div class="h-100 p-5 border bg-light rounded-3 mt-5 mb-5">
        <h1>Lista de inscripciones</h1>
    </div>
    @if(Auth::check() && ((Auth::user()->type_of_user==="teacher" && Auth::user()->id==$edition->teacher_id) || Auth::user()->type_of_user==="admin") )

        @foreach($enrollments as $enro)
            @if(($enro->state == 'en_espera') && ($enro->edition_id == $edition->id))
                <div class="h-100 p-5 border bg-light rounded-3 mt-5 mb-5" style="word-break: break-all">
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

                </div>
            @endif

        @endforeach

@endif
</div>

@endsection
