@extends('layouts.layout')
@section('title', 'Crear Usuario')

@section('content')

    <div class="h-100 p-5 border bg-light rounded-3 mt-5 mb-5">
        <h1>Crear Usuario</h1>
        <form action="{{route('invitations.update', $invitation)}}" method="POST">
            @csrf
            @method('PUT')
            <label for="name" class="form-label">Nombre del usuario</label>
            <input type="text" class="form-control" id="name" name="name" required value="{{old('name')}}">
            @error('name')
            <small class="text-danger">*{{$message}}</small>
            <br>
            @enderror
            <h3>{{$invitation->email}}</h3>
            <br>
            <label for="birthday_date" class="form-label">Email</label>
            <input type="date" class="form-control" id="birthday_date" name="birthday_date" required {{old('birthday_date')}}>
            @error('birthday_date')
            <small class="text-danger">*{{$message}}</small>
            <br>
            @enderror

            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required {{old('password')}}>
            @error('password')
            <small class="text-danger">*{{$message}}</small>
            <br>
            @enderror

            <button type="submit" class="btn btn-outline-success mt-3">Crear Usuario</button>
        </form>
    </div>
@endsection
