@extends('pedagang.layouts.footer')
@section('content')
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
                            <a class="navbar-brand" href="">
                                <img class="img-fluid logo_img" id="logo_img" src="{!! asset('images/Logo SiBakul.png') !!}">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="ion-navicon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto justify-content-end mx-auto">
                                    <li class="nav-item">
                                        <a class="nav-link mx-3" href="#home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mx-3" href="#infolanjut">Info Lanjutan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mx-3" href="#menupilihan">Menu Pilihan</a>
                                    </li>
                                </ul>
                                <div class="d-flex">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="pt-1 fa-solid fa-user"></i>
                                            {{ auth()->user()->username }}
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="{{ url('pedagang/profil') }}">My Profil</a>
                                            </li>
                                            <li>
                                                <form action="{{ url('/auth/logout') }}" method="post">
                                                    @csrf
                                                    <button type="submit" class="dropdown-item">
                                                        Logout
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header End -->
        <!-- Banner -->
        <section id="home" class="iq-banner-12 light-green-bg">
            <div class="container" id="home">
                <div class="banner-text text-left">
                    <div class="row justify-content-between">
                        <div class="col-md-6 align-self-center">
                            <h1><b class="iq-font-black iq-tw-4">Teras Malioboro</b></h1><br>
                            <h5 class="iq-font-black iq-mtb-20">Teras Malioboro ini merupakan tempat baru bagi para
                                Pedagang
                                Kaki Lima (PKL) Malioboro.</h5><br>
                            <h5 class="text-danger iq-mtb-20">*Laman ini khusus untuk pedagang.</h5><br>
                        </div>

                        <div id="carouselExampleIndicators" class="carousel slide col-lg-6" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="{!! asset('images/tm1.png') !!}" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{!! asset('images/tm2.png') !!}" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{!! asset('images/kondisi.jpg') !!}" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-objects">
                {{-- <span class="banner-objects-01" data-bottom="transform:translatey(50px)"
                    data-top="transform:translatey(-50px);">
                    <img src="images/03(2).png" alt="drive02">
                </span> --}}
                <span class="banner-objects-02 iq-fadebounce">
                    <span class="iq-round"></span>
                </span>
            </div>
        </section>
        <!-- Banner End -->
        <section id="infolanjut" class="overview-block-ptb how-works">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 align-self-center">
                        <img class="iq-works-img" src="{!! asset('images/logo.png') !!}">
                    </div>
                    <br>
                    <div class="col-lg-6">
                        <h4 class="iq-tw-6 iq-mb-25 text-danger">INFORMASI LANJUT</h4>
                        <h1><b>TERAS MALIOBORO</b></h1>
                        <p class="iq-font-15 iq-mt-20">Teras Malioboro 1 berlokasi di Gedung Eks Bioskop Indra, tepat
                            berada
                            di seberang Pasar Beringharjo.
                            Sementara itu, Teras Malioboro 2 bertempat di eks Gedung Kantor Dinas Pariwisata DIY, tepatnya
                            di
                            sebelah utara Kantor DPRD DIY.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="iq-feature1 overview-block-ptb grey-bg" id="menupilihan">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="heading-title text-center">
                            <h2 class="title iq-tw-6">Menu Pilihan</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 iq-mtb-15">
                        <div class="iq-blog text-left iq-ptb-30 iq-pr-30 iq-pl-30">
                            <a href="pedagang/saran">
                                <div>
                                    <i class="ion-ios-lightbulb-outline iq-mb-10"></i>
                                    <h5 class="iq-tw-6">Saran dan Aduan</h5>
                                </div>
                            </a>
                            <div class="content-blog">
                                <p>Saran dan aduan untuk pengelola teras malioboro</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 iq-mtb-15">
                        <div class="iq-blog text-left iq-ptb-30 iq-pr-30 iq-pl-30">
                            <a href="pedagang/profil">
                                <div>
                                    <i class="ion-ios-grid-view-outline iq-mb-10"></i>
                                    <h5 class="iq-tw-6">Profil</h5>
                                </div>
                            </a>
                            <div class="content-blog">
                                <p>Berisi profil pedagang teras malioboro</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 iq-mtb-15">
                        <div class="iq-blog text-left iq-ptb-30 iq-pr-30 iq-pl-30">
                            <a href="pedagang/informasi">
                                <div>
                                    <i class="ion-ios-heart-outline iq-mb-10"></i>
                                    <h5 class="iq-tw-6">Info Penting</h5>
                                </div>
                            </a>
                            <div class="content-blog">
                                <p>Informasi penting yang harus dibaca/diikuti oleh pedagang</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 iq-mtb-15">
                        <div class="iq-blog text-left iq-ptb-30 iq-pr-30 iq-pl-30">
                            <a href="pedagang/tindaklanjut">
                                <div>
                                    <i class="ion-ios-albums-outline iq-mb-10"></i>
                                    <h5 class="iq-tw-6">Tindak Lanjut</h5>
                                </div>
                            </a>
                            <div class="content-blog">
                                <p>Infomasi tindak lanjut dari saran dan aduan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 iq-mtb-15">
                        <div class="iq-blog text-left iq-ptb-30 iq-pr-30 iq-pl-30">
                            <a href="pedagang/statistik">
                                <div>
                                    <i class="ion-ios-settings iq-mb-10"></i>
                                    <h5 class="iq-tw-6">Statistik</h5>
                                </div>
                            </a>
                            <div class="content-blog">
                                <p>Data statistik yang diperlukan pedagang, seperti jumlah pengunjung di teras malioboro</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 iq-mtb-15">
                        <div class="iq-blog text-left iq-ptb-30 iq-pr-30 iq-pl-30">
                            <a href="pedagang/agenda">
                                <div>
                                    <i class="ion-ios-color-wand-outline iq-mb-10"></i>
                                    <h5 class="iq-tw-6">Agenda Teras</h5>
                                </div>
                            </a>
                            <div class="content-blog">
                                <p>informasi kegiatan seni, pertunjukan atau kegiatan lain di teras malioboro</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
