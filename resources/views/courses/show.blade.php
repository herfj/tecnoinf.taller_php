@extends('layouts.layout')
@section('title', 'Curso - '. $courseId)

@section('content')
    <h1><?php echo $courseId;?></h1>
@endsection
