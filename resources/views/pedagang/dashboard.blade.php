@extends('pedagang.layouts.main')
@section('container')
    <!-- Banner -->
    <section id="home" class="iq-banner-12 light-success-bg">
        <div class="container" id="home">
            <div class="banner-text text-left">
                <div class="row justify-content-between">
                    <div class="col-md-6 align-self-center">
                        <h1><b class="iq-font-black iq-tw-4">Teras Malioboro</b></h1><br>
                        <h5 class="iq-font-black iq-mtb-20">Teras Malioboro ini merupakan tempat baru bagi para Pedagang
                            Kaki Lima (PKL) Malioboro.</h5><br>
                        <h5 class="text-danger   iq-mtb-20">*Laman ini khusus untuk pedagang.</h5><br>
                    </div>
                    <div class="col-md-6">
                        <img class="banner-img img-fluid center-block" src="images/home.jpg">
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-objects">
            <span class="banner-objects-01" data-bottom="transform:translatey(50px)"
                data-top="transform:translatey(-50px);">
                <img src="images/drive/03.png" alt="drive02">
            </span>
            <span class="banner-objects-02 iq-fadebounce">
                <span class="iq-round"></span>
            </span>
            <span class="banner-objects-03 iq-fadebounce">
                <span class="iq-round"></span>
            </span>
            <span class="banner-objects-04" data-bottom="transform:translatex(100px)"
                data-top="transform:translatex(-100px);">
                <img src="images/drive/04.png" alt="drive02">
            </span>
        </div>
    </section>
    <!-- Banner End -->
    <section id="infolanjut" class="overview-block-ptb how-works">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="iq-tw-6 iq-mb-25 text-danger">INFORMASI LANJUT</h4>
                    <h1><b>TERAS MALIOBORO</b></h1>
                    <p class="iq-font-15 iq-mt-20">Teras Malioboro 1 berlokasi di Gedung Eks Bioskop Indra, tepat berada
                        di seberang Pasar Beringharjo.
                        Sementara itu, Teras Malioboro 2 bertempat di eks Gedung Kantor Dinas Pariwisata DIY, tepatnya
                        di
                        sebelah utara Kantor DPRD DIY.</p>
                    <button href="" class="btn btn-success">Detail</button>
                </div>
                <div class="col-lg-6 align-self-center">
                    <img class="iq-works-img" src="images/logo.png">
                </div>
            </div>
        </div>
        <div class="iq-objects">
            <span class="iq-objects-03" data-bottom="transform:translatex(50px)" data-top="transform:translatex(-100px);">
                <img src="images/drive/04.png" alt="drive02">
            </span>
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
                        <div>
                            <i class="ion-ios-albums-outline iq-mb-10"></i>
                            <h5 class="iq-tw-6">Tindak Lanjut</h5>
                        </div>
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
