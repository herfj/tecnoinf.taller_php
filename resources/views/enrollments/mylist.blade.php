@extends('layouts.layout')
@section('title',  'Mi lista de inscripciones')
@section('content')
    <div class="h-100 p-5 border bg-light rounded-3 mt-5 mb-5">
        <h1>Lista de Inscripciones</h1>
    </div>
    <div class="row row-cols-1 row-cols-lg-4 g-4">
        @foreach($my_enrollments as $enrollment)
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">
                            {{\App\Models\Edition::find($enrollment->edition_id)->name}}
                        </h5>
                        <hr>
                        <p class="card-text">
                            @if($enrollment->state=='en_espera')
                                <strong>Estado:</strong> <strong class="text-warning">En espera</strong>
                            @endif
                            @if($enrollment->state=='aceptado')
                                <strong>Estado:</strong> <strong class="text-success">Aceptado</strong>
                            @endif
                            @if($enrollment->state=='rechazado')
                                <strong>Estado:</strong> <strong class="text-danger">Rechazado</strong>
                            @endif
                            <br/>
                            <p>
                                <strong>Nota del estado:</strong>
                            </p>
                            <p>
                                {{$enrollment->state_description}}
                            </p>
                        </p>

                    </div>
                    <div class="card-footer">
                        <div class="d-grid gap-2">
                            <a href="{{route('enrollments.en_state',$enrollment->id)}}" class="btn btn-outline-danger btn-sm">Más info</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
