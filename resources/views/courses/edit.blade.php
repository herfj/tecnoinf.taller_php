@extends('layouts.layout')
@section('title', 'Editar Curso')

@section('content')

    <div class="h-100 p-5 border bg-light rounded-3 mt-5 mb-5">
        <h1>Editar Curso</h1>
        <form action="{{route('courses.update',$course)}}" method="POST">
            @csrf
            <label for="name" class="form-label">Nombre del Curso</label>
            <input type="text" class="form-control" id="name" name="name" required value="{{old('name',$course->name)}}">
            @error('name')
            <small class="text-danger">*{{$message}}</small>
            <br>
            @enderror
            <label for="description" class="form-label">Descripción</label>
            <textarea type="text" class="form-control" id="description" name="description" required >{{old('description',$course->description)}}</textarea>
            @error('description')
            <small class="text-danger">*{{$message}}</small>
            <br>
            @enderror
            <label for="duration_in_weeks" class="form-label">Duracion del Curso(en semanas)</label>
            <input type="number" class="form-control" id="duration_in_weeks" name="duration_in_weeks" required value="{{old('duration_in_weeks',$course->duration_in_weeks)}}">
            @error('duration_in_weeks')
            <small class="text-danger">*{{$message}}</small>
            <br>
            @enderror
            <label for="hours" class="form-label">Horas semanales</label>
            <input type="number" class="form-control" id="hours" name="hours" required value="{{old('hours',$course->hours)}}">
            @error('hours')
            <small class="text-danger">*{{$message}}</small>
            <br>
            @enderror
            <label for="credits" class="form-label">Creditos del curso</label>
            <input type="number" class="form-control" id="credits" name="credits" required value="{{old('credits',$course->credits)}}">
            @error('credits')
            <small class="text-danger">*{{$message}}</small>
            <br>
            @enderror

            <br>
            <button type="submit" class="btn btn-outline-success mt-3">Actualizar Curso</button>
        </form>
    </div>
@endsection
