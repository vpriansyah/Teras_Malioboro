<div class="home" id="home">
    @yield('content')
</div>

<!-- Footer -->
<footer id="kontak" class="iq-footerr iq-ptb-20">
    <div class="container">
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
<script src="https://kit.fontawesome.com/5014e491f0.js" crossorigin="anonymous"></script>
</body>

</html>