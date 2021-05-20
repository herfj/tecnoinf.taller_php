@extends('layouts.layout')
@section('title', 'invitations')

@section('content')
    <style>
        .d0{
            width: 135%;
            height: 70%;
            background: #d74e4e;
            font-weight: 500;
            border-radius: 9px;
        }
        .d1{
            width: 135%;
            height: 70%;
            background: #51d051;
            font-weight: 500;
            border-radius: 9px;
        }
    </style>
    <div class="container" style="width: 100%;height: 100%;">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4" style="text-align: center;">
                <h1>Invitaciones</h1>
            </div>
            <br>
            <div class="col-lg-4"></div>
            </div>
        <br>
            <div class="row" style="height: 15vh;">
                <div class="col-lg-3"></div>
                <div class="col-lg-6" style="text-align: center;background: #dbdee4;border-radius: 9px;">
                    <form action="">
                        <input type="email" class="form-control" id="InputEmail" style="margin-top: 1%"  placeholder="Ingrese email">
                        <button type="submit" style="margin-top: 1%" class="btn btn-outline-info">Enviar invitacion</button>
                    </form>
                </div>

                <div class="col-lg-3"></div>
            </div>
        <br>
        <div class="row "  style="height: 6vh;">
            <div class="col-1"></div>
            <div class="col-10 border-0 " style="text-align: center;background: #dbdee4">
                <div class="row"style="margin-left: 5%;margin-right: 5%">
                    <div class="col-1"></div>
                    <div class="col-1"><p class="lead ">Email</p></div>
                    <div class="col-8"></div>
                    <div class="col-1"><p class="lead ">Estado</p></div>
                    <div class="col-1"></div>
                </div>

            </div>

            <div class="col-1"></div>
        </div>
        <div class="row"  style="height: 45vh;">
            <div class="col-1"></div>
            <div class="col-10" style="text-align: center;">
                @foreach($invitations as $singleinvitation)
                <div class="row "style=" background: white"onmouseover="this.style.background='#C8D1E6';" onmouseout="this.style.background='white';">
                    <div class="col-1"></div>
                    <div class="col-1"><p class="lead">{{$singleinvitation->email}}</p></div>
                    <div class="col-8"></div>
                    <div class="col-1" style="">
                        <div class="d{{$singleinvitation->status}}" id="{{$singleinvitation->status}}"style="margin-top: 15%"></div>
                    </div>
                    <div class="col-1"></div>
                </div>
                @endforeach
            </div>

            <div class="col-1"></div>
        </div>
        {{$invitations->links()}}

<p></p>
    </div>
    <script>

        let una = document.getElementsByClassName("d0");
        for (let i = 0; i < una.length; i++) {
            una[i].innerHTML=`<p class="text-white "> Enviada</p>`;
        }
        let dos = document.getElementsByClassName("d1");
        for (let j = 0; j < dos.length; j++) {
            dos[j].innerHTML=`<p class="text-white "> Aceptada</p>`;
        }

    </script>

@endsection
