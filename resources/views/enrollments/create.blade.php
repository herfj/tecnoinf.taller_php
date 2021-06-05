@extends('layouts.layout')
@section('title', 'Inscribirse a ')

@section('content')
    <div class="h-100 p-5 border bg-light rounded-3 mt-5 mb-5">
        <h1>Solicitar Inscripción</h1>
        <form action="{{route('enrollments.store')}}" method="POST">
            @csrf
            <label for="letter_of_intent" class="form-label">Carta intención</label>
            <textarea type="text" class="form-control" id="letter_of_intent" name="letter_of_intent" required >{{old('letter_of_intent')}}</textarea>
            @error('letter_of_intent')
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
