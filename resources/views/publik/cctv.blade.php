@extends('publik.layouts.layanan')

@section('content')
<section class="iq-feature1 overview-block-ptb-25 grey-bg" id="layanan">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="heading-title-layanan text-center">
            <h2 class="title iq-tw-6">CCTV Teras</h2>
          </div>
          <center>
           @foreach ($cctv as $cctv)
           @php
           $status = $cctv->status;
           $ket ="";
           switch ($status) {
                case $cctv->status == "Sepi":
                    $ket = '~ Pengunjung diharap menggunakan masker';
                    $bgcolor = '#00FFFF';
                    break;
                case $cctv->status== "Ramai":
                  $ket = '~ Pengunjung diharap menggunakan masker dan Menjaga jarak';
                  $bgcolor = '#ffc40c';
                    break;
                case $cctv->status == "Penuh":
                  $ket = '~ Pengunjung disarankan berkunjung di hari lain';
                  $bgcolor = '#ff0800';
                    break;
                case $cctv->status== "Normal":
                  $ket = '~ Pengunjung diharap menggunakan masker';
                  $bgcolor = '#3fff00';
                    break;
                
            }

           @endphp
          <h3>Kepadatan Pengunjung Teras Malioboro</h3>
</br>       
          <div class="card m-auto justify-content-center col-lg-6 col-md-12 " style=" background-color: {{$bgcolor}}; border-color: {{$bgcolor}}">
            <h3><b>Status : {{ $cctv->status }}</b></h3>  
          </div>     
</br> 
          <center>
          <div class="carousel-item active ">
          <video class="col-lg-12 col-md-6" controls>
            <source src="https://cctv.jogjakota.go.id/">
          </video>
          </div>
          <div class="row justify-content-center">  
          <a href="https://cctv.jogjakota.go.id/" type="button" class="btn btn-primary btn-lg" > Lihat CCTV</a>       
          </div>
          </center>
</br>
          <h3><b>Keterangan :</h3></b>
          <h6>{{$ket}}</h6>
          </br>
          <div class="row justify-content-center">
          <a href="{{ url('publik/selfassessment'); }}" type="button" class="btn btn-success btn-lg" > Kunjungi Teras Malioboro</a>
          </div> 
        </div> 
      </div>
    </div>
</section>
@endforeach
@endsection