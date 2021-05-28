@extends('layouts.layout')
@section('title',  $edition->name . ' - Curso')
@section('content')
    <div style="display:flex">
        <div class="h-100 p-5 border bg-light rounded-3 mt-5 mb-5" style="width:70%;margin-right:1.5%">
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

            @if(Auth::check() && Auth::user()->type_of_user==="teacher"  && Auth::user()->id==$edition->teacher_id)
                <a href="{{route('editions.edit',$edition)}}" class="btn btn-outline-primary btn-sm ml-5">Editar Ediciones</a>
                <form action="{{route('editions.destroy',$edition)}}" method="POST" >
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-outline-danger btn-sm ml-5 mt-3"> Eliminar Edicion</button>
                </form>
            @endif
    </div>
@endsection
