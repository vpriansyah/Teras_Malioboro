@extends('publik.layouts.home')

@section('content')
    <script src="{!! asset('dist/sweetalert2.all.min.js') !!}"></script>

    {{-- Notifikasi --}}
    @if (Session::has('message'))
        {{-- <li>{!! session('message') !!}</li> --}}
        <script>
            Swal.fire({
                title: 'Aduan dan Saran',
                text: 'Berhasil mengajukan aduan/saran.',
                icon: 'success',
                confirmButtonColor: '#1e7e34',
                confirmButtonText: 'Oke!'
            })
        </script>
    @endif

    <!-- Banner -->
    <section id="iq-home" class="iq-banner-12 light-success-bg">
        <div class="container" id="home">
            <div class="banner-text text-left">
                <div class="row justify-content-between">
                    <div class="col-md-5 align-self-center">
                        <h1 class="iq-font-black iq-tw-4"><b>Teras Malioboro</b></h1>
                        <h6 class="iq-font-black iq-mtb-40" style="text-align: justify; text-justify: inter-word;"> &emsp;
                            &emsp; Teras Malioboro ini merupakan tempat baru bagi para Pedagang Kaki
                            Lima (PKL) Malioboro.</h6>
                        <div>
                            <div class="btn-group dropright">
                                <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-expanded="false">
                                    Masuk
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{ url('auth/login') }}">Pedagang</a>
                                    <a class="dropdown-item" href="#">Operator</a>
                                    <a class="dropdown-item" href="#">Eksekutif</a>
                                </div>
                            </div>
                            {{-- <a href="{{ url('auth/login') }}" class="rounded-pill btn btn-success">Masuk</a><br> --}}
                        </div>
                        <div class="iq-ptb-30"></div>

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
    <!-- Rincian -->

    <!-- Layanan -->
    <section class="iq-feature1 overview-block-ptb grey-bg" id="layanan">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="heading-title text-center">
                        <h2 class="title iq-tw-6">Layanan</h2>
                        {{-- <p>Lorem Ipsum is simply dummy text ever sincehar the 1500s, when an unknownshil printer took a
                            galley of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries.</p> --}}
                    </div>
                </div>
            </div>
            <div class="row justify-content-md-center">
                {{-- <div class="col-lg-4 col-md-6 col-sm-6 iq-mtb-15">
                    <a href="publik/selfassessment">
                        <div class="iq-blog text-left iq-ptb-30 iq-pr-30 iq-pl-30">
                            <div>
                                <i class="ion-qr-scanner iq-mb-10"></i>
                                <h5 class="iq-tw-6 iq-pb-10">Self Assessment</h5>
                            </div>
                        </div>
                    </a>
                </div> --}}
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
                    <a href="publik/peta">
                        <div class="iq-blog text-left iq-ptb-30 iq-pr-30 iq-pl-30">
                            <div>
                                <i class="ion-map iq-mb-10"></i>
                                <h5 class="iq-tw-6 iq-pb-10">Peta Interaktif</h5>
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
                <div class="col-lg-4 col-md-6 col-sm-6 iq-mtb-15">
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
    <!-- Layanan -->

    <?php
    $peta1 = '<iframe class="map" src="https://maps.google.com/maps?width=100%25&amp;hl=en&amp;q=Teras%20Malioboro%201%20Jl.%20Margo%20Mulyo,%20Ngupasan,%20Kec.%20Gondomanan,%20Kota%20Yogyakarta,%20Daerah%20Istimewa%20Yogyakarta%2055122+(Teras%20Malioboro%201)&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" style="border:0" allowfullscreen></iframe>';
    $peta2 = '<iframe class="map" src="https://maps.google.com/maps?width=100%25&amp;hl=en&amp;q=Teras%20Malioboro%202%20Jl.%20Malioboro%20No.56,%20Suryatmajan,%20Kec.%20Danurejan,%20Kota%20Yogyakarta,%20Daerah%20Istimewa%20Yogyakarta%2055212+(Teras%20Malioboro%202)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" style="border:0" allowfullscreen></iframe>';
    $tm1 = '<iframe class="map" src="https://maps.google.com/maps?width=100%25&amp;hl=en&amp;q=Teras%20Malioboro%201%20Jl.%20Margo%20Mulyo,%20Ngupasan,%20Kec.%20Gondomanan,%20Kota%20Yogyakarta,%20Daerah%20Istimewa%20Yogyakarta%2055122+(Teras%20Malioboro%201)&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" style="border:0" allowfullscreen></iframe>';
    $tm2 = '<iframe class="map" src="https://maps.google.com/maps?width=100%25&amp;hl=en&amp;q=Teras%20Malioboro%202%20Jl.%20Malioboro%20No.56,%20Suryatmajan,%20Kec.%20Danurejan,%20Kota%20Yogyakarta,%20Daerah%20Istimewa%20Yogyakarta%2055212+(Teras%20Malioboro%202)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" style="border:0" allowfullscreen></iframe>';
    ?>

    <!-- Peta Interaktif -->
    {{-- <section class="overview-block-ptb white-bg " id="peta">
        <div class="container">

            <div class="heading-title blck text-center">
                <h2 class="title black iq-tw-6 iq-font-black">Peta Interaktif</h2>
                <p>Lorem Ipsum is simply dummy text ever sincehar the 1500s, when an unknownshil printer took a galley of
                    type and scrambled it to make a type specimen book.It has survived not only five centuries.</p>
            </div>
            <div>
                <div class="footer-info" style="width: 100%; padding: 10%">
                    <br><br><br><br><br><br><br><br><br><br>
                    <?= $peta1 ?>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Peta Interaktif-->

    <!-- Tentang -->
    <section class="overview-block-ptb white-bg " id="tentang">
        <div class="container">

            <div class="heading-title blck text-center">
                <h2 class="title black iq-tw-6 iq-font-black">Tentang</h2>
            </div>
            <div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-5 col-sm-8 col-8 d-flex align-items-md-center">
                        <img class="banner-img img-fluid iq-pb-20" src="{!! asset('images/LOGO_TERAS_HITAM.png') !!}" alt="teras-malioboro">
                    </div>
                    <div class="col-lg-8 col-md-7 col-sm-12 col-12 d-flex align-item-center"
                        style="text-align: justify; text-justify: inter-word;">
                        <p> &emsp; &emsp; <b>Sugeng Rawuh...</b> Selamat datang di <b>Teras Malioboro </b><br>
                                    Teras Malioboro telah menjadi lokasi pusat belanja barang-barang khas Kota Jogja dan sekitarnya. Platform Teras Malioboro memang belum lama dirilis sebagai salah satu platform penyedia informasi seputar teras malioboro secara update. Diplatform ini terdapat layanan seperti Galeri, CCTV, Peta Interaktif, Saran Aduan, Agenda Teras, Data Statistika, serta Informasi Penting.
                                    Pengunjung dapat melihat beragam macam barang dagangan dari pedagang kaki lima yang ada dikawasan teras malioboro pada fitur layanan galeri sekaligus mempermudah dalam  bertransaksi secara via online.
                                    Selain itu pengunjung dapat mengetahui jadwal yang tertera didalam fitur agenda teras serta informasi penting yang memberi update lebih lengkap. Bahkan pengunjung dapat melihat kondisi langsung teras malioboro melalui fitur CCTV. Tak kalah pentingnya pengunjung diberikan akses berpendapat serta mengadu dengan mengirimkan saran & aduan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tentang-->

    <!-- S&A Pilihan -->
    <section id="pilihan" class="overview-block-ptb grey-bg iq-blog">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="heading-title">
                <h2 class="title black iq-tw-6 iq-font-black">Saran & Aduan Pilihan</h2>
                {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley,</p> --}}
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="3" data-items-laptop="3" data-items-tab="2" data-items-mobile="1" data-items-mobile-sm="1" data-margin="30" >
                @foreach ($pilihan as $pilihan)
                <div class="item">
                  <div class="iq-blog-box">
                    <div class="iq-blog-detail">
                      <div class="blog-title"><h5 class="iq-tw-6 iq-mb-10">{{ $pilihan->jenis }}</h5></div>
                      <div class="blog-content">
                        <p>{{ $pilihan->saran_aduan }}</p>
                      </div>
                      <div class="iq-blog-meta">
                        <div class="blog-title"><h7 class="iq-tw-6 iq-mb-10">Jawaban Pengelola</h7></div>
                        <p>{{ $pilihan->jawaban }}</p>
                    </div>
                      <div class="iq-blog-meta">
                        <ul class="list-inline">
                          <li class="list-inline-item"><i class="fa fa-user-circle" aria-hidden="true"></i> {{ $pilihan->nama }}</li>
                          {{-- <li class="list-inline-item"><i class="fa fa-calendar" aria-hidden="true"></i> {{ $pilihan->waktu }}</li> --}}
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </section>
    <!-- S&A Pilihan -->

    <!-- Footer -->
    <footer id="kontak" class="iq-footerr">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 iq-pt-10 iq-mb-20" style="width: 100%; min-height: 200px">
                    <div class="footer-info" style="height: 100%; width: 100%; padding: 0%;">
                        <?= $peta1 ?>
                    </div>
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

                <style>
                    .contact-bg a:focus { color: #ffffff; text-decoration-line: underline !important;}
                    .contact-bg a:hover { color: #ffffff; text-decoration-line: underline !important;}
                    .contact-bg a { outline: medium none !important; color: #ffffff; text-decoration: none !important;}
                </style>

                <div class="col-lg-3 col-md-12 col-sm-12 iq-pt-10 iq-mtb-20">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-sm-6 col-7 iq-pb-20">
                            <div class="contact-bg">
                                <h5 class="iq-tw-6 iq-font-white iq-mb-10">Contact Us</h5>
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
                                <h5 class="iq-tw-6 iq-font-white iq-mb-10">Supported By</h5>
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="https://uns.ac.id/" target=”_blank”><img src="{{ asset('images/UNS.png') }}" alt="UNS" style="max-height: 25px"></a></li>
                                    <li class="list-inline-item"><a href="https://d3ti.vokasi.uns.ac.id/" target=”_blank”><img src="{{ asset('images/D3TI.png') }}" alt="D3TI" style="max-height: 25px"></a></li>
                                    <li class="list-inline-item"><a href="http://sims.co.id/" target=”_blank”><img src="{{ asset('images/SIMS.png') }}" alt="SIMS" style="max-height: 25px"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-lg-3 col-md-12 col-sm-12 iq-pt-10 iq-pb-10 iq-mb-10">
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
                </div>--}}
            </div>
            <hr>
            @include('copyright')
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
                            @foreach ($info as $data)
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
                            @foreach ($info as $data)
                                @php $count++; @endphp
                                <?php if ($count == 0) { ?>
                                <div class="carousel-item active">
                                    <?php } else if ($count != 0) { ?>
                                    <div class="carousel-item">
                                        <?php } ?>
                                        <img src="{{ asset('images/informasi-penting/' . $data->nama . '') }}"
                                            class="d-block w-100" alt="''.$data->nama.''">
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
