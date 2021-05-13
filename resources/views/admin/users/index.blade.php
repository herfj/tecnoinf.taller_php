@extends('layouts.layout')
@section('title', 'Institutos')

@section('content')
    <div class="h-100 p-5 border bg-light rounded-3 mt-5 mb-5">
        <h1>Lista de Usuarios</h1>
    </div>
    <div class="row row-cols-1 row-cols-lg-4 g-4">
        @foreach($users as $user)
            <div class="col">
                <div class="card h-100">
                    <div class="card-header">
                        <h5 class="card-title">
                            <strong>

                                {{$user->name}}
                            </strong>
                        </h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <i>
                                Nickname:
                            </i>
                            {{$user->nickname}}
                        </li>
                        <li class="list-group-item">
                            <i>
                                Email:
                            </i>
                            {{$user->email}}
                        </li>
                        <li class="list-group-item">
                            <i>
                                Tipo de usuario:
                            </i>
                            {{$user->type_of_user}}
                        </li>
                    </ul>
                    <div class="card-footer">
                        <div class="d-grid gap-2">
                            <a href="{{route('admin.users.show',$user->id)}}" class="btn btn-outline-dark btn-sm">Más
                                info</a>
                        </div>
                    </div>
                </div>

            </div>
        @endforeach
    </div>

@endsection
