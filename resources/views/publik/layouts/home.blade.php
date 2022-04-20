<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SiBakul Jogja | Teras Malioboro</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{!! asset('images/SiBakul.png')!!}" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&amp;Raleway:300,400,500,600,700,800,900" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{!! asset('css/bootstrap.min.css')!!}">
    <!-- owl-carousel -->
    <link rel="stylesheet" href="{!! asset('css/owl-carousel/owl.carousel.css')!!}" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{!! asset('css/font-awesome.css')!!}" />
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{!! asset('css/magnific-popup/magnific-popup.css')!!}" />
    <!-- media element player -->
    <link href="css/mediaelementplayer.min.css" rel="stylesheet" type="text/css')!!}" />
    <!-- Animate -->
    <link rel="stylesheet" href="{!! asset('css/animate.css')!!}" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="{!! asset('css/ionicons.min.css')!!}">
    <!-- variable -->
    <link rel="stylesheet" href="{!! asset('css/variables.css')!!}">
    <!-- Style -->
    <link rel="stylesheet" href="{!! asset('css/style-publik.css')!!}">
    <!-- color -->
    <link rel="stylesheet" href="{!! asset('css/color.css')!!}">
    <!-- Responsive -->
    <link rel="stylesheet" href="{!! asset('css/responsive.css')!!}">
    <!-- custom style -->
    <link rel="stylesheet" href="{!! asset('css/custom.css')!!}" />

</head>

<body data-spy="scroll" data-offset="80">
  <!-- loading -->
  @include('publik.partials.loading')
  <!-- loading End -->

  <!-- Header -->
  @include('publik.partials.navbar-full')
  <!-- Header End -->

  @yield('content')

</body>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{!! asset('js/jquery-3.3.1.min.js')!!}"></script>
<script src="{!! asset('js/popper.min.js')!!}"></script>
<script src="{!! asset('js/bootstrap.min.js')!!}"></script>
<!-- Main js -->
<script src="{!! asset('js/main.js')!!}"></script>
<!-- Google captcha code Js -->
<script src='https://www.google.com/recaptcha/api.js'></script>
<!-- Custom -->
<script src="{!! asset('js/custom.js')!!}"></script>
<script src="https://kit.fontawesome.com/5014e491f0.js" crossorigin="anonymous"></script>

</html>