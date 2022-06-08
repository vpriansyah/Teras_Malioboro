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
        <section class="iq-feature1 overview-block-nw grey-bg">
            <div class="container">
                <div class="col-lg-12 col-md-6 col-sm-12 iq-mtb-15">
                    <div class="iq-blog text-left iq-ptb-30 iq-pr-30 iq-pl-30">
                        <div class="content-blog iq-pr-50">
                            <h3 class="">{{ auth()->user()->username }}</h3>
                            <h5 class="text-success">Pedagang AKTIF</h5>
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

        <section class="iq-feature1 overview-block-md grey-bg">
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
                            <table>
                                <tr>
                                    <th style="width:5%"></th>
                                    <th style="width:40%"></th>
                                    <th style="width:10%"></th>
                                </tr>
                                @foreach ($data_pkl as $data)
                                    <tr>
                                        <td></td>
                                        <td>Nama Toko</td>
                                        <td>:</td>
                                        <td>Toko Setia Abadi</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Jam Operasional</td>
                                        <td>:</td>
                                        <td>{{ $data->operasional_jam_buka }} AM sampai
                                            {{ $data->operasional_jam_tutup }}
                                            PM</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Dagangan</td>
                                        <td>:</td>
                                        <td>{{ $data->dagangan }}</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Lokasi no Kios</td>
                                        <td>:</td>
                                        <td>{{ $data->lokasi_no_kios_id }}</td>
                                    </tr>
                            </table>
                            <br>
                            <center><button type="button" class="btn btn-success">Edit</button></center>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6 col-sm-12 iq-mtb-15">
                        <div class="iq-blog text-left iq-ptb-30 iq-pr-30 iq-pl-30">

                            <div>
                                <h5 class="mx-auto"><b>Profil Pedagang</b></h5>
                            </div>
                            <br>
                            <table>
                                <tr>
                                    <th style="width: 10%"></th>
                                    <th style="width: 5%"></th>
                                    <th style="width: 5%"></th>
                                    <th style="width: 10%"></th>
                                </tr>


                                <tr>
                                    <td></td>
                                    <td>Nama Lengkap</td>
                                    <td>:</td>
                                    <td>{{ $data->nama_lengkap }}</td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td>Nomor HP</td>
                                    <td>:</td>
                                    <td>{{ $data->no_hp }}</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Gender</td>
                                    <td>:</td>
                                    <td>{{ $data->gender }}</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td>{{ $data->alamat_ktp }}</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Paguyuban</td>
                                    <td>:</td>
                                    <td>{{ $data->paguyuban_id }}</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>NIK</td>
                                    <td>:</td>
                                    <td>{{ $data->nik }}</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>No KK</td>
                                    <td>:</td>
                                    <td>{{ $data->no_kk }}</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Nomor NIB</td>
                                    <td>:</td>
                                    <td>{{ $data->nomor_nib }}</td>
                                </tr>

                            </table>
                            <br>
                            <center><button type="button" class="btn btn-success"><span
                                        class="spinner-border spinner-border-sm"></span>Edit</button></center>
                        </div>
                        <br>
                        <div class="alert alert-warning">
                            <strong>Warning ! </strong> Tidak boleh asal dalam mengedit data pedagang.
                        </div>
                    </div>

                </div>
                @endforeach
        </section>
        <br>
        <br>

        <div class="container">
            <div class="heading-title text-center">
                <h2 class="title iq-tw-6">Barang Dagangan</h2>
            </div>
            <div class="row justify-content-md-center">
                @foreach ($barang as $barang)
                    <div class="card col-lg-3 justify-content-center col-md-4 col-sm-6 iq-mtb-15 d-flex align-items-stretch mx-auto"
                        style="width:50%;">
                        <div class=" iq-blog text-left iq-ptb-15 iq-pr-10 iq-pl-10 d-flex ">
                            <div class="m-auto justify-content-center align-items-center"
                                style="width: 100%; min-height:275px; height:100%; max-height:800px">
                                @php
                                    $foto = $barang->gambar;
                                    if ($barang->gambar == null) {
                                        $foto = 'notfound.jpg';
                                    }
                                @endphp
                                <div class="card m-auto justify-content-center bg-transparent border-0"
                                    style="padding-top:30%; width:auto; max-width: 75%; height:25%; max-height:100px">
                                    <img src="{!! asset('images/Publik_Galeri/' . $foto . '') !!}" class="d-block mw-100"
                                        style="height:auto; max-height:175px; padding-top:5%;; width:auto;"
                                        alt="''.$barang->gambar.''">
                                </div>
                                <div class="card m-auto justify-content-center bg-transparent border-0">
                                    <h3 class="iq-tw-6 iq-pb-5 m-auto" style=" font-size: 150%; padding-top: 40%">
                                        {{ $barang->barang }}</h3>
                                    <p class="card-text">
                                        <center>Harga Menyesuaikan SiBakul Jogja</center>
                                    </p>
                                    <a href="https://sibakuljogja.jogjaprov.go.id/app/Beranda"
                                        class="btn btn-success">SiBakul Jogja</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>


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
                            <a href="/saran">
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
                            <a href="/profil">
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
                            <a href="/informasi">
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
                            <a href="/statistik">
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
                            <a href="/agenda">
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

    </body>

    </html>
@endsection
