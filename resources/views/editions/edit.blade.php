@extends('layouts.layout')
@section('title', 'Editar Edicion')

@section('content')

    <div class="h-100 p-5 border bg-light rounded-3 mt-5 mb-5">
        <h1>Actualizar Edicion</h1>
        <form action="{{route('editions.update',$edition)}}" method="POST">
            @csrf
            <label for="name" class="form-label">Nombre de la edicion</label>
            <input type="text" class="form-control" id="name" name="name" required value="{{old('name',$edition->name)}}">
            @error('name')
            <small class="text-danger">*{{$message}}</small>
            <br>
            @enderror
            <label for="start_at" class="form-label">Fecha inicio</label>
            <input type="date" class="form-control" id="start_at" name="start_at" required value="{{old('start_at',$edition->start_at)}}">
            @error('start_at')
            <small class="text-danger">*{{$message}}</small>
            <br>
            @enderror
            <label for="end_at" class="form-label">Fecha de Terminacion</label>
            <input type="date" class="form-control" id="end_at" name="end_at" required value="{{old('end_at',$edition->end_at)}}">
            @error('end_at')
            <small class="text-danger">*{{$message}}</small>
            <br>
            @enderror
            <label for="space_available" class="form-label">Cupos</label>
            <input type="number" class="form-control" id="space_available" name="space_available" required value="{{old('space_available',$edition->space_available)}}">
            @error('space_available')
            <small class="text-danger">{{$message}}</small>
            <br>
            @enderror
            <button type="submit" class="btn btn-outline-success mt-3">Editar edicion</button>
        </form>
    </div>
@endsection
