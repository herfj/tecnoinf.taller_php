@extends('layouts.layout')
@section('title', 'Crear Curso')

@section('content')
    <div class="h-100 p-5 border bg-light rounded-3 mt-5 mb-5">
        <h1>Solicitar Inscripcion</h1>
        <form action="{{route('enrollments.store')}}" method="POST">
            @csrf
            <label for="description" class="form-label">Descripción</label>
            <textarea type="text" class="form-control" id="description" name="description" required >{{old('description')}}</textarea>
            @error('description')
            <small class="text-danger">*{{$message}}</small>
            <br>
            @enderror
            <input type="hidden" name="edition_id" value="{{$edition->id}}">
            <input type="hidden" name="student_id" value="{{Auth::user()->id}}">
            <input type="hidden" name="state" value="en_espera">
            <button type="submit" class="btn btn-outline-success mt-3">Enviar solicitud</button>
        </form>
    </div>
@endsection
