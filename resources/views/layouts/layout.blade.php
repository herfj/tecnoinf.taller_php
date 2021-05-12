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
    <link href="{{asset('css/styles.css')}}" rel="stylesheet">
    {{--END CSS--}}

    {{--JS--}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
            crossorigin="anonymous"></script>
    {{--END JS--}}
    <title>@yield('title') | EVA</title>
</head>
<body>
@include('layouts.partials.header')

<div class="container" style="margin-top: 5vh">
    <?php
    $success = false;
    if (isset($_REQUEST['success']) && $_REQUEST['success'] != "") {
        $success = ($_REQUEST['success']);
    }
    $mess = "";
    if (isset($_REQUEST['mess']) && $_REQUEST['mess'] != "") {
        $mess = ($_REQUEST['mess']);
        if ($success) {
            echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>" . $mess . "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
        } else {
            echo "<div class='alert alert-denger alert-dismissible fade show' role='alert'>" . $mess . "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
        }
    }
    ?>
    @yield('content')
</div>

@include('layouts.partials.footer')

</body>
</html>
