@extends('pedagang.layouts.main')
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
                            </div>
                            <div class="d-flex">
                                <i class="fa-solid fa-user"></i>
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
                            <h1><b class="iq-font-black iq-tw-4">Info Penting</b></h1><br>
                            <h5 class="iq-font-black iq-mtb-20">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere commodi iure consequuntur possimus dolores minima ex dignissimos soluta at perspiciatis corporis et, quo nemo culpa similique voluptas veritatis sapiente maiores?</h5><br>
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
        <br><br><br>
        <!-- Banner End -->
        <!-- Banner -->
        <div class="navbar">
            <div class="container nav justify-content-end">
                    <form class="d-flex">
                        <input class="form-control me-2" type="text" placeholder="Search">
                        <button class="btn btn-success" type="button">Search</button>
                    </form>
            </div>
        </div>

        <div class="container justify-content-end">
            <div class="card" style="width:max">
                <img class="card-img-top" src="../bootstrap4/img_avatar1.png" alt="Card image" style="width:100%">
                <div class="card-body">
                <h4 class="card-title">Lorem Ipsum</h4>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, magnam aperiam quam molestiae aliquam molestias in assumenda sed eum corrupti! Placeat harum dolores esse vel dolore, voluptate nemo nisi aperiam.</p>
                <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>             
            <br> 
            <div class="card" style="width:max">
                <img class="card-img-top" src="../bootstrap4/img_avatar1.png" alt="Card image" style="width:100%">
                <div class="card-body">
                <h4 class="card-title">Lorem Ipsum</h4>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, magnam aperiam quam molestiae aliquam molestias in assumenda sed eum corrupti! Placeat harum dolores esse vel dolore, voluptate nemo nisi aperiam.</p>
                <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>
            <br>
            <div class="card" style="width:max">
                <img class="card-img-top" src="../bootstrap4/img_avatar1.png" alt="Card image" style="width:100%">
                <div class="card-body">
                <h4 class="card-title">Lorem Ipsum</h4>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, magnam aperiam quam molestiae aliquam molestias in assumenda sed eum corrupti! Placeat harum dolores esse vel dolore, voluptate nemo nisi aperiam.</p>
                <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>
        <div>
        <!-- Banner End -->
        <!-- Banner -->
        <section id="pagination" class="overview-block-ptb how-works">
            <div class="banner-text text-left">
                <div class="row justify-content-between">
                    <div class="mx-auto">
                        <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    <div>
                <div>
            </div>  
        </section>
        <!-- Banner End -->
    @endsection
