@extends('layouts.layout')
@section('title',  $institute->name . ' - Instituto')
@section('content')
    <?php

    $createdSuccess = false;
    if (isset($_REQUEST['createdSuccess']) && $_REQUEST['createdSuccess'] != "") {
        $createdSuccess = ($_REQUEST['createdSuccess']);
    }
    ?>
    @if($createdSuccess)
        <div class="alert alert-success" role="alert">
            El instituto
            <span class="fw-bold">
            {{$institute->name}}
            </span>
            se creo exitosamente!
        </div>
    @endif
    <div class="h-100 p-5 border bg-light rounded-3 mt-5 mb-5">
        <h1>{{$institute->name}}</h1>
        <p class="fw-bold">
            Descripción:
        </p>
        <p>
            {{$institute->description}}
        </p>
        <a href="{{route('institutes.index')}}" class="btn btn-outline-secondary btn-sm ">Volver al listado</a>
        <a href="{{route('institutes.index')}}" class="btn btn-outline-primary btn-sm ml-5">Editar Instituto</a>
    </div>
@endsection
