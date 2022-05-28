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
            
                @php
                    $gambar1 = $tm1->gambar;
                    $gambar2 = $tm2->gambar;
                    $status1 = $stat_tm1->status;
                    $status2 = $stat_tm2->status;
                @endphp
</br>               
                    <center>
                    <h3>Teras Malioboro 1</h3>
</br>
                    <div class="card justify-content-center col-lg-6 col-md-12 " style="background-color: {{$stat_tm1->warna}}; border-color: {{$stat_tm1->warna}}">
                        <div class="card-body">
                            <div style="font-size: 200%; color: white"><b>Status : {{$status1}}</b></div>
                        </div>
                        
                        
                    </div>
</br>
                    <div class="m-auto justify-content-center align-items-center" style="width: 100%; min-height:275px; height:100%; max-height:800px">
                    @php 
                        $foto = ($tm1->gambar);
                        if ($tm1->gambar == null) $foto= "notfound.jpg";                
                    @endphp
                    <img src="{!! asset('images/Publik_Galeri/' . $foto . '') !!}" class="d-block mw-100" style="height:auto; max-height:175px; width:auto;" alt="''.$tm1->gambar.''">
                    </div>
</br>
                    <h3><b>Keterangan :</b></h3>
                    <h4><b>{{$tm1->keterangan}}</b></h4>
</br>
</br>
                    <h3>Teras Malioboro 2</h3>
</br>
                    <div class="card justify-content-center col-lg-6 col-md-12 " style="background-color: {{$stat_tm2->warna}}; border-color: {{$stat_tm2->warna}}">
                        <div class="card-body">
                            <div style="font-size: 200%; color: white"><b>Status : {{$status2}}</b></div>
                        </div>
                        
                        
                    </div>
</br>
                    <div class="m-auto justify-content-center align-items-center" style="width: 100%; min-height:275px; height:100%; max-height:800px">
                    @php 
                        $foto = ($tm2->gambar);
                        if ($tm2->gambar == null) $foto= "notfound.jpg";                
                    @endphp
                    <img src="{!! asset('images/Publik_Galeri/' . $foto . '') !!}" class="d-block mw-100" style="height:auto; max-height:175px; width:auto;" alt="''.$tm2->gambar.''">
                    </div>
</br>
                    <h3><b>Keterangan :</b></h3>
                    <h4><b>{{$tm2->keterangan}}</b></h4>
                        
                </center>
                </br>
                    <div class="row justify-content-center">
                        <a href="https://cctv.jogjakota.go.id/" type="button" class="btn btn-success btn-lg iq-tw-6">
                            Lihat CCTV</a>
                    </div>
        </div>
    </section>
    
@endsection
