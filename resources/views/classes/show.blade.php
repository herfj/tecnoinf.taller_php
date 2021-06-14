@extends('layouts.layout')
@section('title',  $clase->topic . ' - Curso')
@section('content')

        <div class="h-100 p-5 border bg-light rounded-3 mt-5 mb-5" style="word-break: break-all">
            <h1>{{$clase->topic}}</h1>
            <p class="card-text"> <strong>Fecha de la clase: </strong>
                {{date('d/m/Y', strtotime($clase->class_date))}}
            </p>
            <p class="fw-bold">
                Notas de la clase:
            </p>
            <p class="p-3 mb-2 bg-white text-dark">
                {{$clase->class_notes}}
            </p>
            @foreach($editions as $ed)
                @if($ed->id == $clase->edition_id)
                    <a href="{{route('editions.show',$ed->id)}}" class="btn btn-outline-secondary btn-sm ">Volver a la edicion</a>
                    @if(Auth::check() && (Auth::user()->type_of_user==="admin" || Auth::user()->id==$ed->teacher_id))
                        <a href="{{route('classes.edit',$clase)}}" class="btn btn-outline-primary btn-sm ml-5">Editar clase</a>
                        <form action="{{route('classes.destroy',$clase)}}" method="POST" >
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-outline-danger btn-sm ml-5 mt-3"> Eliminar clase</button>
                        </form>
                    @endif
                @endif
            @endforeach
        </div>
@endsection
