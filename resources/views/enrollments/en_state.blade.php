@extends('layouts.layout')
@section('title',  'Inscripcion')
@section('content')
    <div class="h-100 p-5 border bg-light rounded-3 mt-5 mb-5">
        <h2>
            Inscripción a: {{\App\Models\Edition::find($enrollment->edition_id)->name}}
        </h2>
        <p>
            <strong>Estado:</strong>
                @if($enrollment->state=='en_espera')
            <span class="fw-bold text-warning">
                Tu solicitud de encuentra en espera.
            </span>
            @elseif($enrollment->state=='aceptado')
                <span class="fw-bold text-success">
                    Tu solicitud de encuentra fue aceptada.
                </span>
            @elseif($enrollment->state=='rechazado')
                <span class="fw-bold text-danger">
                    Tu solicitud de encuentra fue rechazada.
                </span>
            @endif

        </p>
        <hr/>
        <p>
            <strong>Nota del estado:</strong>
        </p>
        <p>
            {{$enrollment->state_description}}
        </p>
        <hr/>
        <p>
            <strong>Carta intención:</strong>
        </p>
        <p>
            {{$enrollment->letter_of_intent}}
        </p>
        @if($enrollment->state=='aceptado')

            <hr/>
            <p>
                <strong>Nota:</strong>
            </p>
            <p>
                {{$enrollment->course_grade}}
            </p>
            <hr/>
            <p>
                <strong>Descipción de la nota:</strong>
            </p>
            <p>
                {{$enrollment->course_grade_description}}
            </p>
            <hr/>
            <a href="{{route('editions.show',$enrollment->edition_id)}}" class="btn btn-outline-primary btn-sm ">Ir a la edicion</a>
        @endif
        <a href="{{route('enrollments.mylist')}}" class="btn btn-outline-secondary btn-sm ">Volver a la lista de inscripciones</a>
    </div>
@endsection
