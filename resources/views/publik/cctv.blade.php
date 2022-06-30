@extends('publik.layouts.layanan')

@section('content')
    <section class="iq-feature1 overview-block-ptb-25 grey-bg" id="layanan">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="heading-title-layanan text-center">
                        <h2 class="title iq-tw-6">CCTV Teras</h2>
                    </div>
                    <h4 align="center" class="iq-pb-20">Kepadatan Pengunjung Teras Malioboro</h4>
                </div>
            </div>

            @php
                $gambar1 = $tm1->gambar1;
                $gambar2 = $tm2->gambar1;
                $status1 = $stat_tm1->status;
                $status2 = $stat_tm2->status;
            @endphp

            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title" align="center">Teras Malioboro 1</h4>
                            <hr>
                            <h5 class="title iq-tw-6 iq-pt-10" align="center">Status : <i
                                    style="color: {{ $stat_tm1->warna }};">{{ $status1 }}</i></h5>
                            @php
                                $foto1 = $tm1->gambar1;
                                $foto2 = $tm1->gambar2;
                                $foto3 = $tm1->gambar3;

                                if ($tm1->gambar1 == null) {
                                    $foto = 'notfound.jpg';
                                }
                            @endphp
                            <div id="tm1" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{!! asset('images/Publik_Galeri/' . $foto1 . '') !!}" class="d-block mw-100"
                                        style="height:auto; max-height:100%; width:auto;" alt="''.$tm1->gambar1.''">                                
                                        <div class="carousel-caption d-none d-md-block">
                                        <h4 style="color: #FFFFFF"><b>Lantai 1</b></h4>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{!! asset('images/Publik_Galeri/' . $foto2 . '') !!}" class="d-block mw-100"
                                        style="height:auto; max-height:100%; width:auto;" alt="''.$tm1->gambar2.''">                                
                                    <div class="carousel-caption d-none d-md-block">
                                        <h4 style="color: #FFFFFF"><b>Lantai 2</b></h4>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{!! asset('images/Publik_Galeri/' . $foto3 . '') !!}" class="d-block mw-100"
                                        style="height:auto; max-height:100%; width:auto;" alt="''.$tm1->gambar3.''">                                
                                    <div class="carousel-caption d-none d-md-block">
                                        <h4 style="color: #FFFFFF"><b>Lantai 3</b></h4>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-target="#tm1" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-target="#tm1" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </button>
                            </div>
                            <center><p style="user-select: none;"><b>{{$tm1->waktu}}</b></p></center>
                            <h5 class="title iq-tw-6">Keterangan :</h5>
                            <p>{{ $tm1->keterangan }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title" align="center">Teras Malioboro 2</h4>
                            <hr>
                            <h5 class="title iq-tw-6 iq-pt-10" align="center">Status : <i
                                    style="color: {{ $stat_tm2->warna }};">{{ $status2 }}</i></h5>
                            @php
                                $foto1 = $tm2->gambar1;
                                $foto2 = $tm2->gambar2;
                                $foto3 = $tm2->gambar3;
                                if ($tm2->gambar1 == null) {
                                    $foto = 'notfound.jpg';
                                }
                            @endphp
                            <div id="tm2" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{!! asset('images/Publik_Galeri/' . $foto1 . '') !!}" class="d-block mw-100"
                                        style="height:auto; max-height:100%; width:auto;" alt="''.$tm2->gambar1.''">                                
                                        <div class="carousel-caption d-none d-md-block">
                                        <h4 style="color: #FFFFFF"><b>Lantai 1</b></h4>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{!! asset('images/Publik_Galeri/' . $foto2 . '') !!}" class="d-block mw-100"
                                        style="height:auto; max-height:100%; width:auto;" alt="''.$tm2->gambar2.''">                                
                                    <div class="carousel-caption d-none d-md-block">
                                        <h4 style="color: #FFFFFF"><b>Lantai 2</b></h4>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{!! asset('images/Publik_Galeri/' . $foto3 . '') !!}" class="d-block mw-100"
                                        style="height:auto; max-height:100%; width:auto;" alt="''.$tm2->gambar3.''">                                
                                    <div class="carousel-caption d-none d-md-block">
                                        <h4 style="color: #FFFFFF"><b>Lantai 3</b></h4>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-target="#tm2" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-target="#tm2" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </button>
                            </div>
                            <center><p style="user-select: none;"><b>{{$tm2->waktu}}</b></p></center>
                            <h5 class="title iq-tw-6">Keterangan :</h5>
                            <p>{{ $tm2->keterangan }}</p>      
                        </div>
                    </div>
                </div>
            </div>

            {{-- </br>
            <center>
                <h4 class="title iq-tw-6">Teras Malioboro 1</h4>
                </br>
                <div class="card justify-content-center col-lg-6 col-md-12 "
                    style="background-color: {{ $stat_tm1->warna }}; border-color: {{ $stat_tm1->warna }}">
                    <div class="card-body">
                        <div style="font-size: 200%; color: white"><b>Status : {{ $status1 }}</b></div>
                    </div>


                </div>
                </br>
                <div class="m-auto justify-content-center align-items-center"
                    style="width: 100%; min-height:275px; height:100%; max-height:800px">
                    @php
                        $foto = $tm1->gambar;
                        if ($tm1->gambar == null) {
                            $foto = 'notfound.jpg';
                        }
                    @endphp
                    <img src="{!! asset('images/Publik_Galeri/' . $foto . '') !!}" class="d-block mw-100"
                        style="height:auto; max-height:175px; width:auto;" alt="''.$tm1->gambar.''">
                </div>
                </br>
                <h3><b>Keterangan :</b></h3>
                <h4><b>{{ $tm1->keterangan }}</b></h4>
                </br>
                </br>
                <h4 class="title iq-tw-6">Teras Malioboro 2</h4>
                </br>
                <div class="card justify-content-center col-lg-6 col-md-12 "
                    style="background-color: {{ $stat_tm2->warna }}; border-color: {{ $stat_tm2->warna }}">
                    <div class="card-body">
                        <div style="font-size: 200%; color: white"><b>Status : {{ $status2 }}</b></div>
                    </div>


                </div>
                </br>
                <div class="m-auto justify-content-center align-items-center"
                    style="width: 100%; min-height:275px; height:100%; max-height:800px">
                    @php
                        $foto = $tm2->gambar;
                        if ($tm2->gambar == null) {
                            $foto = 'notfound.jpg';
                        }
                    @endphp
                    <img src="{!! asset('images/Publik_Galeri/' . $foto . '') !!}" class="d-block mw-100"
                        style="height:auto; max-height:175px; width:auto;" alt="''.$tm2->gambar.''">
                </div>
                </br>
                <h3><b>Keterangan :</b></h3>
                <h4><b>{{ $tm2->keterangan }}</b></h4>

            </center> --}}
            </br>
            <div class="row justify-content-center">
                <a href="https://cctv.jogjakota.go.id/" type="button" class="btn btn-success btn-lg iq-tw-6">
                    Lihat CCTV</a>
            </div>
        </div>
    </section>
@endsection
