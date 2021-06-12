@extends('layouts.layout')
@section('title', 'Home')

@section('content')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <div class="h-100 p-5 pl-3 border bg-light rounded-3 mt-5 mb-5">
        <h1>Bienvenido a Eva</h1>
    </div>
    <div class="h-100 p-3 border bg-light rounded-3 mt-5 mb-5">
        <h2>Nuestros cursos</h2>
    </div>
    <div class="row row-cols-1 row-cols-lg-4 g-4">
        @foreach($courses as $course)
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">
                            {{$course->name}}
                        </h5>
                        <p class="card-text">
                            {{$course->description}}
                        </p>

                    </div>
                    <div class="card-footer">
                        <div class="d-grid gap-2">
                            <a href="{{route('courses.show',$course->id)}}" class="btn btn-outline-danger btn-sm">Más
                                info</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="h-100 p-3 border bg-light rounded-3 mt-5 mb-5">
        <h2>Ediciones</h2>
    </div>
    <div class="row row-cols-1 row-cols-lg-4 g-4">
        @foreach($editions as $ed)
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">
                            {{$ed->name}}
                        </h5>
                        <p class="card-text">Curso:
                            @foreach($courses as $cr)
                                @if($cr->id==$ed->course_id)
                                    {{$cr->name}}
                                @endif
                            @endforeach
                        </p>

                    </div>
                    <div class="card-footer">
                        <div class="d-grid gap-2">
                            <a href="{{route('editions.show',$ed->id)}}" class="btn btn-outline-danger btn-sm">Más
                                info</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{--    <div style="display:flex;flex-wrap:wrap;align-items: center;text-align: center;">--}}
    {{--        @foreach($courses as $cu)--}}
    {{--            <?php--}}
    {{--            $h=0--}}
    {{--            ?>--}}
    {{--            @foreach($editions as $ed)--}}
    {{--                @if($ed->course_id==$cu->id)--}}
    {{--                    <?php--}}
    {{--                    $h=1--}}
    {{--                    ?>--}}
    {{--                @endif--}}
    {{--            @endforeach--}}
    {{--            @if($h==1)--}}
    {{--                <div id="{{$cu->id}}" class="carousel carousel-dark slide" data-bs-ride="carousel" style="height:15%;width:28%;margin-right: 1.3%;margin-bottom: 2%">--}}
    {{--                    <div class="carousel-indicators">--}}
    {{--                        <?php--}}
    {{--                        $j=0;--}}
    {{--                        ?>--}}
    {{--                        @foreach($editions as $ed)--}}
    {{--                            @if($j==0 && ($ed->course_id==$cu->id))--}}
    {{--                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{$j}}" class="active" aria-current="true" aria-label="{{$j}}"></button>--}}
    {{--                                <?php--}}
    {{--                                $j=$j+1;--}}
    {{--                                ?>--}}
    {{--                            @elseif($j==1 && ($ed->course_id==$cu->id))--}}
    {{--                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{$j}}" aria-label="{{$j}}"></button>--}}
    {{--                                <?php--}}
    {{--                                $j=$j+1;--}}
    {{--                                ?>--}}
    {{--                            @endif--}}
    {{--                        @endforeach--}}
    {{--                    </div>--}}
    {{--                    <div class="carousel-inner">--}}
    {{--                        <?php--}}
    {{--                        $i=0;--}}
    {{--                        ?>--}}
    {{--                        @foreach($editions as $ed)--}}
    {{--                            @if($i==0 && ($ed->course_id==$cu->id))--}}
    {{--                                <div class="carousel-item active" data-bs-interval="7500">--}}
    {{--                                    <img src="{{asset('slides/cosito.png')}}" class="d-block w-1" alt="...">--}}
    {{--                                    <div class="carousel-caption d-none d-md-block">--}}
    {{--                                        <h5><a href="{{route('courses.show',$cu->id)}}" style="color: #1a202c">Más info</a></h5>--}}
    {{--                                        <br>--}}
    {{--                                        <p><a href="{{route('editions.show',$ed->id)}}" style="color: #1a202c">{{$ed->name}}</a></p>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <?php--}}
    {{--                                $i=1;--}}
    {{--                                ?>--}}
    {{--                            @elseif($i==1 && ($ed->course_id==$cu->id))--}}
    {{--                                <div class="carousel-item" data-bs-interval="7500">--}}
    {{--                                    <img src="{{asset('slides/cosito.png')}}" class="d-block w-1" alt="...">--}}
    {{--                                    <div class="carousel-caption d-none d-md-block">--}}
    {{--                                        <h5><a href="{{route('courses.show',$cu->id)}}" style="color: #1a202c">Más info</a></h5>--}}
    {{--                                        <br>--}}
    {{--                                        <p><a href="{{route('editions.show',$ed->id)}}" style="color: #1a202c">{{$ed->name}}</a></p>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            @endif--}}
    {{--                        @endforeach--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            @endif--}}
    {{--        @endforeach--}}
    {{--    </div>--}}
@endsection
