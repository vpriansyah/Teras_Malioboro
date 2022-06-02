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
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> --}}
    <!-- owl-carousel -->
    <link rel="stylesheet" href="{!! asset('css/owl-carousel/owl.carousel.css') !!}" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{!! asset('css/font-awesome.css') !!}" />
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{!! asset('css/magnific-popup/magnific-popup.css') !!}" />
    <!-- media element player -->
    <link href="css/mediaelementplayer.min.css" rel="stylesheet" type="text/css')!!}" />
    <!-- Animate -->
    <link rel="stylesheet" href="{!! asset('css/animate.css') !!}" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="{!! asset('css/ionicons.min.css') !!}">
    <!-- variable -->
    <link rel="stylesheet" href="{!! asset('css/variables.css') !!}">
    <!-- Style -->
    <link rel="stylesheet" href="{!! asset('css/style-publik.css') !!}">
    <!-- color -->
    <link rel="stylesheet" href="{!! asset('css/color.css') !!}">
    <!-- Responsive -->
    <link rel="stylesheet" href="{!! asset('css/responsive.css') !!}">
    <!-- custom style -->
    <link rel="stylesheet" href="{!! asset('css/custom.css') !!}" />
    <!-- fullcalendar css  -->
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.css' rel='stylesheet' />
    <?php session_start(); ?>
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

    <!-- Content -->
    <section id="content" class="iq-banner-12 light-bg">
        @yield('content')
    </section>
    <!-- Content End -->

    <!-- Footer -->
    <footer class="iq-footer-box">
        <div class="container">
            <div class="row iq-mtb-10">
                <div class="mx-auto">
                    <div class="iq-copyright ">
                        Copyright @
                        <script>
                            document.write(new Date().getFullYear())
                        </script> Kelompok 4 All Rights Reserved
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
</body>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{!! asset('js/jquery-3.3.1.min.js') !!}"></script>
<script src="{!! asset('js/popper.min.js') !!}"></script>
<script src="{!! asset('js/bootstrap.min.js') !!}"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> --}}
<!-- Main js -->
<script src="{!! asset('js/main.js') !!}"></script>
<script src="{!! asset('js/script.js') !!}"></script>



<!-- Alert Js -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- Google captcha code Js -->
<script src='https://www.google.com/recaptcha/api.js'></script>
<!-- Custom -->
<script src="{!! asset('js/custom.js') !!}"></script>
<script src="https://kit.fontawesome.com/5014e491f0.js" crossorigin="anonymous"></script>

</html>
