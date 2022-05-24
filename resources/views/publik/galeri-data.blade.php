@extends('publik.layouts.layanan')

@section('content')
    @foreach ($data_pkl as $data_pkl)
        @php
            $foto = $data_pkl->foto_lapak;
            $nomor = $data_pkl->no_hp;
            if ($data_pkl->no_hp == null) {
                $nomor = '-';
            }
            $lantai = $data_pkl->lokasi_lantai_id;
            $no_kios = $data_pkl->lokasi_no_kios_id;
            $gedung = $data_pkl->lokasi_gedung_id;
            $teras = $data_pkl->lokasi_teras_id;
            if ($data_pkl->foto_lapak == null) {
                $foto = 'notfound.jpg';
            }
            switch ($lantai) {
                case $data_pkl->lokasi_lantai_id == 111:
                    $lantai = 'Basement';
                    break;
                case $data_pkl->lokasi_lantai_id == 112:
                    $lantai = 'Lantai 1';
                    break;
                case $data_pkl->lokasi_lantai_id == 113:
                    $lantai = 'Lantai 2';
                    break;
                case $data_pkl->lokasi_lantai_id == 121:
                    $lantai = 'Lantai 1';
                    break;
                case $data_pkl->lokasi_lantai_id == 122:
                    $lantai = 'Lantai 2';
                    break;
            }
            
            switch ($teras) {
                case $data_pkl->lokasi_teras_id == 1:
                    $teras = 'Teras Malioboro 1';
                    break;
                case $data_pkl->lokasi_teras_id == 2:
                    $teras = 'Teras Malioboro 2';
                    break;
            }
            
            switch ($gedung) {
                case $data_pkl->lokasi_gedung_id == 11:
                    $gedung = 'Gedung A';
                    break;
                case $data_pkl->lokasi_gedung_id == 12:
                    $gedung = 'Gedung B';
                    break;
                case $data_pkl->lokasi_gedung_id == 13:
                    $gedung = 'Gedung C';
                    break;
                case $data_pkl->lokasi_gedung_id == 14:
                    $gedung = 'Gedung D';
                    break;
                case $data_pkl->lokasi_gedung_id == 15:
                    $gedung = 'Selasar';
                    break;
            }
            
        @endphp

        <section class="iq-feature1 overview-block-ptb-25 grey-bg" id="layanan">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="heading-title-layanan text-center">
                            <h2 class="title iq-tw-6">Data Pedagang</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-5 col-md-12 col-sm-12">
                                <div class="card border-0 justify-content-center">
                                    <img src="{!! asset('images/Publik_Galeri/' . $foto . '') !!}" class="d-flex"
                                        alt="''.$data_pkl->foto_lapak.''">
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-12 col-sm-12">
                                <div class="card border-0 justify-content-center">
                                  <div class="iq-plr-20 iq-pt-20">
                                    <h3 class="iq-tw-9 iq-plr-10">{{ $data_pkl->nama_lengkap }}</h3>
                                    <hr class="iq-pb-10 iq-mb-10">
                                    <table class="table table-borderless table-striped">
                                        {{-- <tr>
                                            <td><h6>Pedagang</h6></td>
                                            <td><h6> : </h6></td>
                                            <td><h6>{{ $data_pkl->nama_lengkap }}</h6></td>
                                        </tr> --}}
                                        <tr>
                                            <td><h6>Dagangan</h6></td>
                                            <td><h6> : </h6></td>
                                            <td colspan="2"><h6>{{ $data_pkl->dagangan }}</h6></td>
                                        </tr>
                                        <tr>
                                            <td><h6>Nomor HP</h6></td>
                                            <td><h6> : </h6></td>
                                            <td><h6>{{ $nomor }}</h6></td>
                                            <td align="right">
                                                @php
                                                $no_hp = ltrim($nomor, "0");
                                                @endphp
                                                @if ($data_pkl->no_hp == null)
                                                <a href="https://api.whatsapp.com/send?phone=62{{$no_hp}}&text=Saya%20tertarik%20untuk%20membeli%20produk%20anda%20segera." type="button" class="btn btn-success btn disabled" aria-disabled="true"><i class="fab fa-whatsapp"></i></a>
                                                 @else 
                                                <a href="https://api.whatsapp.com/send?phone=62{{$no_hp}}&text=Saya%20tertarik%20untuk%20membeli%20produk%20anda%20segera." type="button" class="btn btn-success" ><i class="fab fa-whatsapp"></i></a>  
                                                @endif 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><h6>Lokasi</h6></td>
                                            <td><h6> : </h6></td>
                                            <td colspan="2"><h6>{{ $lantai }}, {{ $gedung }}, {{ $teras }}</h6></td>
                                        </tr>
                                    </table>
                                    <div class="iq-pb-20">
                                        @if ($data_pkl->no_hp == null)
                                            <a href="https://api.whatsapp.com/send?phone=62{{$no_hp}}&text=Saya%20tertarik%20untuk%20membeli%20produk%20anda%20segera." type="button" class="btn btn-success btn disabled" aria-disabled="true"><i class="fab fa-whatsapp"></i>  Hubungi Pedagang</a>
                                        @else 
                                            <a href="https://api.whatsapp.com/send?phone=62{{$no_hp}}&text=Saya%20tertarik%20untuk%20membeli%20produk%20anda%20segera." type="button" class="btn btn-success" ><i class="fab fa-whatsapp"></i>  Hubungi Pedagang</a>  
                                        @endif 
                                        <a href="" type="button" class="btn btn-light btn disabled" aria-disabled="true" style="background-color: #E1306C; border-color: #E1306C ;color: #FFFFFF"> <i class="fab fa-instagram" style="color: #FFFFFF;"></i>  Instagram</a> 
                                        <a href="" type="button" class="btn btn-light btn disabled" aria-disabled="true" style="background-color: #FF6600 ; border-color: #FF6600  ;color: #FFFFFF"> <i class="fa fa-shopping-cart" style="color: #FFFFFF;"></i>  Shopee</a>  
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="iq-pt-20">
                            <button type="button" class="btn btn-danger" onclick="history.back();">Kembali</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endforeach
@endsection
