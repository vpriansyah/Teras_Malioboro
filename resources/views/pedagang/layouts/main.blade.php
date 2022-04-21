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
    <script src="https://kit.fontawesome.com/5014e491f0.js" crossorigin="anonymous"></script>

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

    <div class="container" id="home">
        @yield('container')
    </div>

    <!-- Footer -->
    <footer id="kontak" class="iq-footerr iq-ptb-40 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 iq-pb-10 iq-mtb-20">
                    <div class="logo">
                        <section class="footer-info">
                            <br><br><br>
                            <iframe class="map" src="{!! asset('images/maps.jpg') !!}" style="border:0"
                                allowfullscreen></iframe>
                    </div>
                    </section>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 iq-pt-10 iq-mtb-20">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-sm-6">
                            <div class="contact-bg">
                                <h5 class="iq-tw-6 iq-font-black iq-mb-10">Teras Malioboro 1</h5>
                                <ul class="iq-contact">
                                    <li>
                                        <i class="ion-ios-location-outline iq-pt-20"></i>
                                        <p>Jl. Margo Mulyo, Ngupasan, Kec. Gondomanan, Kota Yogyakarta, Daerah Istimewa
                                            Yogyakarta 55122</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-sm-6">
                            <div class="contact-bg">
                                <h5 class="iq-tw-6 iq-font-black iq-mb-10">Teras Malioboro 2</h5>
                                <ul class="iq-contact">
                                    <li>
                                        <i class="ion-ios-location-outline iq-pt-20"></i>
                                        <p>Jl. Malioboro No.56, Suryatmajan, Kec. Danurejan, Kota Yogyakarta, Daerah
                                            Istimewa
                                            Yogyakarta 55212</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-12 col-sm-12 iq-pt-10 iq-pb-10 iq-mtb-20">
                    <h5 class="iq-tw-6 iq-font-black iq-mb-10">Contact Us</h5>
                    <div class="row">
                        <div class="col-lg-12 col-md-4 col-sm-4">
                            <a><i class="fa-solid fa-phone"></i> +628123190xx</a>
                        </div>
                        <div class="col-lg-12 col-md-4 col-sm-4">
                            <a><i class="fa-brands fa-instagram"> @terasmalioboro_</i></a>
                        </div>
                        <div class="col-lg-12 col-md-4 col-sm-4">
                            <a><i class="fa-regular fa-envelope"> terasmalioboro@gmail.com</i></a>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row iq-mt-10">
                <div class="mx-auto">
                    <div class="iq-copyright ">
                        Copyright @
                        <script>
                            document.write(new Date().getFullYear())
                        </script> <a>Kelompok 4</a> All Rights Reserved
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END -->

    <!-- back-to-top -->
    <div id="back-to-top">
        <a class="top" id="top" href="#top"> <i class="ion-ios-upload-outline"></i> </a>
    </div>
    <!-- back-to-top End -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{!! asset('js/jquery-3.3.1.min.js') !!}"></script>
    <script src="{!! asset('js/popper.min.js') !!}"></script>
    <script src="{!! asset('js/bootstrap.min.js') !!}"></script>
    <!-- Main js -->
    <script src="{!! asset('js/main.js') !!}"></script>
    <!-- Google captcha code Js -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!-- Custom -->
    <script src="{!! asset('js/custom.js') !!}"></script>
</body>

</html>
