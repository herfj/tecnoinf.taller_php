@extends('layouts.layout')
@section('title', 'Crear una clase')

@section('content')

    <div class="h-100 p-5 border bg-light rounded-3 mt-5 mb-5">
        <h1>Crear una clase</h1>
        <form action="{{route('classes.store')}}" method="POST">
            @csrf
            <label for="topic" class="form-label">Tópico:</label>
            <input type="text" class="form-control" id="topic" name="topic" required>
            @error('topic')
            <small class="text-danger">*{{$message}}</small>
            <br>
            @enderror
            <label for="class_date" class="form-label">Fecha de la clase:</label>
            <input type="date" class="form-control" id="class_date" name="class_date" required>
            @error('class_date')
            <small class="text-danger">*{{$message}}</small>
            <br>
            @enderror
            <label for="class_notes" class="form-label">Notas de la clase:</label>
            <textarea style="height: 700px;" type="text" class="form-control" id="class_notes" name="class_notes" required ></textarea>
            @error('class_notes')
            <small class="text-danger">*{{$message}}</small>
            <br>
            @enderror
            <input type="hidden" class="form-control" id="edition_id" name="edition_id" value="{{$edition->id}}" required>

            <br>
            <button type="submit" class="btn btn-outline-success mt-3">Crear clase</button>
        </form>
    </div>
@endsection
