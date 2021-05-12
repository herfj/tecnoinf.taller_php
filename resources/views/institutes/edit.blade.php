@extends('layouts.layout')
@section('title', 'Editar Instituto')

@section('content')

    <div class="h-100 p-5 border bg-light rounded-3 mt-5 mb-5">
        <h1>Editar Instituto</h1>
        <form action="{{route('institutes.update',$institute)}}" method="POST">
            @csrf
            <label for="name" class="form-label">Nombre del instituto</label>
            <input type="text" class="form-control" id="name" name="name" required value="{{$institute->name}}">
            <label for="description" class="form-label">Descripción</label>
            <textarea type="text" class="form-control" id="description" name="description" required >{{$institute->description}}</textarea>
            <button type="submit" class="btn btn-outline-success mt-3">Actualizar Instituto</button>
        </form>
    </div>
@endsection
