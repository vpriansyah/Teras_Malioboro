<div class="home" id="home">
    @yield('content')
</div>

<!-- Footer -->
<footer id="kontak" class="iq-footerr iq-ptb-20">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 iq-pb-20 iq-mtb-20">
                <div class="logo">
                    <section class="footer-info">
                        <br><br><br>
                        <iframe class="map" src="{!! asset('images/maps.jpg') !!}"></iframe>
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

            <div class="col-lg-3 col-md-12 col-sm-12 iq-pt-10 iq-mtb-20">
                <div class="row">
                    <div class="col-lg-12 col-md-6 col-sm-6 col-7 iq-pb-20">
                        <div class="contact-bg">
                            <h5 class="iq-tw-6 iq-mb-10">Contact Us</h5>
                            <ul>
                                <li><a href="https://api.whatsapp.com/send?phone=6282252542228" target=”_blank”><i class="fa-solid fa-phone">&nbsp;</i>+6282252542228</a></li>
                                <li><a href="https://www.instagram.com/diskopukm.diy/" target=”_blank”><i class="fa-brands fa-instagram">&nbsp;&nbsp;</i>@diskopukm.diy</a></li>
                                <li><a href="https://www.facebook.com/Dinas-Koperasi-UKM-DIY-102924801429497/" target=”_blank”><i class="fa-brands fa-facebook-square">&nbsp;&nbsp;</i>Dinas Koperasi UKM DIY</a></li>
                                <li><a href="https://twitter.com/diyukm" target=”_blank”><i class="fa-brands fa-twitter">&nbsp;&nbsp;</i>DISKOP UKM DIY</a></li>
                                {{-- <li><a href="#"><i class="fa-regular fa-envelope">&nbsp;&nbsp;</i>terasmalioboro@gmail.com</a></li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6 col-sm-6 col-5 iq-pb-20">
                        <div class="contact-bg">
                            <h5 class="iq-tw-6  iq-mb-10">Supported By</h5>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="https://uns.ac.id/" target=”_blank”><img src="{{ asset('images/UNS.png') }}" alt="UNS" style="max-height: 25px"></a></li>
                                <li class="list-inline-item"><a href="https://d3ti.vokasi.uns.ac.id/" target=”_blank”><img src="{{ asset('images/D3TI.png') }}" alt="D3TI" style="max-height: 25px"></a></li>
                                <li class="list-inline-item"><a href="http://sims.co.id/" target=”_blank”><img src="{{ asset('images/SIMS.png') }}" alt="SIMS" style="max-height: 25px"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row iq-mt-10">
            <div class="mx-auto">
            @include('copyright')
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
</script>
</body>

</html>