@extends('layouts.layout')
@section('title', 'Crear Instituto')

@section('content')

    <div class="h-100 p-5 border bg-light rounded-3 mt-5 mb-5">
        <h1>Crear Instituto</h1>
        <form action="{{route('institutes.store')}}" method="POST">
            @csrf
            <label for="name" class="form-label">Nombre del instituto</label>
            <input type="text" class="form-control" id="name" name="name" required value="{{old('name')}}">
            @error('name')
            <small class="text-danger">*{{$message}}</small>
            <br>
            @enderror
            <label for="description" class="form-label">Descripción</label>
            <textarea type="text" class="form-control" id="description" name="description" required >{{old('description')}}</textarea>
            @error('description')
            <small class="text-danger">*{{$message}}</small>
            <br>
            @enderror
            <button type="submit" class="btn btn-outline-success mt-3">Crear Instituto</button>
        </form>
    </div>
@endsection
