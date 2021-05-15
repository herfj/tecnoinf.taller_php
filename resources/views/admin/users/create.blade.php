@extends('layouts.layout')
@section('title', 'Crear Usuario')

@section('content')

    <div class="h-100 p-5 border bg-light rounded-3 mt-5 mb-5">
        <h1>Crear Usuario</h1>
        <form action="{{route('admin.users.store')}}" method="POST">
            @csrf
            <label for="name" class="form-label">Nombre del usuario</label>
            <input type="text" class="form-control" id="name" name="name" required value="{{old('name')}}">
            @error('name')
            <small class="text-danger">*{{$message}}</small>
            <br>
            @enderror

            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" required {{old('email')}}>
            @error('email')
            <small class="text-danger">*{{$message}}</small>
            <br>
            @enderror

            <label for="birthday_date" class="form-label">Email</label>
            <input type="date" class="form-control" id="birthday_date" name="birthday_date" required {{old('birthday_date')}}>
            @error('birthday_date')
            <small class="text-danger">*{{$message}}</small>
            <br>
            @enderror

            <label for="type_of_user" class="form-label">Tipo de usuario</label>
            <select type="date" class="form-control" id="type_of_user" name="type_of_user" required {{old('type_of_user')}}>
                <option value="student">
                    Estudiante
                </option>
                <option value="teacher">
                    Docente
                </option>
            </select>
            @error('type_of_user')
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
