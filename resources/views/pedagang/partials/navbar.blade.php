<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SiBakul Jogja | Teras Malioboro</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{!! asset('images/SiBakul.png') !!}" />
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&amp;Raleway:300,400,500,600,700,800,900"
        rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{!! asset('css/bootstrap.min.css') !!}">
    <!-- owl-carousel -->
    <link rel="stylesheet" href="{!! asset('css/owl-carousel/owl.carousel.css') !!}" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{!! asset('css/font-awesome.css') !!}" />
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{!! asset('css/magnific-popup/magnific-popup.css') !!}" />
    <!-- media element player -->
    <link href="{!! asset('css/mediaelementplayer.min.css') !!}" rel="stylesheet" type="text/css" />
    <!-- Animate -->
    <link rel="stylesheet" href="{!! asset('css/animate.css') !!}" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="{!! asset('css/ionicons.min.css') !!}">
    <!-- variable -->
    <link rel="stylesheet" href="{!! asset('css/variables.css') !!}">
    <!-- Style -->
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">
    <!-- color -->
    <link rel="stylesheet" href="{!! asset('css/color.css') !!}">
    <!-- Responsive -->
    <link rel="stylesheet" href="{!! asset('css/responsive.css') !!}">
    <!-- custom style -->
    <link rel="stylesheet" href="{!! asset('css/custom.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/tindaklanjut.css') !!}" />
    <script src="https://kit.fontawesome.com/5014e491f0.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body data-spy="scroll" data-offset="80">
    <!-- loading -->
    <div id="loading">
        <div id="loading-center">
            <div class="loader">
                <div class="cube">
                    <div class="sides">
                        <div class="top"></div>
                        <div class="right"></div>
                        <div class="bottom"></div>
                        <div class="left"></div>
                        <div class="front"></div>
                        <div class="back"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- loading End -->
    <!-- Header -->

    <header id="main-header" class="header-one">

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="/pedagang">
                            <img class="img-fluid logo_img" id="logo_img"
                                src="{!! asset('images/Logo SiBakul.png') !!}">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="ion-navicon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto justify-content-end mx-auto">
                                <li class="nav-item">
                                    <a class="nav-link mx-3" href="{{url('/pedagang')}}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mx-3" href="#infolanjut">Info Lanjutan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mx-3" href="#menupilihan">Menu Pilihan</a>
                                </li>
                            </ul>
                        </div>
                        <div class="d-flex">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="pt-1 fa-solid fa-user"></i>
                                    {{ auth()->user()->username }}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{url('pedagang/profil')}}">My Profil</a></li>
                                    <li>
                                        <form action="{{url('/auth/logout')}}" method="post">
                                            @csrf
                                            <button type="submit" class="dropdown-item">
                                                Logout
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->
    <!-- Banner -->