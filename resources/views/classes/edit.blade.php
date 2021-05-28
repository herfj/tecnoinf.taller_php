@extends('layouts.layout')
@section('title', 'Editar la clase')

@section('content')

    <div class="h-100 p-5 border bg-light rounded-3 mt-5 mb-5">
        <h1>Editar la clase</h1>
        <form action="{{route('classes.update',$clase)}}" method="POST">
            @csrf
            <label for="topic" class="form-label">Tópico:</label>
            <input type="text" class="form-control" id="topic" name="topic" required value="{{old('topic',$clase->topic)}}">
            @error('topic')
            <small class="text-danger">*{{$message}}</small>
            <br>
            @enderror
            <label for="class_date" class="form-label">Fecha de la clase:</label>
            <input type="date" class="form-control" id="class_date" name="class_date" required value="{{old('class_date',$clase->class_date)}}">
            @error('class_date')
            <small class="text-danger">*{{$message}}</small>
            <br>
            @enderror
            <label for="class_notes" class="form-label">Notas de la clase:</label>
            <textarea style="height: 700px;" type="text" class="form-control" id="class_notes" name="class_notes" required>{{ old('class_notes',$clase->class_notes) }}</textarea>
            @error('class_notes')
            <small class="text-danger">*{{$message}}</small>
            <br>
            @enderror

            <br>
            <button type="submit" class="btn btn-outline-success mt-3">Actualizar clase</button>
        </form>
    </div>
@endsection
