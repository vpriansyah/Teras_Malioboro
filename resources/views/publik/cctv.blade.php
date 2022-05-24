@extends('publik.layouts.layanan')

@section('content')
    <section class="iq-feature1 overview-block-ptb-25 grey-bg" id="layanan">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="heading-title-layanan text-center">
                        <h2 class="title iq-tw-6">CCTV Teras</h2>
                    </div>
                    <h3 align="center">Kepadatan Pengunjung Teras Malioboro</h3>
                </div>
            </div>
            <center>
                @foreach ($cctv as $cctv)
                    @php
                        $status = $cctv->status;
                        $ket = '';
                        switch ($status) {
                            case $cctv->status == 'Sepi':
                                $ket = '~ Pengunjung diharap menggunakan masker';
                                $bgcolor = 'bg-info';
                                break;
                            case $cctv->status == 'Ramai':
                                $ket = '~ Pengunjung diharap menggunakan masker dan Menjaga jarak';
                                $bgcolor = 'bg-warning';
                                break;
                            case $cctv->status == 'Penuh':
                                $ket = '~ Pengunjung disarankan berkunjung di hari lain';
                                $bgcolor = 'bg-danger  text-white';
                                break;
                            case $cctv->status == 'Normal':
                                $ket = '~ Pengunjung diharap menggunakan masker';
                                $bgcolor = 'bg-success text-white';
                                break;
                        }
                    @endphp

                    
                    </br>
                    <div class="card {{ $bgcolor }} justify-content-center col-lg-6 col-md-12 ">
                        <div class="card-body">
                            <div style="font-size: 200%"><b>Status : {{ $cctv->status }}</b></div>
                        </div>
                    </div>

                    </br>

                    <center>
                        <div class="carousel-item active ">
                            <video class="col-lg-12 col-md-6" controls>
                                <source src="https://cctv.jogjakota.go.id/">
                            </video>
                        </div>
                    </br>
                        <h3><b>Keterangan :</h3></b>
                        <h6>{{ $ket }}</h6>
                    </center>
                </br>
                    <div class="row justify-content-center">
                        <a href="https://cctv.jogjakota.go.id/" type="button" class="btn btn-success btn-lg iq-tw-6">
                            Lihat CCTV</a>
                    </div>
            </center>
        </div>
    </section>
    @endforeach
@endsection
