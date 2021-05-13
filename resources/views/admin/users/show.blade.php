@extends('layouts.layout')
@section('title',  $user->name . ' - Instituto')
@section('content')

    <div class="h-100 p-5 border bg-light rounded-3 mt-5 mb-5">
        <h1>{{$user->name}}</h1>
        <p>
            <span class="fw-bold">
            Nickname:
            </span>
            {{$user->nickname}}
        </p>
        <p>
            <span class="fw-bold">
            Email:
            </span>
            {{$user->email}}
        </p>
        <p>
            <span class="fw-bold">
            Fecha nac:
            </span>
            {{$user->birthday_date}}
        </p>
        <p>
            <span class="fw-bold">
            Tipo de usuario:
            </span>
            {{$user->type_of_user}}
        </p>
        <a href="{{route('admin.users.index')}}" class="btn btn-outline-secondary btn-sm ">Volver al listado</a>
        @if($user->type_of_user!=='admin')
        <a href="{{route('admin.users.edit',$user)}}" class="btn btn-outline-primary btn-sm ml-5">Editar Usuario</a>
        <form action="{{route('admin.users.destroy',$user)}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-outline-danger btn-sm ml-5 mt-3"> Eliminar Usuario</button>
        </form>
            @endif
    </div>
@endsection
