@extends('pedagang.layouts.footer')
@include('pedagang.partials.navbar')
@section('content')
    <style>
    </style>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Profile Pedagang</title>
    </head>

    <body>
        <section class="iq-feature1 overview-block-ptb grey-bg">
            <div class="container">
                <div class="col-lg-12 col-md-6 col-sm-12 iq-mtb-15">
                    <div class="iq-blog text-left iq-ptb-30 iq-pr-30 iq-pl-30">
                        <div>
                            <i class="ion-ios-grid-view-outline iq-mb-10"></i>
                            <img class="ion-ios-grid-view-outline iq-mb-10"
                                style="width: 150px; height: 150px; border-radius:100%;" src="{!! asset('images/fotoprofile.png') !!}"
                                alt="fotoprofile">
                            <h5 class="iq-tw-6">Profil</h5>
                        </div>
                        <div class="content-blog">
                            <p>Berisi profil pedagang teras malioboro</p>
                        </div>
                    </div>
                </div>
        </section>
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
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <img class="iq-works-img" src="{!! asset('images/logo.png') !!}">
                    </div>
                </div>
            </div>
            <div class="iq-objects">
                <span class="iq-objects-03" data-bottom="transform:translatex(50px)"
                    data-top="transform:translatex(-100px);">
                    <img src="{!! asset('images/drive/04.png') !!}" alt="drive02">
                </span>
            </div>
        </section>
        <section class="iq-feature1 overview-block-ptb grey-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-sm-12 iq-mtb-15">
                        <div class="iq-blog text-left iq-ptb-30 iq-pr-30 iq-pl-30">

                            <div>
                                <h5 class="mx-auto"><b>Profil Toko</b></h5>
                            </div>
                            <br>
                            <div class="col-lg-6 align-self-center">
                                <img class="iq-works-img"
                                    style="width: 370px; height: 250px; border-radius:10%; align-self-center;"
                                    src="{!! asset('images/fototoko.png') !!}" alt="">
                            </div>
                            <br>
                            <br>
                            <p>Nama Toko : {{ $nama }}</p>
                            <p>Jam Opersioanal :</p>
                            <p>Dagangan :</p>
                            <p>Lokasi :</p>

                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6 col-sm-12 iq-mtb-15">
                        <div class="iq-blog text-left iq-ptb-30 iq-pr-30 iq-pl-30">

                            <div>
                                <h5 class="mx-auto"><b>Profil Pedagang</b></h5>
                            </div>
                            <br>
                            <div class="content-blog">
                                <p>Nama Lengkap :</p>
                                <p>Nomor HP :</p>
                                <p>Gender :</p>
                                <p>Alamat :</p>
                                <p>Paguyuban :</p>
                                <p>NIK :</p>
                                <p>No KK :</p>
                                <p>Nomor NIB :</p>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        </div>

    </body>

    </html>
@endsection
