@extends('publik.layouts.layanan')

@section('content')
<section class="iq-feature1 overview-block-ptb-25 grey-bg" id="layanan">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="heading-title-layanan text-center">
            <h2 class="title iq-tw-6">Gallery</h2>
          </div>
        </div>
      </div>
      <!--navbar-->
      <div class="tab-v1">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link" href="galeri" data-toggle="tab">Semua</a></li>
          @foreach($kat_brg as $kat)
            <li class="nav-item">
              <a class="nav-link" href="galeri/{{$kat->nama}}" data-toggle="tab">{{$kat->nama}}</a></li>
          @endforeach
          <li>
          <form class="d-flex">
                <div class="input-group">                    
                    <input type="text" class="form-control" placeholder="Search">
                    <button type="button" class="btn btn-secondary"><i class="bi-search"></i></button>
                </div>
        </form>
          </li>
        </ul>
      </div>
      <!---->
      


      <!--card galeri-->
      @foreach($data_pkl as $data)
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-lg-3 col-md-6 col-sm-6 iq-mtb-15">
            <a href="galeri-data">
              <div class="iq-blog text-left iq-ptb-30 iq-pr-30 iq-pl-30">
                <div>
                  @php 
                  $foto = ($data->foto_lapak);
                  if ($data->foto_lapak == null) $foto= "notfound.jpg";                
                  @endphp
                  <img src="{!! asset('images/Publik_Galeri/' . $foto . '') !!}" class="d-block w-100" alt="''.$data->foto_lapak.''">
                  <center> <h5 class="iq-tw-6 iq-pb-10">{{$data->nama_lengkap}}</h5> </center>
                  <center>{{$data->dagangan}}</center>
                  <p>{{$data->operasional}}<br>
                  Jam Buka: {{$data->operasional_jam_buka}}.00 - {{$data->operasional_jam_tutup}}.00</p>
                </div>
              </div>
            </a>
          </div>
        </div>
        @endforeach
        <!---->
      </div>
    </div>
  </section>
@endsection