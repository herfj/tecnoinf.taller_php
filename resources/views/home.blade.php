@extends('layouts.layout')
@section('title', 'Home')

@section('content')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<h1>Bienvenido a EVA</h1>
<div style="display:flex;align-items: flex-start">
    @foreach($courses as $cu)
        <?php
            $h=0
        ?>
        @foreach($editions as $ed)
            @if($ed->course_id==$cu->id)
                    <?php
                        $h=1
                    ?>
            @endif
        @endforeach
    @if($h==1)
    <div id="{{$cu->id}}" class="carousel carousel-dark slide" data-bs-ride="carousel" style="height:15%;width:28%;margin-right: 1.3%">
        <div class="carousel-indicators">
            <?php
            $j=0;
            ?>
            @foreach($editions as $ed)
                    @if($j==0 && ($ed->course_id==$cu->id))
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{$j}}" class="active" aria-current="true" aria-label="{{$j}}"></button>
                        <?php
                        $j=$j+1;
                        ?>
                    @elseif($j==1 && ($ed->course_id==$cu->id))
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{$j}}" aria-label="{{$j}}"></button>
                        <?php
                        $j=$j+1;
                        ?>
                    @endif
            @endforeach
        </div>
        <div class="carousel-inner">
            <?php
            $i=0;
            ?>
            @foreach($editions as $ed)
                    @if($i==0 && ($ed->course_id==$cu->id))
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="{{asset('slides/cosito.png')}}" class="d-block w-1" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5><a href="{{route('editions.show',$ed->id)}}" style="color: #1a202c">{{$ed->name}}</a></h5>
                                <br>
                                <p>{{$cu->description}}</p>
                            </div>
                        </div>
                            <?php
                            $i=1;
                            ?>
                    @elseif($i==1 && ($ed->course_id==$cu->id))
                            <div class="carousel-item" data-bs-interval="10000">
                                <img src="{{asset('slides/cosito.png')}}" class="d-block w-1" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5><a href="{{route('editions.show',$ed->id)}}" style="color: #1a202c">{{$ed->name}}</a></h5>
                                    <br>
                                    <p>{{$cu->description}}</p>
                                </div>
                            </div>
                    @endif
            @endforeach
        </div>
    </div>
    @endif
    @endforeach
</div>
@endsection
