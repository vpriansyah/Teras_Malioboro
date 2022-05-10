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
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <nav class="navbar navbar-expand-lg navbar-light">
          <button class= "navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="ion-navicon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav justify-content-between">
              <li>
                <a class="nav-link" href="{{ url('publik/galeri');}}"> semua </a>
              </li>
            @foreach($kat_brg as $kat)  
              <li class="nav-item">
                <a class="nav-link" href="{{ url('publik/galeri');}}/{{$kat->id}} ">{{$kat->nama}}</a>
              </li>
            @endforeach
            </ul>
            <form class="form-inline my-2 my-lg-0 ml-auto">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
        </nav>
      </div>
    </div> 
  </div>
<hr>
<!---->
      
      <!--dropdown lokasi-->
      <div class="form-group iq-pt-10">
        <div class="row">
          <div class="col-lg-4 col-mb-6 col-sm-6">
              <label>Teras</label>
              <select class="form-control" name="jenis" id="combo1">
                <option value="!null">Semua</option>        
              @foreach($lokasi_teras as $teras)
                <option value="{{$teras->id}}">{{$teras->nama}}</option>
              @endforeach
            </select>
          </div>
          <div class="col-lg-4 col-mb-6 col-sm-6">
            <label>Gedung</label>
              <select class="form-control" name="jenis" id="combo1">   
                <option value="!null">Semua</option>         
              @foreach($lokasi_gedung as $gedung)
                <option value="{{$gedung->id}}">{{$gedung->nama}}</option>
              @endforeach
            </select>
          </div>
          <div class="col-lg-4 col-mb-6 col-sm-6">
            <label>lantai</label>
              <select class="form-control" name="jenis" id="combo1">
                <option value="!null">Semua</option>            
              @foreach($lokasi_lantai as $lantai)
                <option value="{{$lantai->id}}">{{$lantai->nama}}</option>
              @endforeach
            </select>
          </div>
        </div>
      </div>
      <!---->

      <!--card galeri-->
      <div class="container">
        <div class="row justify-content-md-center">
          @foreach($data_pkl as $data)
            <div class="col-lg-3 col-md-6 col-sm-6 iq-mtb-15 d-flex align-items-stretch">
              <a href="{{ url('publik/galeri-data');}}/{{$data->id}}">
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