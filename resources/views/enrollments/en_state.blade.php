@extends('layouts.layout')
@section('title',  'Solicitud')
@section('content')
    <div class="h-100 p-5 border bg-light rounded-3 mt-5 mb-5">
        @if($enrollment->state=='en_espera')
        <p class="fw-bold">
            Tu solicitud de encuentra en espera.
        </p>
        @elseif($enrollment->state=='aceptado')
            <p class="fw-bold">
                Tu solicitud de encuentra fue aceptada.
            </p>
        @elseif($enrollment->state=='rechazado')
            <p class="fw-bold">
                Tu solicitud de encuentra fue rechazada.
            </p>
        @endif
        <a href="{{route('editions.show',$enrollment->edition_id)}}" class="btn btn-outline-secondary btn-sm ">Volver a la edicion</a>
    </div>
@endsection
