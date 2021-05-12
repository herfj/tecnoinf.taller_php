<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--CSS--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link href="./css/styles.css" rel="stylesheet">
    {{--END CSS--}}

    {{--JS--}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
            crossorigin="anonymous"></script>
    {{--END JS--}}
    <title>@yield('title') | EVA</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}">EVA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('institutes.index')}}">Institutos</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-danger" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
<div class="container" style="margin-top: 5vh">
    <?php
    $success = false;
    if (isset($_REQUEST['success']) && $_REQUEST['success'] != "") {
        $success = ($_REQUEST['success']);
    }
    $mess = "";
    if (isset($_REQUEST['mess']) && $_REQUEST['mess'] != "") {
        $mess = ($_REQUEST['mess']);
        if($success){
            echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>". $mess."<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
        }
    else{
            echo "<div class='alert alert-denger alert-dismissible fade show' role='alert'>". $mess."<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
        }
    }
    ?>
    @yield('content')
</div>
<footer>
    <div class="container mt-5 mb-5">
        <div class="h-100 p-5 border bg-dark text-white rounded-3 text-center">
            <h4>Hecho con <span style="color: tomato;">&hearts;</span> en Sanka</h4>
            <h6>Taller de PHP - UTEC</h6>
            <p>
                Hernán Fábrica - Jacomo Fillippa - Lautaro Piantanida - Tomás Baute
            </p>
        </div>
    </div>
</footer>
</body>
</html>
