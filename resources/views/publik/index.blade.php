@extends('publik.layouts.home')

@section('content')
    <!-- Banner -->
    <section id="iq-home" class="iq-banner-12 light-success-bg">
        <div class="container" id="home">
            <div class="banner-text text-left">
                <div class="row justify-content-between">
                    <div class="col-md-6 align-self-center">
                        <h1 class="iq-font-black iq-tw-4"><b>Teras Malioboro</b></h1>
                        <h5 class="iq-font-black iq-mtb-40">Teras Malioboro ini merupakan tempat baru bagi para Pedagang Kaki
                            Lima (PKL) Malioboro.</h5>
                        <div>
                            <button href="auth/login" class="rounded-pill btn btn-success">Masuk</button><br>
                        </div>
                        <br>

                    </div>
                    <div class="col-md-6">
                        <img class="banner-img img-fluid" src="{!! asset('images/teras-malioboro.jpg') !!}" alt="teras-malioboro"
                            style="width: 120%;">
                        <img class="banner-phone img-fluid center-block wow fadeInUp" src="images/SiBakul.png"
                            alt="SiBakul">
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-objects">
            <span class="banner-objects-01" data-bottom="transform:translatey(50px)"
                data-top="transform:translatey(-50px);">
                <img src="{!! asset('images/03(2).png') !!}" alt="drive02">
            </span>
            <span class="banner-objects-02 iq-fadebounce">
                <span class="iq-round"></span>
            </span>
            <span class="banner-objects-03 iq-fadebounce">
                <span class="iq-round"></span>
            </span>
            <span class="banner-objects-04" data-bottom="transform:translatex(100px)"
                data-top="transform:translatex(-100px);">
                <img src="{!! asset('images/04(2).png') !!}" alt="drive02">
        </div>
    </section>
    <!-- Banner End -->

    <!-- Tentang -->
    <!-- <section class="overview-block-pt">
                        <div class="container" id="tentang">
                          <div class="row iq-mt-10">
                            <div class="col-sm-12">
                              <div class="heading-title iq-mt-50">
                                <h3 class="title iq-tw-7">Tentang</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley,</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </section> -->
    <!-- Tentang -->

    <!-- Rincian -->
    <!-- <section class="how-works r-mt-40 overview-block-ptb">
                        <div class="container">
                          <div class="row flex-row-reverse">
                            <div class="col-lg-8 ">
                              <img class="iq-works-img pull-right img-fluid" src="images/LOGO_TERAS_HITAM.png" alt="drive01">
                            </div>
                            <div class="col-lg-4  align-self-center">
                              <span class="badge iq-badge blue-bg iq-font-white iq-mtb-40">Rincian</span>
                              <h3 class="iq-tw-6 iq-mb-15 iq-font-30">All four Productivity Dashboards in one click</h3>
                              <p class="iq-font-15">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            </div>
                            <div class="iq-objectsnew">
                              <span class="iq-objects-02" data-bottom="transform:translatey(50px)" data-top="transform:translatey(-100px);">
                                <img src="images/03(2).png" class="img-fluid" alt="drive02" style="opacity: 0.3;">
                              </span>
                              <span class="iq-objects-03" data-bottom="transform:translatex(50px)" data-top="transform:translatex(-100px);">
                                <img src="images/04(2).png" class="img-fluid" alt="drive02" style="opacity: 0.3;">
                              </span>
                              <span class="iq-objects-04 iq-fadebounce">
                                <span class="iq-round"></span>
                              </span>
                            </div>
                          </div>
                        </div>
                      </section> -->

    <!-- Layanan -->
    <section class="iq-feature1 overview-block-ptb grey-bg" id="layanan">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="heading-title text-center">
                        <h2 class="title iq-tw-6">Layanan</h2>
                        <p>Lorem Ipsum is simply dummy text ever sincehar the 1500s, when an unknownshil printer took a
                            galley of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-lg-4 col-md-6 col-sm-6 iq-mtb-15">
                    <a href="publik/selfassessment">
                        <div class="iq-blog text-left iq-ptb-30 iq-pr-30 iq-pl-30">
                            <div>
                                <i class="ion-qr-scanner iq-mb-10"></i>
                                <h5 class="iq-tw-6 iq-pb-10">Self Assessment</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 iq-mtb-15">
                    <a href="publik/galeri">
                        <div class="iq-blog text-left iq-ptb-30 iq-pr-30 iq-pl-30">
                            <div>
                                <i class="ion-android-cart iq-mb-10"></i>
                                <h5 class="iq-tw-6 iq-pb-10">Galeri</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 iq-mtb-15">
                    <a href="publik/aduansaran">
                        <div class="iq-blog text-left iq-ptb-30 iq-pr-30 iq-pl-30">
                            <div>
                                <i class="ion-chatbubble-working iq-mb-10"></i>
                                <h5 class="iq-tw-6 iq-pb-10">Aduan & Saran</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 iq-mtb-15">
                    <a href="publik/agenda">
                        <div class="iq-blog text-left iq-ptb-30 iq-pr-30 iq-pl-30">
                            <div>
                                <i class="ion-clipboard iq-mb-10"></i>
                                <h5 class="iq-tw-6 iq-pb-10">Agenda Teras</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 iq-mtb-15">
                    <a href="publik/cctv">
                        <div class="iq-blog text-left iq-ptb-30 iq-pr-30 iq-pl-30">
                            <div>
                                <i class="ion-ios-videocam iq-mb-10"></i>
                                <h5 class="iq-tw-6 iq-pb-10">CCTV Teras</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 iq-mtb-15">
                    <a href="publik/statistik">
                        <div class="iq-blog text-left iq-ptb-30 iq-pr-30 iq-pl-30">
                            <div>
                                <i class="ion-stats-bars iq-mb-10"></i>
                                <h5 class="iq-tw-6 iq-pb-10">Data Statistik</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 iq-mtb-15">
                    <a role="button" data-toggle="modal" data-target="#informasi">
                        <div class="iq-blog text-left iq-ptb-30 iq-pr-30 iq-pl-30">
                            <div>
                                <i class="ion-information-circled iq-mb-10"></i>
                                <h5 class="iq-tw-6 iq-pb-10">Informasi Penting</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php
    $peta1 = '<iframe class="map" src="https://maps.google.com/maps?width=100%25&amp;hl=en&amp;q=Teras%20Malioboro%201%20Jl.%20Margo%20Mulyo,%20Ngupasan,%20Kec.%20Gondomanan,%20Kota%20Yogyakarta,%20Daerah%20Istimewa%20Yogyakarta%2055122+(Teras%20Malioboro%201)&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" style="border:0" allowfullscreen></iframe>';
    $peta2 = '<iframe class="map" src="https://maps.google.com/maps?width=100%25&amp;hl=en&amp;q=Teras%20Malioboro%201%20Jl.%20Margo%20Mulyo,%20Ngupasan,%20Kec.%20Gondomanan,%20Kota%20Yogyakarta,%20Daerah%20Istimewa%20Yogyakarta%2055122+(Teras%20Malioboro%201)&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" style="border:0" allowfullscreen></iframe>';
    $tm1 = '<iframe class="map" src="https://maps.google.com/maps?width=100%25&amp;hl=en&amp;q=Teras%20Malioboro%201%20Jl.%20Margo%20Mulyo,%20Ngupasan,%20Kec.%20Gondomanan,%20Kota%20Yogyakarta,%20Daerah%20Istimewa%20Yogyakarta%2055122+(Teras%20Malioboro%201)&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" style="border:0" allowfullscreen></iframe>';
    $tm2 = '<iframe class="map" src="https://maps.google.com/maps?width=100%25&amp;hl=en&amp;q=Teras%20Malioboro%202%20Jl.%20Malioboro%20No.56,%20Suryatmajan,%20Kec.%20Danurejan,%20Kota%20Yogyakarta,%20Daerah%20Istimewa%20Yogyakarta%2055212+(Teras%20Malioboro%202)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" style="border:0" allowfullscreen></iframe>';
    ?>

    <!-- Peta Interaktif -->
    <section class="overview-block-ptb white-bg " id="peta">
        <div class="container">

            <div class="heading-title blck text-center">
                <h2 class="title black iq-tw-6 iq-font-black">Peta Interaktif</h2>
                <p>Lorem Ipsum is simply dummy text ever sincehar the 1500s, when an unknownshil printer took a galley of
                    type and scrambled it to make a type specimen book.It has survived not only five centuries.</p>
            </div>
            <section class="footer-info">
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <?= $peta1 ?>
            </section>
        </div>
    </section>
    <!-- Peta Interaktif-->

    <!-- Footer -->
    <footer id="kontak" class="iq-footerr iq-ptb-20 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 iq-pb-40 iq-mb-20">
                    <div class="logo">
                        <section class="footer-info">
                            <br><br><br>
                            <?= $peta1 ?>
                    </div>
                    </section>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 iq-pt-10 iq-mtb-20">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-sm-6">
                            <div class="contact-bg">
                                <h5 class="iq-tw-6 iq-font-white iq-mb-10">Teras Malioboro 1</h5>
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
                                <h5 class="iq-tw-6 iq-font-white iq-mb-10">Teras Malioboro 2</h5>
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

                <div class="col-lg-3 col-md-12 col-sm-12 iq-pt-10 iq-pb-40 iq-mb-20">
                    <h5 class="iq-tw-6 iq-font-white iq-mb-10">Contact Us</h5>
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
                        </script> Kelompok 2 All Rights Reserved
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END -->

    {{-- Modal Informasi Penting --}}
    <div class="modal fade" id="informasi" tabindex="-1" role="log">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="title iq-tw-6">Informasi Penting</h5>
                    <a role="button" class="close" data-dismiss="modal">&times;</a>
                </div>
                <div class="modal-body">
                    
                    <div id="infopenting" class="carousel slide" data-bs-ride="carousel">
                        <ul class="carousel-indicators">
                            @php $count = -1; @endphp
                            @foreach($info_penting as $data)
                            @php $count++; @endphp
                            <?php if ($count == 0) { ?>
                            <li data-target="#infopenting" data-slide-to="<?= $count ?>" class="active"></li>
                            <?php } else if ($count != 0) { ?>
                            <li data-target="#infopenting" data-slide-to="<?= $count ?>"></li>
                            <?php } ?>
                            @endforeach
                        </ul>
                        <div class="carousel-inner">
                            @php $count = -1; @endphp
                            @foreach($info_penting as $data)
                            @php $count++; @endphp
                            <?php if ($count == 0) { ?>
                            <div class="carousel-item active">
                            <?php } else if ($count != 0) { ?>
                            <div class="carousel-item">
                            <?php } ?>
                                <img src="{{ asset('images/informasi-penting/'.$data->nama.'')}}" class="d-block w-100" alt="''.$data->nama.''">
                            </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#infopenting" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#infopenting" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal Informasi Penting END --}}

    <!-- back-to-top -->
    <div id="back-to-top">
        <a class="top" id="top" href="#top"> <i class="ion-ios-upload-outline"></i> </a>
    </div>
    <!-- back-to-top End -->
@endsection
