@extends('layouts.layout')
@section('title', 'Crear Edicion')

@section('content')

    <div class="h-100 p-5 border bg-light rounded-3 mt-5 mb-5">
        <h1>Crear Edicion</h1>
        <form action="{{route('editions.store')}}" method="POST">
            @csrf
            <label for="name" class="form-label">Nombre de la edicion</label>
            <input type="text" class="form-control" id="name" name="name" required>
            @error('name')
            <small class="text-danger">*{{$message}}</small>
            <br>
            @enderror
            <label for="start_at" class="form-label">Fecha inicio</label>
            <input type="date" class="form-control" id="start_at" name="start_at" required>
            @error('start_at')
            <small class="text-danger">*{{$message}}</small>
            <br>
            @enderror
            <label for="end_at" class="form-label">Fecha de Terminacion</label>
            <input type="date" class="form-control" id="end_at" name="end_at" required>
            @error('end_at')
            <small class="text-danger">*{{$message}}</small>
            <br>
            @enderror
            <label for="space_available" class="form-label">Cupos</label>
            <input type="number" class="form-control" id="space_available" name="space_available" required>
            @error('space_available')
            <small class="text-danger">{{$message}}</small>
            <br>
            @enderror
            <input type="hidden" class="form-control" id="course_id" name="course_id" value="{{$course->id}}" required>
            <input type="hidden" class="form-control" id="teacher_id" name="teacher_id" value="{{Auth::user()->id}}" required>
            <br>
            <button type="submit" class="btn btn-outline-success mt-3">Crear curso</button>
        </form>
    </div>
@endsection
