@extends('publik.layouts.layanan')

@section('content')
<section class="iq-feature1 overview-block-ptb-25 grey-bg" id="layanan">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="heading-title-layanan text-center">
            <h2 class="title iq-tw-6">Galeri</h2>
          </div>
        </div>
      </div>
      <!--navbar-->
      <div class="tab-v1">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link" href="/publik/galeri">Semua</a></li>
          @foreach($kat_brg as $kat)
            <li class="nav-item">
              <a class="nav-link" href="/publik/galeri/{{$kat->id}}">{{$kat->nama}}</a></li>
          @endforeach
          <li>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </li>
        </ul>
      </div>
      <!---->
      


      <!--card galeri-->
      <div class="container">
        <div class="row justify-content-md-center">
          @foreach($data_pkl as $data)
            <div class="col-lg-3 col-md-6 col-sm-6 iq-mtb-15 d-flex align-items-stretch">
              <a href="galeri-data/{{$data->id}}">
                <div class="iq-blog text-left iq-ptb-30 iq-pr-30 iq-pl-30">
                 <div>
                    @php 
                      $foto = ($data->foto_lapak);
                      if ($data->foto_lapak == null) $foto= "notfound.jpg";                
                    @endphp
                    <div class ="card border-0 justify-content-center" style="width: 200px; height:200px;">
                     <img src="{!! asset('images/Publik_Galeri/' . $foto . '') !!}" class="d-block w-100 " alt="''.$data->foto_lapak.''">
                    </div> 
                      <center> <h5 class="iq-tw-6 iq-pb-10">{{$data->nama_lengkap}}</h5> </center>
                      <center>{{$data->dagangan}}</center>
                      <p>{{$data->operasional}}<br>
                         Jam Buka: {{$data->operasional_jam_buka}}.00 - {{$data->operasional_jam_tutup}}.00</p>
                  </div>
                </div>
              </a>
            </div>
          @endforeach
        <!---->
        </div>
      </div>
    </div>
  </section>
@endsection